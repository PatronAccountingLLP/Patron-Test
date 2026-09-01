<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use RuntimeException;

/**
 * Read-only client for the Google Business Profile APIs.
 *
 * Three hosts, because the old My Business API was split up in 2022 and the
 * pieces did not all land on the same version:
 *
 *   accounts   mybusinessaccountmanagement.googleapis.com/v1
 *   locations  mybusinessbusinessinformation.googleapis.com/v1
 *   reviews    mybusiness.googleapis.com/v4   <- never migrated off v4
 *
 * Only what the review sync needs is implemented: list the accounts, list each
 * account's locations, page through a location's reviews.
 */
class GoogleBusinessProfile
{
    private const TOKEN_CACHE_KEY = 'gbp.access_token';

    /**
     * True when credentials are present. The sync checks this so it can exit
     * with an explanation rather than a stack trace.
     */
    public function configured(): bool
    {
        return (bool) (config('google-business.client_id')
            && config('google-business.client_secret')
            && config('google-business.refresh_token'));
    }

    /**
     * Exchange the long-lived refresh token for an access token.
     *
     * Google's access tokens last an hour; this caches for 55 minutes so a
     * long sync never continues with a token that expires mid-run.
     */
    public function accessToken(): string
    {
        return Cache::remember(self::TOKEN_CACHE_KEY, now()->addMinutes(55), function () {
            $res = Http::asForm()->post(config('google-business.endpoints.token'), [
                'client_id'     => config('google-business.client_id'),
                'client_secret' => config('google-business.client_secret'),
                'refresh_token' => config('google-business.refresh_token'),
                'grant_type'    => 'refresh_token',
            ]);

            if (!$res->successful() || !$res->json('access_token')) {
                throw new RuntimeException(
                    'Could not refresh the Google access token: ' . $res->body()
                );
            }

            return $res->json('access_token');
        });
    }

    /**
     * A GET with the bearer token attached.
     *
     * Quota exhaustion and "not approved yet" both surface as 403 here, so the
     * body is passed through - it is the only thing that tells them apart.
     */
    private function get(string $url, array $query = []): array
    {
        $res = Http::withToken($this->accessToken())
            ->acceptJson()
            ->retry(3, 2000, throw: false)
            ->get($url, $query);

        if ($res->status() === 429) {
            throw new RuntimeException('Rate limited by Google (429). Re-run later.');
        }

        if (!$res->successful()) {
            throw new RuntimeException(
                'GET ' . $url . ' failed [' . $res->status() . ']: ' . $res->body()
            );
        }

        return $res->json() ?? [];
    }

    /**
     * Every account the authorised user can manage.
     *
     * @return array<int, array{name: string, accountName: string}>
     */
    public function accounts(): array
    {
        $out  = [];
        $page = null;

        do {
            $data = $this->get(
                config('google-business.endpoints.accounts') . '/accounts',
                array_filter(['pageSize' => 20, 'pageToken' => $page])
            );

            foreach ($data['accounts'] ?? [] as $a) {
                $out[] = [
                    'name'        => $a['name'] ?? '',           // "accounts/123"
                    'accountName' => $a['accountName'] ?? '',
                ];
            }

            $page = $data['nextPageToken'] ?? null;
        } while ($page);

        return $out;
    }

    /**
     * Every location on an account.
     *
     * readMask is mandatory on this API - omit it and the call 400s rather
     * than returning defaults.
     *
     * @param  string  $account  "accounts/123"
     * @return array<int, array{id: string, title: string, city: string}>
     */
    public function locations(string $account): array
    {
        $out  = [];
        $page = null;

        do {
            $data = $this->get(
                config('google-business.endpoints.locations') . '/' . $account . '/locations',
                array_filter([
                    'readMask' => 'name,title,storefrontAddress',
                    'pageSize' => config('google-business.page_size.locations'),
                    'pageToken' => $page,
                ])
            );

            foreach ($data['locations'] ?? [] as $l) {
                // Comes back as "locations/123"; the reviews endpoint wants the
                // bare id so it can build accounts/{a}/locations/{id}.
                $id = str_replace('locations/', '', $l['name'] ?? '');

                $out[] = [
                    'id'    => $id,
                    'title' => $l['title'] ?? $id,
                    'city'  => $l['storefrontAddress']['locality'] ?? '',
                ];
            }

            $page = $data['nextPageToken'] ?? null;
        } while ($page);

        return $out;
    }

    /**
     * One page of a location's reviews, newest first.
     *
     * orderBy defaults to updateTime desc, which is what makes an incremental
     * sync possible: an edited review moves back to the top, so walking down
     * until the first unchanged review catches new AND edited ones. Sorting by
     * create time would silently miss edits.
     *
     * @return array{reviews: array, nextPageToken: ?string, totalReviewCount: int, averageRating: float}
     */
    public function reviews(string $account, string $locationId, ?string $pageToken = null): array
    {
        $url = sprintf(
            '%s/%s/locations/%s/reviews',
            config('google-business.endpoints.reviews'),
            $account,
            $locationId
        );

        $data = $this->get($url, array_filter([
            'pageSize'  => config('google-business.page_size.reviews'),
            'orderBy'   => 'updateTime desc',
            'pageToken' => $pageToken,
        ]));

        return [
            'reviews'          => $data['reviews'] ?? [],
            'nextPageToken'    => $data['nextPageToken'] ?? null,
            'totalReviewCount' => (int) ($data['totalReviewCount'] ?? 0),
            'averageRating'    => (float) ($data['averageRating'] ?? 0),
        ];
    }

    /**
     * Google sends star ratings as words ("FIVE"), not numbers.
     */
    public static function starRating(?string $star): int
    {
        return [
            'ONE' => 1, 'TWO' => 2, 'THREE' => 3, 'FOUR' => 4, 'FIVE' => 5,
        ][$star] ?? 0;
    }
}

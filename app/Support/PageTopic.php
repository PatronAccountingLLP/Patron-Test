<?php

namespace App\Support;

/**
 * Turns a URL path into the name of the page, for the enquiry messages.
 *
 * partials/bigin-form already does this to tag a lead with the service it came
 * from, but only pages that actually render the form publish a name. The
 * calculators, and any other page with no form on it, published nothing - so the
 * floating WhatsApp button in partials/footer fell back to "I just visited your
 * website" even on a page with a perfectly good name of its own.
 *
 * This is that same de-slug, callable from anywhere. The rules are copied from
 * bigin-form deliberately, so a page's floating button and its in-page buttons
 * cannot disagree about what the page is called:
 *
 *   /tools/advance-tax-calculator   -> Advance Tax Calculator
 *   /gst-registration               -> GST Registration
 *   /stock-audit-mumbai             -> Stock Audit in Mumbai
 *   /accounting-services/pune       -> Accounting Services in Pune
 *
 * bigin-form is left alone on purpose. Its copy of this logic decides how leads
 * are filed in the CRM, and rewiring it to call this class would put a working
 * lead pipeline at risk for a cosmetic gain.
 *
 * ---------------------------------------------------------------------------
 * 2026-09-18. De-slugging the LAST segment alone is only right when that segment
 * is the name of the thing. On 800 live URLs it was not, and the button sent a
 * message no salesperson could act on:
 *
 *   /port-code/chennai-port/inmaa1                  -> "your Inmaa1 page"
 *   /income-tax-depreciation-rate/ac                -> "your Ac page"
 *   /updates/income-tax/notification-notification-8 -> "your Notification Notification 8 page"
 *   /case-laws/aar/kandla-port-trust-guj-gaar-r-...  -> a whole citation, verbatim
 *   /blog/page-2                                    -> "your Page 2 page"
 *
 * The rules below fix all of them, and each one either produces something a
 * human would say out loud or returns '' so the caller uses the generic
 * message. Returning '' is always the safe answer: a vague opener beats a
 * wrong one.
 */
class PageTopic
{
    /** Cities that appear as a trailing segment or suffix and read as "in <City>". */
    private const CITIES = [
        'delhi', 'mumbai', 'pune', 'gurugram', 'gurgaon', 'bangalore', 'bengaluru', 'chennai',
        'kolkata', 'hyderabad', 'ahmedabad', 'noida', 'jaipur', 'surat', 'lucknow', 'indore',
        'chandigarh', 'coimbatore', 'kochi', 'thane', 'nagpur', 'bhopal', 'patna', 'vadodara',
    ];

    /** Words that stay fully capitalised. */
    private const ACRONYMS = [
        'gst', 'itr', 'tds', 'tcs', 'roc', 'llp', 'opc', 'msme', 'iec', 'esop', 'fssai', 'fcra',
        'pan', 'tan', 'ngo', 'aoa', 'moa', 'ca', 'cs', 'imf', 'epf', 'esic', 'nic', 'hsn', 'ifsc',
        'caro', 'aoc', 'adt', 'chg', 'stk', 'egm', 'agm', 'ncd', 'rpt', 'posh', 'fmv', 'cma',
        'mis', 'ind', 'usa', 'uk', 'uae', 'din', 'kyc', 'ppf', 'nps', 'sez', 'stpi', 'edf',
        'qrmp', 'gstr', 'gstat', 'mca', 'sebi', 'rbi', 'fema', 'ais', 'sa', 'fc',
        // Depreciation assets and case-law forums. On those families the acronym
        // IS the page name, and title-casing turned it into a word ("Ac", "Ups").
        'ac', 'ups', 'led', 'cctv', 'ev', 'aar', 'aaar', 'cfs', 'icd', 'lcs',
    ];

    /** Words left lowercase unless they open the name. */
    private const SMALL = ['for', 'of', 'in', 'and', 'to', 'the', 'a', 'an', 'vs', 'by', 'on', 'with'];

    /**
     * Paths with no service of their own. These must keep the generic message:
     * "I just visited your Contact Us page" reads worse than "your website", and
     * a hub or listing page is not a thing anyone enquires about by name.
     */
    private const GENERIC = [
        '', 'contact-us', 'contact', 'about-us', 'about', 'tools', 'blog', 'search',
        'privacy-policy', 'terms-and-conditions', 'disclaimer', 'sitemap', 'careers',
        'authorhub',
    ];

    /**
     * Sections whose own page and whose immediate children are listings, not
     * things. /updates, /updates/gst, /case-laws and /case-laws/aar are indexes;
     * only the third segment under them names an actual document.
     *
     * /blog is NOT in here and must not be: /blog/<category> is a listing but
     * /blog/<post-slug> is a post, and at this level they are the same shape -
     * putting 'blog' here silently blanked the name of all 1,019 posts. The blog
     * listing view declares itself instead, via pa.page_is_listing.
     */
    private const SECTION_ROOTS = ['updates', 'case-laws', 'glossary'];

    /**
     * Families where the parent segment carries the meaning and the last segment
     * on its own is a fragment. "%s" is the de-slugged last segment.
     */
    private const CONTEXT = [
        'income-tax-depreciation-rate' => '%s Depreciation Rate',
        'port-code'                    => '%s Port Code',
        'hsn-code'                     => 'HSN Code %s',
        'nic-code'                     => '%s NIC Code',
    ];

    /**
     * The page's name, or '' when the page has no name of its own and the caller
     * should use the generic message.
     */
    public static function fromPath(?string $path): string
    {
        $path = trim((string) $path, '/');

        if (in_array(strtolower($path), self::GENERIC, true)) {
            return '';
        }

        $segments = array_values(array_filter(explode('/', strtolower($path))));

        // Pagination is not a page: /blog/page-2 read as "your Page 2 page".
        // Drop it and judge whatever it was paginating.
        while ($segments && preg_match('/^page-\d+$/', (string) end($segments))) {
            array_pop($segments);
        }
        if (! $segments) {
            return '';
        }
        // ...and judge it again, or /blog/page-2 comes back as "Blog".
        if (in_array(implode('/', $segments), self::GENERIC, true)) {
            return '';
        }

        // An index, or a section index under one of the listing roots.
        $root = $segments[0];
        if (in_array($root, self::SECTION_ROOTS, true) && count($segments) <= 2) {
            return '';
        }

        // A trailing /pune reads as "in Pune" on the segment before it.
        $city = null;
        if (in_array(end($segments), self::CITIES, true)) {
            $city = array_pop($segments);
        }
        if (! $segments) {
            return '';
        }

        $slug = preg_replace('/\.(html?|php)$/i', '', (string) end($segments));

        // A code page ends in the code itself - /hsn-code/48193000, or
        // /port-code/chennai-port/inmaa1 - and the code alone is not a name. The
        // segment in front says what the code belongs to, so the two are read
        // together: "HSN Code 48193000", "Chennai Port Code INMAA1".
        $code = null;
        if (self::isCode($slug) && count($segments) > 1) {
            $code = strtoupper($slug);
            array_pop($segments);
            $slug = (string) end($segments);
        }

        $parts = array_values(array_filter(explode('-', $slug)));

        // ...and so does a trailing -pune on the slug itself.
        if ($city === null && $parts && in_array(end($parts), self::CITIES, true)) {
            $city = array_pop($parts);
        }

        $name = self::words($parts);

        // Only a name this method COMPOSED gets de-duplicated. Run it over every
        // slug and it edits titles that were always correct: "Clubbing of Income
        // vs Transfer of Income" lost its ending, and "The 50 50 Rule for NBFCs"
        // became "The 50 Rule".
        $composed = false;

        // /updates/income-tax/circular-circular-no-6-2026 is a document, and the
        // section above it says which law it belongs to. Without that the message
        // said "your Circular Circular No 6 2026 page".
        if ($root === 'updates' && count($segments) >= 2) {
            $name = trim(self::words(explode('-', $segments[1])).' '.$name);
            $composed = true;
        }

        // A case-law citation is a dozen words of party names and docket numbers.
        // Nobody reads that aloud, so the forum is the topic: "AAR Case Law".
        if ($root === 'case-laws' && count($segments) >= 2) {
            $name = trim(self::words(explode('-', $segments[1])).' Case Law');
        }

        if (isset(self::CONTEXT[$root]) && count($segments) > 1) {
            $name = trim(sprintf(self::CONTEXT[$root], $name));
            $composed = true;
        }

        if ($composed) {
            $name = self::dedupe($name);
        }

        if ($name !== '' && $code !== null) {
            $name .= ' '.$code;
        }
        if ($name !== '' && $city !== null) {
            $name .= ' in '.ucfirst($city);
        }

        // Anything still this short, or still a bare code, is not a page name.
        $bare = trim((string) preg_replace('/ in [A-Z][a-z]+$/', '', $name));
        if (mb_strlen($bare) < 4 || self::isCode($bare)) {
            return '';
        }

        return $name;
    }

    /** A code is a number, or the INxxx0 shape the port list uses. */
    private static function isCode(string $slug): bool
    {
        return (bool) preg_match('/^\d+$/', $slug)
            || (bool) preg_match('/^in[a-z]{3}\d$/i', $slug);
    }

    /** The de-slug itself: cased words from hyphen-separated parts. */
    private static function words(array $parts): string
    {
        $words = [];
        foreach (array_values(array_filter($parts)) as $i => $word) {
            if (preg_match('/^\d+[a-z]$/i', $word)) {          // 12a, 80g
                $words[] = strtoupper($word);
            } elseif (in_array($word, self::ACRONYMS, true)) {
                $words[] = strtoupper($word);
            } elseif ($i > 0 && in_array($word, self::SMALL, true)) {
                $words[] = $word;
            } else {
                $words[] = ucfirst($word);
            }
        }

        return trim(implode(' ', $words));
    }

    /**
     * Slugs repeat themselves - "notification-notification-no-8",
     * "central-tax-01-2026-central-tax" - and prefixing the section can add a
     * third copy. Drop a word that immediately repeats, then a tail of two or
     * more words that already appeared earlier in the name.
     */
    private static function dedupe(string $name): string
    {
        $words = array_values(array_filter(explode(' ', $name)));

        $out = [];
        foreach ($words as $w) {
            if ($out && strcasecmp((string) end($out), $w) === 0) {
                continue;
            }
            $out[] = $w;
        }

        $n = count($out);
        for ($len = intdiv($n, 2); $len >= 2; $len--) {
            $tail = implode(' ', array_slice($out, -$len));
            $head = array_slice($out, 0, $n - $len);
            for ($i = 0; $i + $len <= count($head); $i++) {
                if (strcasecmp(implode(' ', array_slice($head, $i, $len)), $tail) === 0) {
                    return implode(' ', $head);
                }
            }
        }

        return implode(' ', $out);
    }
}

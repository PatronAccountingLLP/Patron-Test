<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * A page published from Radar — a regulatory update, or a GST advance ruling.
 *
 * The content lives in `payload`, as Radar sent it. See the migration for why.
 */
class RadarPublication extends Model
{
    protected $fillable = [
        'kind', 'doc_key', 'section', 'slug', 'path',
        'title', 'meta_title', 'meta_description', 'meta_keywords',
        'dated', 'payload', 'pdf_path', 'content_hash', 'published_at',
    ];

    protected $casts = [
        'payload'      => 'array',
        'dated'        => 'date',
        'published_at' => 'datetime',
    ];

    /** Sections, and what they are called in a heading and a breadcrumb. */
    public const SECTIONS = [
        'notif' => [
            'gst'         => 'GST',
            'income-tax'  => 'Income Tax',
            'mca'         => 'MCA',
        ],
        'case' => [
            'aar'  => 'Advance rulings (AAR)',
            'aaar' => 'Appellate orders (AAAR)',
        ],
    ];

    public static function sectionName(string $kind, string $section): string
    {
        return self::SECTIONS[$kind][$section] ?? strtoupper($section);
    }

    /**
     * The left-hand rail: everything else published in this section, newest first.
     *
     * ── RUN ON EVERY REQUEST, ON PURPOSE ──────────────────────────────────────────────────────
     *
     * Radar deliberately sends no list of neighbours. If it did, every page would be frozen with
     * the list as it stood the day it was published: a circular published today would be missing
     * from the rail of every page already live in its section, and nobody would notice, because
     * each page looks perfectly correct on its own.
     *
     * Asking here instead means a new page appears in the rail of every existing page in its
     * section the moment it is published, with nothing re-pushed and nothing rebuilt.
     */
    public static function railFor(string $kind, string $section, int $limit = 20)
    {
        return static::query()
            ->where('kind', $kind)
            ->where('section', $section)
            ->orderByRaw('COALESCE(dated, DATE(published_at)) DESC')
            ->orderByDesc('id')
            ->limit($limit)
            // kind and section are selected because railLabel() reads them. A partial select that
            // omits a column an accessor needs returns null, not an error: the label would simply
            // come out of the wrong branch, on every row, quietly.
            ->get(['id', 'kind', 'section', 'title', 'path', 'dated', 'payload']);
    }

    /** One field out of the payload, without an isset() at every call site. */
    public function p(string $key, $default = null)
    {
        return $this->payload[$key] ?? $default;
    }

    /** The label under a rail entry: the document's own number, or its section. */
    public function railLabel(): string
    {
        $bits = $this->kind === 'notif'
            ? [$this->p('category', ''), $this->p('doc_no', '')]
            : [$this->p('citation', '') ?: $this->p('order_no', '')];

        return trim(implode(' ', array_filter(array_map('trim', $bits))));
    }
}

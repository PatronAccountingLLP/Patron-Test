<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * One website visit. Updated in place by each heartbeat.
 */
class VisitorSession extends Model
{
    protected $guarded = [];

    protected $casts = [
        'is_bot'          => 'boolean',
        'page_count'      => 'integer',
        'click_count'     => 'integer',
        'engaged_seconds' => 'integer',
        'max_scroll_pct'  => 'integer',
        'started_at'      => 'datetime',
        'last_seen_at'    => 'datetime',
    ];

    public function events(): HasMany
    {
        return $this->hasMany(VisitorEvent::class, 'session_id', 'session_id');
    }

    /** Visits with a heartbeat in the last 30 seconds - "active now". */
    public function scopeActive($q)
    {
        return $q->where('last_seen_at', '>=', now()->subSeconds(30));
    }

    public function scopeHumans($q)
    {
        return $q->where('is_bot', false);
    }
}

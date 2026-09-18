<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * One thing that happened during a visit: a page view, a click, a scroll mark.
 * Append-only.
 */
class VisitorEvent extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    protected $casts = [
        'x'               => 'float',
        'y'               => 'integer',
        'vw'              => 'integer',
        'scroll_pct'      => 'integer',
        'engaged_seconds' => 'integer',
        'occurred_at'     => 'datetime',
        'created_at'      => 'datetime',
    ];
}

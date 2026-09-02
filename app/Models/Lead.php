<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * One website enquiry, as WE recorded it - independent of whether Zoho Bigin
 * accepted it. See the create_leads_table migration for why this exists.
 */
class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'city',
        'service',
        'deal_name',
        'page_url',
        'message',
        'zoho_status',
        'zoho_http_code',
        'zoho_response',
        'ip',
        'user_agent',
        'is_read',
    ];

    protected $casts = [
        'is_read'        => 'boolean',
        'zoho_http_code' => 'integer',
        'created_at'     => 'datetime',
        'updated_at'     => 'datetime',
    ];

    /** Enquiries Zoho did not take. These are the ones a human must re-enter. */
    public function scopeNotInCrm($query)
    {
        return $query->whereIn('zoho_status', ['failed', 'error']);
    }

    /** An enquiry we cannot answer: no phone number and no email address. */
    public function scopeUncontactable($query)
    {
        return $query->where(function ($q) {
            $q->whereNull('phone')->orWhere('phone', '');
        })->where(function ($q) {
            $q->whereNull('email')->orWhere('email', '');
        });
    }
}

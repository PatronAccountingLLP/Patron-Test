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

    /**
     * Enquiries we know Zoho did not take.
     *
     * 'browser' is NOT here, and that is the honest position: the visitor's own
     * browser delivers to Zoho now (see LeadCaptureController), so we hand the
     * submission over and never learn the outcome. Listing those as failures
     * would cry wolf on every single lead; listing them as delivered would be a
     * claim we cannot support. They are simply unknown.
     *
     * The other values are left in place for rows written while this app posted
     * to Zoho itself, so older leads still report what was seen at the time.
     */
    public function scopeNotInCrm($query)
    {
        return $query->whereIn('zoho_status', ['failed', 'error', 'rejected']);
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

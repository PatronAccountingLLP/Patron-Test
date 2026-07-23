<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NocRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_owner_name',
        'property_address',
        'business_name',
        'authorized_person_name',
        'owner_director_partner',
        'relation',
        'bill_type',
        'state',
        'noc_sign_date',
        'whatsapp_number',
        'owner_name',
        'place',
        'date',
    ];

    protected $casts = [
        'noc_sign_date' => 'date',
        'date' => 'date',
    ];
}

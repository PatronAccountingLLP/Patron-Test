<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountingStandard extends Model
{
    use HasFactory;
     protected $table = 'accounting_standards';

    protected $fillable = [
        'std_type',
        'std_no',
        'std_name',
        'category',
        'url',
        'content',
        'meta_title',
        'canonical',
        'slug',
        'interlink_page', // use this if you renamed from Interlink-page
    ];
}

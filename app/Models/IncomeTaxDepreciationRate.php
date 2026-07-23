<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeTaxDepreciationRate extends Model
{
    use HasFactory;
    protected $table = 'income_tax_depreciation_rates';
    protected $guarded = [];
}

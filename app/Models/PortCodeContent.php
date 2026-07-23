<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortCodeContent extends Model
{
    use HasFactory;
    protected $table = 'port_code_data';
    protected $guarded = [];
}

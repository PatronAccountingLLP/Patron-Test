<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IfscCodeContent extends Model
{
    use HasFactory;
    protected $table = 'ifsc_data';
    protected $guarded = ['bank','ifsc','branch','address','city1','city2','state','url','content','meta_title','canonical','slug','Interlink-page'];
}

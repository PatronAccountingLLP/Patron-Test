<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NicCodeContent extends Model
{    
     protected $table = 'nic_content'; 
     protected $fillable=['Class','SubClass','FullDescription','url','content_html','slug','canonical_html'];
}

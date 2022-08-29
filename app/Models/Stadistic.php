<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadistic extends Model
{

    protected $fillable = ['id_visitor','id_post','country_visit','date_visit','click_image','click_title','click_content'];
    use HasFactory;
}

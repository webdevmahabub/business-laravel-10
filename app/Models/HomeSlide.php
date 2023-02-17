<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlide extends Model
{
    use HasFactory;



    protected $fillable = [
        'title',
        'web_url',
        'home_slide',
       
    ];

}

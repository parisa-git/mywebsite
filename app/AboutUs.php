<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $fillable = [
        'about_title',
        'about_image',
        'about_phone',
        'about_address',
        'about_office',
        'about_desc'
    ];
}

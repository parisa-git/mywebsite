<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stories extends Model
{
    protected $fillable = [
        'story_fullName',
        'story_jobTitle',
        'story_image',
        'story_text'
    ];
}

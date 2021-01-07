<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LatestPosts extends Model
{
    protected $fillable = [
        'title',
        'image',
        'text',
    ];
}

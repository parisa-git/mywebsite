<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    protected $fillable =[
        'fullName',
        'image',
        'work_title',
        'professional_skills',
        'work_experience',
        'education',
        'about_me'
    ];
}

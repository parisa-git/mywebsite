<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $fillable =[
        'companies_name',
        'companies_image',
        'companies_summary','companies_desc'
    ];
}

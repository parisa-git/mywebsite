<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    protected $fillable = [
        'name',

    ];

//    public function jobcategories()
//    {
//        return $this->belongsToMany(JobCategories::class);
//    }
    public function jobs()
    {
        return $this->belongsToMany(Jobs::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCategories extends Model
{
    protected $fillable =[
    'cat_name','cat_icon','cat_desc'
    ];

    public function  Jobs(){
        return $this->hasMany(Jobs::class);
    }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $fillable = [
        'job_name',
        'job_img',
        'job_desc',
        'categories_id',
        'state_id'
    ];

    public function category_name($id)
    {
        $category = JobCategories::where('id', $id)->first();
        return $category->cat_name;
    }

//    public function Job_Category(){
//        return $this->belongsTo(JobCategories::class,'categories_id','id');
//    }
    public function JobCategories()
    {
        return $this->belongsTo(JobCategories::class);
    }


    public function states()
    {
        return $this->belongsTo(States::class);
    }


}

<?php

namespace App\Providers;

use App\JobCategories;
use Illuminate\Support\ServiceProvider;

class AllCategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $allJobCategories = JobCategories::all();
            return $view->with('allJobCategories' , $allJobCategories);
        });
    }
}

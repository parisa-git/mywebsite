<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\JobCategories;
use App\Jobs;
use App\States;
use App\Footer;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allJobCategories=JobCategories::all();
        $allStates=States::all();
        $jobs=Jobs::paginate(2);
        $footer= Footer::all();
     return view('Site.pages.RecendJobs.index',compact('allJobCategories',
         'allStates',
         'jobs',
         'footer'
     ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $allJobCategories=JobCategories::all();
        $allStates=States::all();
        $jobs=Jobs::findOrFail($id);
        $footer= Footer::all();
        return view('Site.pages.Job_details.index',compact(
            'allJobCategories',
            'allStates',
            'jobs',
            'footer'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

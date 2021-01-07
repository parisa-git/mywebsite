<?php

namespace App\Http\Controllers\Site;

use App\Candidates;
use App\Companies;
use App\Http\Controllers\Controller;
use App\JobCategories;
use App\Jobs;
use App\LatestPosts;
use App\Pricing;
use App\States;
use App\Stories;
use App\Title;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titles = Title::all();
        $allJobCategories = JobCategories::all();
        $allStories = Stories::all();
        $allstates=States::all();
        $allCompanies=Companies::all();
        $jobs= Jobs::all();
        $allCandidates=Candidates::all();
        $allPricing=Pricing::all();
        $allLatestPosts=LatestPosts::all();
        return view('Site.Home.index', compact('titles',
            'allJobCategories',
            'allStories',
            'allstates',
            'allCompanies',
            'jobs',
            'allCandidates',
            'allPricing',
            'allLatestPosts'
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

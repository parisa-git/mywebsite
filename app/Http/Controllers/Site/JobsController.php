<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\JobCategories;
use App\Jobs;
use App\States;
use App\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $jobs=Jobs::paginate(3);
        $footer= Footer::all();
        $latest=DB::table('jobs')->orderBy('id','desc')->get();
//
//     $query=DB::table('jobs')
//         ->join('states', 'jobs.state_id', '=', 'states.id')
//         ->join('job_categories', 'jobs.categories_id ', '=', 'job_categories.id')
//         ->select('jobs.*', 'states.name', 'job_categories.cat_name')
//         ->get();

//        $query1=DB::table('jobs')
//            ->join('states', function ($join) {
//                $join->on('jobs.state_id', '=', 'states.id')
//                    ->where('jobs.state_id', '=', 'states.id');
//            })
//            ->get();
////
//        $query2=DB::table('jobs')
//            ->join('job_categories', function ($join) {
//                $join->on('jobs.categories_id','=','job_categories.id')
//                    ->where('jobs.categories_id','=','job_categories.id');
//            })
//            ->get();


//
//        $orders = DB::table('jobs')
//
//            ->join('states', function ($join) {
//                $join->on('jobs.state_id', '=', 'states.id')
//                    ->where('jobs.state_id', '=', '3');
//                           })
//            ->join('job_categories', function ($join) {
//                $join->on('jobs.categories_id','=','job_categories.id')
//                    ->where('jobs.categories_id','=','5');
//            })
//            ->select('job_name')
//            ->get();


//        $orders = DB::table('states')
//
//            ->join('jobs', function ($join) {
//                $join->on('states.id', '=', 'jobs.state_id')
//                    ->where('states.id', '=', '2');
//                           })
//            ->select('job_name')
//            ->get();
//
//
//        dd($orders);
//        dd($query2);



     return view('Site.pages.RecendJobs.index',compact(
         'allJobCategories',
         'allStates',
         'jobs',
         'footer',
         'latest'
//         'orders'
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

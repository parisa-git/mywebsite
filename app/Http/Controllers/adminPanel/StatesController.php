<?php

namespace App\Http\Controllers\adminPanel;

use App\Http\Controllers\Controller;
use App\States;
use Illuminate\Http\Request;

class StatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $allStates=States::all();
     return view('adminPanel.States.index',compact('allStates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.States.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'min:3', 'max:255'],

        ],
            [
                'name.required' => 'نام استان در سایت الزامیست',
                'name.min' => 'نام استان در سایت نمیتوتند کمتر از سه کاراکتر باشد',
                'name.max' => 'نام استان در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',


            ]);

        States::create([

            'name' => $request->get('name'),


        ]);
        return redirect(route('admin.state.index'))->with('message','با موفقیت ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $States = States::findorfail($id);
        return view('adminPanel.States.edit' , compact('States'));
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
        $this->validate($request, [
            'name' => ['required', 'min:3', 'max:255'],

        ],
            [
                'name.required' => 'نام استان در سایت الزامیست',
                'name.min' => 'نام استان در سایت نمیتوتند کمتر از سه کاراکتر باشد',
                'name.max' => 'نام استان در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',


            ]);

        $States = States::findorfail($id);
        $States->update([
            'name' => $request->get('name'),
        ]);
        $States->save();
        return redirect(route('admin.state.index'))->with('message','  با موفقیت ویرایش شد',$States->name.'');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $States = States::findOrFail($id);

        if (!$States) {
            return redirect(route('admin.state.index'))->with('error', ' مورد نظر موجود نمی باشد');
        } else {
            $States->delete();
            return redirect(route('admin.state.index'))->with('warning', ' ' . $States->name . ' با موفقیت حذف شد');
        }
    }
}

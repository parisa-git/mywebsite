<?php

namespace App\Http\Controllers\adminPanel;

use App\Http\Controllers\Controller;
use App\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allTitle = Title::all();
        return view('adminPanel.titles.index', compact('allTitle'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.titles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'titleLocation' => ['required', 'min:3', 'max:255'],
            'firstTitle' => ['required', 'min:3', 'max:255'],
            'secendTitle' => ['required', 'min:3', 'max:255'],
        ],
            [
                'titleLocation.required' => 'محل تیتر در سایت الزامیست',
                'titleLocation.min' => 'محل تیتر در سایت نمیتوتند کمتر از سه کاراکتر باشد',
                'titleLocation.max' => 'محل تیتر در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'firstTitle.required' => 'تیتر اول الزامیست',
                'firstTitle.min' => ' تیتراول  نمیتوتند کمتر از سه کاراکتر باشد',
                'firstTitle.max' => 'تیتراول نمیتوتند بیشتر از 255 کاراکتر باشد',

                'secondTitle.required' => 'تیتر دوم الزامیست',
                'secendTitle.min' => ' تیتردوم  نمیتوتند کمتر از سه کاراکتر باشد',
                'secondTitle.max' => 'تیتردوم نمیتوتند بیشتر از 255 کاراکتر باشد',

            ]);

        Title::create([

            'titleLocation' => $request->get('titleLocation'),
            'firstTitle' => $request->get('firstTitle'),
            'secendTitle' => $request->get('secendTitle'),
            'description' => $request->get('description'),

        ]);
        return redirect(route('admin.title.index'))->with('message','تیترشما با موفقیت ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = Title::findorfail($id);
        return view('adminPanel.titles.edite' , compact('title'));
//        return view('adminPanel.titles.edite');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
//            'titleLocation' => ['required', 'min:3', 'max:255'],
            'firstTitle' => ['required', 'min:3', 'max:255'],
            'secendTitle' => ['required', 'min:3', 'max:255'],
        ],
            [
//                'titleLocation.required' => 'محل تیتر در سایت الزامیست',
//                'titleLocation.min' => 'محل تیتر در سایت نمیتوتند کمتر از سه کاراکتر باشد',
//                'titleLocation.max' => 'محل تیتر در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'firstTitle.required' => 'تیتر اول الزامیست',
                'firstTitle.min' => ' تیتراول  نمیتوتند کمتر از سه کاراکتر باشد',
                'firstTitle.max' => 'تیتراول نمیتوتند بیشتر از 255 کاراکتر باشد',

                'secondTitle.required' => 'تیتر دوم الزامیست',
                'secendTitle.min' => ' تیتردوم  نمیتوتند کمتر از سه کاراکتر باشد',
                'secondTitle.max' => 'تیتردوم نمیتوتند بیشتر از 255 کاراکتر باشد',

            ]);
        $title = Title::findorfail($id);
        $title->update([

            'titleLocation' => $title->titleLocation,
            'firstTitle' => $request->get('firstTitle'),
            'secendTitle' => $request->get('secendTitle'),
            'description' => $request->get('description'),

        ]);
        $title->save();
        return redirect(route('admin.title.index'))->with('message',' تیتر با موفقیت ویرایش شد',$title->title.'');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $title = Title::findOrFail($id);

        if (!$title) {
            return redirect(route('admin.title.index'))->with('error', 'تیتر مورد نظر موجود نمی باشد');
        } else {
            $title->delete();
            return redirect(route('admin.title.index'))->with('warning', 'تیتر ' . $title->titleLocation . ' با موفقیت حذف شد');
        }
    }
}

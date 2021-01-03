<?php

namespace App\Http\Controllers\adminPanel;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Stories;

class StoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allStories = Stories::all();
        return view('adminPanel.Stories.index', compact('allStories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.Stories.create');
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

            'story_fullName' => ['required', 'min:3', 'max:255'],
            'story_jobTitle' => ['required', 'min:3', 'max:255'],
            'story_image' => ['required'],
            'story_text' => ['required', 'min:3', 'max:255'],
        ],
            [
                'story_fullName.required' => 'نام  الزامیست',
                'story_fullName.min' => 'نام  نمیتوتند کمتر از سه کاراکتر باشد',
                'story_fullName.max' => 'نام  در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'story_image'=>'تصویر محصول الزامی است',

                'story_jobTitle.required' => 'تایتل  الزامیست',
                'story_jobTitle.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'story_jobTitle.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',

                'story_text.required' => 'توضیحات  الزامیست',
                'story_text.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'story_text.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',
            ]);


        if ($request->hasFile('story_image')) {
            $story_image = '';
            $destination = public_path() .'/story_image';
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('story_image');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $story_image = '/story_image'. '/'  . $filename;



            Stories::create([
                'story_fullName' => $request->get('story_fullName'),
                'story_jobTitle' => $request->get('story_jobTitle'),
                'story_image' => $story_image,
                'story_text' => $request->get('story_text'),

            ]);

            return redirect(route('admin.stories.index'))->with('message', ' با موفقیت ثبت شد');
        }else
            return redirect(route('admin.stories.index'))->with('error', 'مشکلی در ثبت وجود دارد');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stories  $stories
     * @return \Illuminate\Http\Response
     */
    public function show(Stories $stories)
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
        $Stories = Stories::findorfail($id);
        return view('adminPanel.stories.edite' , compact('Stories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

//            'story_fullName' => ['required', 'min:3', 'max:255'],
//            'story_jobTitle' => ['required', 'min:3', 'max:255'],
//            'story_image' => ['required'],
//            'story_text' => ['required', 'min:3', 'max:255'],
        ],
            [
//                'story_fullName.required' => 'نام  الزامیست',
                'story_fullName.min' => 'نام  نمیتوتند کمتر از سه کاراکتر باشد',
                'story_fullName.max' => 'نام  در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',
//
//                'story_image'=>'تصویر محصول الزامی است',

//                'story_jobTitle.required' => 'تایتل  الزامیست',
                'story_jobTitle.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'story_jobTitle.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',
//
//                'story_text.required' => 'توضیحات  الزامیست',
                'story_text.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'story_text.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',
            ]);



        $Stories = Stories::findorfail($id);
        if ($request->hasFile('story_image')) {
            $story_image = '';

            $destination=public_path().'/story_image';
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('story_image');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $story_image =  '/story_image'. '/' . $filename;
            $thumbnail = $story_image;

        } else {
            $story_image = $Stories->companies_image;
            $thumbnail = $story_image;
        }



        $Stories->update([
            'story_fullName' => $request->get('story_fullName'),
            'story_jobTitle' => $request->get('story_jobTitle'),
            'story_image' => $story_image,
            'story_text' => $request->get('story_text'),
        ]);
        $Stories->save();
        return redirect(route('admin.stories.index'))->with('message','با موفقیت ویرایش شد');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stories  $stories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stories $stories)
    {
        //
    }
}

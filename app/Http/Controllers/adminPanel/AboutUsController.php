<?php

namespace App\Http\Controllers\adminPanel;

use App\AboutUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allAboutUs = AboutUs::all();
        return view('adminPanel.AboutUs.index', compact('allAboutUs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.AboutUs.create');
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
            'about_title' => ['required', 'min:3', 'max:255'],
            'about_phone' => ['required', 'min:3', 'max:255'],
            'about_address' => ['required', 'min:3', 'max:255'],
            'about_office' => ['required', 'min:3', 'max:255'],
            'about_desc' => ['required'],
            'about_image' => ['required'],

        ],
            [
                'about_title.required' => 'نام دسته بندی الزامیست',
                'about_title.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'about_title.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'about_image'=>'تصویر محصول الزامی است',

                'about_phone.required' => 'توضیحات  الزامیست',
                'about_phone.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'about_phone.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',

                'about_address.required' => 'توضیحات  الزامیست',
                'about_address.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'about_address.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',


                'about_office.required' => 'توضیحات  الزامیست',
                'about_office.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'about_office.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',

                'about_desc.required' => 'توضیحات  الزامیست',
                'about_desc.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'about_desc.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',


            ]);

//        $file=$request->files('cat_icon');

//        if (!empty($file)) {
//            $icon=$file->getClientOriginalName();
//            $file->move('images/icon',$icon);}

        if ($request->hasFile('about_image')) {
            $about_image = '';

            $destination=public_path().'/image';
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('about_image');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $about_image =  '/image'. '/' . $filename;
//            $cat_icon = config('cms-setting.url') . '/' . $filename;


            AboutUs::create([

                'about_title' => $request->get('about_title'),
                'about_image' => $about_image,
                'about_phone' => $request->get('about_phone'),
                'about_address' => $request->get('about_address'),
                'about_office' => $request->get('about_office'),
                'about_desc' => $request->get('about_desc'),


            ]);

            return redirect(route('admin.aboutus.index'))->with('message', ' با موفقیت ثبت شد');
        }else
            return redirect(route('admin.aboutus.index'))->with('error', 'مشکلی در ثبت وجود دارد');

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
        $AboutUs = AboutUs::findorfail($id);
        return view('adminPanel.AboutUs.edit' , compact('AboutUs'));
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

            'about_title' => ['required', 'min:3', 'max:255'],
            'about_phone' => ['required', 'min:3', 'max:255'],
            'about_address' => ['required', 'min:3', 'max:255'],
            'about_office' => ['required', 'min:3', 'max:255'],
            'about_desc' => ['required', 'min:3', 'max:255'],
            'about_image' => ['required'],
        ],
            [
//                'about_title.required' => 'نام دسته بندی الزامیست',
                'about_title.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'about_title.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'about_image'=>'تصویر محصول الزامی است',

//                'about_phone.required' => 'توضیحات  الزامیست',
                'about_phone.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'about_phone.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',

//                'about_address.required' => 'توضیحات  الزامیست',
                'about_address.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'about_address.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',


//                'about_office.required' => 'توضیحات  الزامیست',
                'about_office.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'about_office.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',

//                'about_desc.required' => 'توضیحات  الزامیست',
                'about_desc.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'about_desc.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',


            ]);

        $AboutUs = AboutUs::findorfail($id);
        if ($request->hasFile('about_image')) {
            $about_image = '';

            $destination=public_path().'/image';
//            $destination = public_path() . config('cms-setting.url');
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('about_image');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $about_image =  '/categories_icon'. '/' . $filename;
            $thumbnail = $about_image;

        } else {
            $about_image = $AboutUs->about_image;
            $thumbnail = $about_image;
        }



        $AboutUs->update([
            'about_title' => $request->get('about_title'),
            'about_image' => $about_image,
            'about_phone' => $request->get('about_phone'),
            'about_address' => $request->get('about_address'),
            'about_office' => $request->get('about_office'),
            'about_desc' => $request->get('about_desc'),
        ]);
        $AboutUs->save();
        return redirect(route('admin.aboutus.index'))->with('message',' با موفقیت ویرایش شد');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $AboutUs = AboutUs::findOrFail($id);

        if (!$AboutUs) {
            return redirect(route('admin.aboutus.index'))->with('error', ' موجود نمی باشد');
        } else {
            $AboutUs->delete();
            return redirect(route('admin.aboutus.index'))->with('warning' . ' با موفقیت حذف شد');
        }
    }


    public function uploadImage()
    {
        $this->validate(request(), [
            'upload' => 'required'
        ]);
        $image = '';

        $imagePath = "/upload/images/2020/";
        $file = request()->file('upload');
        $filename = $file->getClientOriginalName();
        if (file_exists(public_path($imagePath) . $filename)) {
            $filename = Carbon::now()->timestamp . $filename;
        }
        $file->move(public_path($imagePath), $filename);
        $url = $imagePath . $filename;
        $function_number = $_GET['CKEditorFuncNum'];
        $message = '';
        return "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction( '$function_number' , '$url' , '$message' );</script>";

    }
}

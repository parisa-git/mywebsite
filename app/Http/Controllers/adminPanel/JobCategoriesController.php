<?php

namespace App\Http\Controllers\adminPanel;

use App\Http\Controllers\Controller;
use App\JobCategories;
use Illuminate\Http\Request;

class JobCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $JobCategories = JobCategories::paginate(5);

        return view('adminPanel.JobCategories.index', compact('JobCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.JobCategories.create');
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
            'cat_name' => ['required', 'min:3', 'max:255'],
            'cat_icon' => ['required'],
            'cat_desc' => ['required', 'min:3', 'max:255'],
        ],
            [
                'cat_name.required' => 'نام دسته بندی الزامیست',
                'cat_name.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'cat_name.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'cat_icon'=>'تصویر محصول الزامی است',

                'cat_desc.required' => 'توضیحات  الزامیست',
                'cat_desc.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'cat_desc.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',

            ]);

//        $file=$request->files('cat_icon');

//        if (!empty($file)) {
//            $icon=$file->getClientOriginalName();
//            $file->move('images/icon',$icon);}

        if ($request->hasFile('cat_icon')) {
            $cat_icon = '';

            $destination=public_path().'/categories_icon';
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('cat_icon');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $cat_icon =  '/categories_icon'. '/' . $filename;
//            $cat_icon = config('cms-setting.url') . '/' . $filename;


        JobCategories::create([

            'cat_name' => $request->get('cat_name'),
            'cat_icon' => $cat_icon,
            'cat_desc' => $request->get('cat_desc'),


        ]);

        return redirect(route('admin.categories.index'))->with('message', 'دسته بندی شما با موفقیت ثبت شد');
    }else
        return redirect(route('admin.categories.index'))->with('error', 'مشکلی در ثبت دسته بندی وجود دارد');
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
       $JobCategories = JobCategories::findorfail($id);
        return view('adminPanel.JobCategories.edit' , compact('JobCategories'));
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
            'cat_name' => ['required', 'min:3', 'max:255'],
//            'cat_icon' => ['required'],
            'cat_desc' => ['required', 'min:3', 'max:255'],
        ],
            [
//                'cat_name.required' => 'نام دسته بندی الزامیست',
                'cat_name.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'cat_name.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

//                'cat_desc.required' => 'توضیحات  الزامیست',
                'cat_desc.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'cat_desc.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',

            ]);

        $JobCategories = JobCategories::findorfail($id);
        if ($request->hasFile('cat_icon')) {
            $cat_icon = '';

            $destination=public_path().'/categories_icon';
//            $destination = public_path() . config('cms-setting.url');
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('cat_icon');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $cat_icon =  '/categories_icon'. '/' . $filename;
            $thumbnail = $cat_icon;

        } else {
            $cat_icon = $JobCategories->cat_icon;
            $thumbnail = $cat_icon;
        }



        $JobCategories->update([
            'cat_name' => $request->get('cat_name'),
            'cat_icon' => $cat_icon,
            'cat_desc' => $request->get('cat_desc'),
            'thumbnail' => $thumbnail,
        ]);
        $JobCategories->save();
        return redirect(route('admin.categories.index'))->with('message','دسته بندی شما با موفقیت ویرایش شد');
        }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $JobCategories = JobCategories::findOrFail($id);

        if (!$JobCategories) {
            return redirect(route('admin.categories.index'))->with('error', 'دسته بندی مورد نظر موجود نمی باشد');
        } else {
            $JobCategories->delete();
            return redirect(route('admin.categories.index'))->with('warning', 'تیتر '  . 'دسته بندی با موفقیت حذف شد');
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

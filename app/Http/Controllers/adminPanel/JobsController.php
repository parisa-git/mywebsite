<?php

namespace App\Http\Controllers\adminPanel;

use App\Http\Controllers\Controller;
use App\JobCategories;
use App\Jobs;
use App\States;
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
        $Jobs = Jobs::paginate(5);
        return view('adminPanel.Jobs.index', compact('Jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allCategories = JobCategories::all();
        $allstate =States::all();
        return view('adminPanel.Jobs.create',compact('allCategories','allstate'));
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

//            'job_name' => ['required', 'min:3', 'max:255'],
//            'job_money' => ['required', 'min:3', 'max:255'],
//            'job_email' => ['required', 'min:3', 'max:255'],
//            'job_skill' => ['required', 'min:3', 'max:255'],
//            'job_more' => ['required', 'min:3', 'max:255'],
//            'job_time' => ['required', 'min:3', 'max:255'],
//            'job_img' => ['required'],
//            'job_desc' => ['required', 'min:3', 'max:255'],
//            'categories_id'=>['required']
//            'state_id'=>['required']//
//            'state_id'=>'required|mimes:png,jpg,jpeg,gif'
        ],
            [
//                'job_name.required' => 'نام دسته بندی الزامیست',
                'job_name.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'job_name.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                //                'job_money.required' => 'نام دسته بندی الزامیست',
                'job_money.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'job_money.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                //                'job_time.required' => 'نام دسته بندی الزامیست',
                'job_time.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'job_time.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',


//                'job_img'=>'تصویر محصول الزامی است',

//                'categories_id'=>'دسته بندی الزامیست',
//                'state_id'=>'استان الزامیست',

//                'job_desc.required' => 'توضیحات  الزامیست',
                'job_desc.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'job_desc.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',
            ]);



        if ($request->hasFile('job_img')) {
            $job_img = '';

            $destination=public_path().'/job_img';
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('job_img');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $job_img =  '/job_img'. '/' . $filename;



            Jobs::create([
                'job_name' => $request->get('job_name'),
                'job_money' => $request->get('job_money'),
                'job_email' => $request->get('job_email'),
                'job_skill' => $request->get('job_skill'),
                'job_more' => $request->get('job_more'),
                'job_time' => $request->get('job_time'),
                'job_img' => $job_img,
                'job_desc' => $request->get('job_desc'),
                'categories_id'=>$request->get('categories_id'),
                'state_id'=>$request->get('state_id')

            ]);
//
            return redirect(route('admin.jobs.index'))->with('message', ' با موفقیت ثبت شد');
        }
else
            return redirect(route('admin.jobs.index'))->with('error', 'مشکلی در ثبت وجود دارد');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $alljobs=Jobs::with('Jobs')->where('id','=','state_id')->get();
//        return view('Site.Home.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allCategories = JobCategories::all();
        $allStates = States::all();
        $Jobs = Jobs::findorfail($id);
        return view('adminPanel.Jobs.edit' , compact('Jobs','allCategories','allStates'));
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

//            'job_name' => ['required', 'min:3', 'max:255'],
         //  'job_money' => ['required', 'min:3', 'max:255'],
//          'job_time' => ['required', 'min:3', 'max:255'],
//            'job_img' => ['required'],
//            'job_desc' => ['required', 'min:3', 'max:255'],
//            'categories_id'=>['required']
        ],
            [
//                'job_name.required' => 'نام دسته بندی الزامیست',
                'job_name.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'job_name.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

//                'job_img'=>'تصویر محصول الزامی است',

//                'categories_id'=>'دسته بندی الزامیست',

//                'job_desc.required' => 'توضیحات  الزامیست',
                'job_desc.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'job_desc.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',
            ]);



        $Jobs = Jobs::findorfail($id);
        if ($request->hasFile('job_img')) {
            $job_img = '';

            $destination=public_path().'/job_img';
//            $destination = public_path() . config('cms-setting.url');
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('job_img');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $job_img =  '/job_img'. '/' . $filename;
            $thumbnail = $job_img;

        } else {
            $job_img = $Jobs->job_img;
            $thumbnail = $job_img;
        }



        $Jobs->update([
            'job_name' => $request->get('job_name'),
            'job_money' => $request->get('job_money'),
            'job_email' => $request->get('job_email'),
            'job_skill' => $request->get('job_skill'),
            'job_more' => $request->get('job_more'),
            'job_time' => $request->get('job_time'),
            'categories_id' => $request->get('categories_id'),
            'job_img' => $job_img,
            'job_desc' => $request->get('job_desc'),
            'thumbnail' => $thumbnail,
        ]);
        $Jobs->save();
        return redirect(route('admin.jobs.index'))->with('message','دسته بندی شما با موفقیت ویرایش شد');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Jobs = Jobs::findOrFail($id);

        if (!$Jobs) {
            return redirect(route('admin.jobs.index'))->with('error', 'دسته بندی مورد نظر موجود نمی باشد');
        } else {
            $Jobs->delete();
            return redirect(route('admin.jobs.index'))->with('warning', 'تیتر '  . 'دسته بندی با موفقیت حذف شد');
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

<?php

namespace App\Http\Controllers\adminPanel;

use App\Companies;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCompanies = Companies::all();
        return view('adminPanel.Companies.index', compact('allCompanies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.Companies.create');
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

            'companies_name' => ['required', 'min:3', 'max:255'],
            'companies_summary' => ['required', 'min:3', 'max:255'],
            'companies_image' => ['required'],
            'companies_desc' => ['required', 'min:3', 'max:255'],
        ],
            [
                'companies_name.required' => 'نام دسته بندی الزامیست',
                'companies_name.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'companies_name.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'companies_image'=>'تصویر محصول الزامی است',

                'companies_summary.required' => 'توضیحات  الزامیست',
                'companies_summary.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'companies_summary.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',

                'companies_desc.required' => 'توضیحات  الزامیست',
                'companies_desc.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'companies_desc.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',
            ]);


            if ($request->hasFile('companies_image')) {
                $companies_image = '';
                $destination = public_path() .'/companies_image';
                if (!is_dir($destination)) {
                    mkdir($destination, '0777', true);
                }
                $destination = $destination . '/';
                $file = $request->file('companies_image');
                $filename = time() . $file->getClientOriginalName();
                $file->move($destination, $filename);
                $companies_image = '/companies_image'. '/'  . $filename;



                Companies::create([
                'companies_name' => $request->get('companies_name'),
                'companies_summary' => $request->get('companies_summary'),
                'companies_image' => $companies_image,
                'companies_desc' => $request->get('companies_desc'),

            ]);

            return redirect(route('admin.companies.index'))->with('message', ' با موفقیت ثبت شد');
        }else
            return redirect(route('admin.companies.index'))->with('error', 'مشکلی در ثبت وجود دارد');

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
        $Companies = Companies::findorfail($id);
        return view('adminPanel.Companies.edite' , compact('Companies'));
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

            'companies_name' => ['required', 'min:3', 'max:255'],
            'companies_summary' => ['required', 'min:3', 'max:255'],
//            'companies_image' => ['required'],
            'companies_desc' => ['required', 'min:3', 'max:255'],
        ],
            [
//                'companies_name.required' => 'نام دسته بندی الزامیست',
                'companies_name.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'companies_name.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

//                'companies_image'=>'تصویر محصول الزامی است',

//                'companies_summary.required' => 'توضیحات  الزامیست',
                'companies_summary.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'companies_summary.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',

//                'companies_desc.required' => 'توضیحات  الزامیست',
                'companies_desc.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'companies_desc.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',

            ]);

        $Companies = Companies::findorfail($id);
        if ($request->hasFile('companies_image')) {
            $companies_image = '';

            $destination=public_path().'/companies_image';
//            $destination = public_path() . config('cms-setting.url');
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('companies_image');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $companies_image =  '/companies_image'. '/' . $filename;
            $thumbnail = $companies_image;

        } else {
            $companies_image = $Companies->companies_image;
            $thumbnail = $companies_image;
        }



        $Companies->update([
            'companies_name' => $request->get('companies_name'),
            'companies_summary' => $request->get('companies_summary'),
            'companies_image' => $companies_image,
            'companies_desc' => $request->get('companies_desc'),
            'thumbnail' => $thumbnail,
        ]);
        $Companies->save();
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
        $Companies = Companies::findOrFail($id);

        if (!$Companies) {
            return redirect(route('admin.companies.index'))->with('error', 'دسته بندی مورد نظر موجود نمی باشد');
        } else {
            $Companies->delete();
            return redirect(route('admin.companies.index'))->with('warning',  ' با موفقیت حذف شد');
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

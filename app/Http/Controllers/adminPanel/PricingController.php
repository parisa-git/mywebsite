<?php

namespace App\Http\Controllers\adminPanel;

use App\Http\Controllers\Controller;
use App\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPricing=Pricing::paginate(5);
        return view('adminPanel.Pricing.index',compact('allPricing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.Pricing.create');
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
            'title' => ['required', 'min:3', 'max:255'],
            'price' => ['required', 'min:3', 'max:255'],
            'posts' => ['required', 'min:1', 'max:255'],
            'desc' => ['required', 'min:3', 'max:255'],

        ],
            [
                'title.required' => 'نام دسته بندی الزامیست',
                'title.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'title.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'price.required' => 'نام دسته بندی الزامیست',
                'price.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'price.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'posts.required' => 'نام دسته بندی الزامیست',
                'posts.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'posts.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'desc.required' => 'نام دسته بندی الزامیست',
                'desc.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'desc.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

            ]);




            Pricing::create([

                'title' => $request->get('title'),
                'price' => $request->get('price'),
                'posts' => $request->get('posts'),
                'desc' => $request->get('desc'),

            ]);

            return redirect(route('admin.pricing.index'))->with('message', ' با موفقیت ثبت شد');


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
        $Pricing = Pricing::findorfail($id);
        return view('adminPanel.Pricing.edit' , compact('Pricing'));
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
            'title' => ['required', 'min:3', 'max:255'],
            'price' => ['required', 'min:3', 'max:255'],
            'posts' => ['required', 'min:1', 'max:255'],
            'desc' => ['required', 'min:3', 'max:255'],

        ],
            [
                'title.required' => 'نام دسته بندی الزامیست',
                'title.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'title.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'price.required' => 'نام دسته بندی الزامیست',
                'price.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'price.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'posts.required' => 'نام دسته بندی الزامیست',
                'posts.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'posts.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'desc.required' => 'نام دسته بندی الزامیست',
                'desc.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'desc.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

            ]);

        $Pricing = Pricing::findorfail($id);
        $Pricing->update([
            'title' => $request->get('title'),
            'price' => $request->get('price'),
            'posts' => $request->get('posts'),
            'desc' => $request->get('desc'),


        ]);
        $Pricing->save();
        return redirect(route('admin.pricing.index'))->with('message',' با موفقیت ویرایش شد');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $Pricing = Pricing::findOrFail($id);
//        SweetAlert::message('Robots are working!');
        if (!$Pricing) {
            return redirect(route('admin.pricing.index'))->with('error', ' موجود نمی باشد');
        } else {
            $Pricing->delete();
            return redirect(route('admin.pricing.index'))->with('warning', ' با موفقیت حذف شد');
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

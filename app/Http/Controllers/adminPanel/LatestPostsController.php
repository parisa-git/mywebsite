<?php

namespace App\Http\Controllers\adminPanel;

use App\Http\Controllers\Controller;
use App\LatestPosts;
use Illuminate\Http\Request;

class LatestPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $LatestPosts = LatestPosts::paginate(5);

        return view('adminPanel.LatestPosts.index', compact('LatestPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.LatestPosts.create');
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
            'image' => ['required'],
            'text' => ['required', 'min:3', 'max:255'],
        ],
            [
                'title.required' => 'نام دسته بندی الزامیست',
                'title.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'title.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'image'=>'تصویر محصول الزامی است',

                'text.required' => 'توضیحات  الزامیست',
                'text.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'text.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',

            ]);

        if ($request->hasFile('image')) {
            $image = '';

            $destination=public_path().'/posts_image';
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $image =  '/posts_image'. '/' . $filename;



            LatestPosts::create([

                'title' => $request->get('title'),
                'image' => $image,
                'text' => $request->get('text'),


            ]);

            return redirect(route('admin.posts.index'))->with('message', 'با موفقیت ثبت شد');
        }else
            return redirect(route('admin.posts.index'))->with('error', 'مشکلی در ثبت  وجود دارد');

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
        $LatestPosts = LatestPosts::findorfail($id);
        return view('adminPanel.LatestPosts.edit' , compact('LatestPosts'));
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
//            'title' => ['required', 'min:3', 'max:255'],
//            'image' => ['required'],
//            'text' => ['required', 'min:3', 'max:255'],
        ],
            [
//                'title.required' => 'نام دسته بندی الزامیست',
                'title.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'title.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

//                'image'=>'تصویر محصول الزامی است',

//                'text.required' => 'توضیحات  الزامیست',
                'text.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'text.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',

            ]);

        $LatestPosts = LatestPosts::findorfail($id);
        if ($request->hasFile('image')) {
            $image = '';

            $destination=public_path().'/posts_image';
//            $destination = public_path() . config('cms-setting.url');
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $image =  '/posts_image'. '/' . $filename;
            $thumbnail = $image;

        } else {
            $image = $LatestPosts->image;
            $thumbnail = $image;
        }



        $LatestPosts->update([
            'title' => $request->get('title'),
            'image' => $image,
            'text' => $request->get('text'),
        ]);
        $LatestPosts->save();
        return redirect(route('admin.posts.index'))->with('message',' با موفقیت ویرایش شد');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $LatestPosts = LatestPosts::findOrFail($id);

        if (!$LatestPosts) {
            return redirect(route('admin.posts.index'))->with('error', ' موجود نمی باشد');
        } else {
            $LatestPosts->delete();
            return redirect(route('admin.posts.index'))->with('warning', ' با موفقیت حذف شد');
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

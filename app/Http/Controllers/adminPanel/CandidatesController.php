<?php

namespace App\Http\Controllers\adminPanel;

use App\Candidates;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCandidates=Candidates::paginate(5);
        return view('adminPanel.Candidates.index',compact('allCandidates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.Candidates.create');
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
            'fullName' => ['required', 'min:3', 'max:255'],
            'work_title' => ['required', 'min:3', 'max:255'],
            'professional_skills' => ['required', 'min:3', 'max:255'],
            'work_experience' => ['required', 'min:3', 'max:255'],
            'education' => ['required', 'min:3', 'max:255'],
            'image' => ['required'],
            'about_me' => ['required', 'min:3', 'max:255'],
        ],
            [
                'fullName.required' => 'نام دسته بندی الزامیست',
                'fullName.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'fullName.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'work_title.required' => 'نام دسته بندی الزامیست',
                'work_title.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'work_title.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'professional_skills.required' => 'نام دسته بندی الزامیست',
                'professional_skills.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'professional_skills.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'work_experience.required' => 'نام دسته بندی الزامیست',
                'work_experience.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'work_experience.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'education.required' => 'نام دسته بندی الزامیست',
                'education.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'education.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'image'=>'تصویر محصول الزامی است',


                'about_me.required' => 'توضیحات  الزامیست',
                'about_me.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'about_me.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',

            ]);


        if ($request->hasFile('image')) {
            $image = '';

            $destination=public_path().'/candidates_image';
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $image =  '/candidates_image'. '/' . $filename;
//


            Candidates::create([

                'fullName' => $request->get('fullName'),
                'work_title' => $request->get('work_title'),
                'professional_skills' => $request->get('professional_skills'),
                'work_experience' => $request->get('work_experience'),
                'education' => $request->get('education'),
                'image' => $image,
                'about_me' => $request->get('about_me'),


            ]);

            return redirect(route('admin.candidates.index'))->with('message', ' با موفقیت ثبت شد');
        }else
            return redirect(route('admin.candidates.index'))->with('error', 'مشکلی در ثبت وجود دارد');

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
        $Candidates = Candidates::findorfail($id);
        return view('adminPanel.Candidates.edit' , compact('Candidates'));
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
//            'fullName' => ['required', 'min:3', 'max:255'],
//            'work_title' => ['required', 'min:3', 'max:255'],
//            'professional_skills' => ['required', 'min:3', 'max:255'],
//            'work_experience' => ['required', 'min:3', 'max:255'],
//            'education' => ['required', 'min:3', 'max:255'],
//            'image' => ['required'],
//            'about_me' => ['required', 'min:3', 'max:255'],
        ],
            [
//                'fullName.required' => 'نام دسته بندی الزامیست',
                'fullName.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'fullName.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

//                'work_title.required' => 'نام دسته بندی الزامیست',
                'work_title.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'work_title.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

//                'professional_skills.required' => 'نام دسته بندی الزامیست',
                'professional_skills.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'professional_skills.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

//                'work_experience.required' => 'نام دسته بندی الزامیست',
                'work_experience.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'work_experience.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

//                'education.required' => 'نام دسته بندی الزامیست',
                'education.min' => 'نام دسته بندی نمیتوتند کمتر از سه کاراکتر باشد',
                'education.max' => 'نام دسته بندی در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

//                'image'=>'تصویر محصول الزامی است',


//                'about_me.required' => 'توضیحات  الزامیست',
                'about_me.min' => ' توضیحات  نمیتوتند کمتر از سه کاراکتر باشد',
                'about_me.max' => 'توضیحات نمیتوتند بیشتر از 255 کاراکتر باشد',

            ]);

        $Candidates = Candidates::findorfail($id);
        if ($request->hasFile('image')) {
            $image = '';

            $destination=public_path().'/candidates_image';
//            $destination = public_path() . config('cms-setting.url');
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $image =  '/candidates_image'. '/' . $filename;
            $thumbnail = $image;

        } else {
            $image = $Candidates->image;
            $thumbnail = $image;
        }


        $Candidates->update([
            'fullName' => $request->get('fullName'),
            'work_title' => $request->get('work_title'),
            'professional_skills' => $request->get('professional_skills'),
            'work_experience' => $request->get('work_experience'),
            'education' => $request->get('education'),
            'image' => $image,
            'about_me' => $request->get('about_me'),
        ]);
        $Candidates->save();
        return redirect(route('admin.candidates.index'))->with('message','دسته بندی شما با موفقیت ویرایش شد');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Candidates = Candidates::findOrFail($id);

        if (!$Candidates) {
            return redirect(route('admin.candidates.index'))->with('error', ' موجود نمی باشد');
        } else {
            $Candidates->delete();
            return redirect(route('admin.candidates.index'))->with('warning',' با موفقیت حذف شد');
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

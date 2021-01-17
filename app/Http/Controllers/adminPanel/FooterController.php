<?php

namespace App\Http\Controllers\adminPanel;

use App\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allFooter = Footer::paginate(5);
        return view('adminPanel.Footer.index', compact('allFooter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.Footer.create');
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
            'name_link' => ['required', 'min:3', 'max:255'],
            'link' => ['required', 'min:3', 'max:255'],
        ],
            [
                'title.required' => 'محل تیتر در سایت الزامیست',
                'title.min' => 'محل تیتر در سایت نمیتوتند کمتر از سه کاراکتر باشد',
                'title.max' => 'محل تیتر در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'name_link.required' => 'تیتر اول الزامیست',
                'name_link.min' => ' تیتراول  نمیتوتند کمتر از سه کاراکتر باشد',
                'name_link.max' => 'تیتراول نمیتوتند بیشتر از 255 کاراکتر باشد',

                'link.required' => 'تیتر دوم الزامیست',
                'link.min' => ' تیتردوم  نمیتوتند کمتر از سه کاراکتر باشد',
                'link.max' => 'تیتردوم نمیتوتند بیشتر از 255 کاراکتر باشد',

            ]);

        Footer::create([

            'title' => $request->get('title'),
            'name_link' => $request->get('name_link'),
            'link' => $request->get('link'),


        ]);
        return redirect(route('admin.footer.index'))->with('message','با موفقیت ثبت شد');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Footer = Footer::findorfail($id);
        return view('adminPanel.Footer.show' , compact('Footer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Footer = Footer::findorfail($id);
        return view('adminPanel.Footer.edit' , compact('Footer'));
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
            'name_link' => ['required', 'min:3', 'max:255'],
            'link' => ['required', 'min:3', 'max:255'],
        ],
            [
                'title.required' => 'محل تیتر در سایت الزامیست',
                'title.min' => 'محل تیتر در سایت نمیتوتند کمتر از سه کاراکتر باشد',
                'title.max' => 'محل تیتر در سایت نمیتوتند بیشتر از 255 کاراکتر باشد',

                'name_link.required' => 'تیتر اول الزامیست',
                'name_link.min' => ' تیتراول  نمیتوتند کمتر از سه کاراکتر باشد',
                'name_link.max' => 'تیتراول نمیتوتند بیشتر از 255 کاراکتر باشد',

                'link.required' => 'تیتر دوم الزامیست',
                'link.min' => ' تیتردوم  نمیتوتند کمتر از سه کاراکتر باشد',
                'link.max' => 'تیتردوم نمیتوتند بیشتر از 255 کاراکتر باشد',
            ]);
        $Footer = Footer::findorfail($id);
        $Footer->update([

            'title' => $request->get('title'),
            'name_link' => $request->get('name_link'),
            'link' => $request->get('link'),

        ]);
        $Footer->save();
        return redirect(route('admin.footer.index'))->with('message','  با موفقیت ویرایش شد');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Footer = Footer::findOrFail($id);
//        SweetAlert::message('Robots are working!');
        if (!$Footer) {
            return redirect(route('admin.footer.index'))->with('error', ' مورد نظر موجود نمی باشد');
        } else {
            $Footer->delete();
            return redirect(route('admin.footer.index'))->with('warning',  ' با موفقیت حذف شد');
        }
    }
}

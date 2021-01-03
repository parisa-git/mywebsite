{{--@extends('adminPanel.Layout.wrapper')--}}


{{--@section('mainContent')--}}

{{--    <div class="col-9 text-right my-5" style="direction: rtl">--}}
{{--        <!-- general form elements -->--}}
{{--        <div class="card card-primary" style="position: relative; right: 285px;">--}}
{{--            <div class="card-header">--}}
{{--                <h3 class="card-title">تیترها</h3>--}}
{{--            </div>--}}
{{--            <!-- /.card-header -->--}}
{{--            <!-- form start -->--}}
{{--            <form role="form">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1">محل تیتر</label>--}}
{{--                        <input type="text" class="form-control" id="exampleInputEmail1"--}}
{{--                               placeholder=" محل تیتر ">--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1"> تیتر اول</label>--}}
{{--                        <input type="text" class="form-control" id="exampleInputEmail1"--}}
{{--                               placeholder="تیتر اول">--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1">تیتر دوم </label>--}}
{{--                        <input type="text" class="form-control" id="exampleInputEmail1"--}}
{{--                               placeholder="تیتر دوم">--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1">توضیحات تیتر </label>--}}
{{--                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="توضیحات تیتر"></textarea>--}}
{{--                    </div>--}}

{{--                    <div class="card-footer">--}}
{{--                        <button type="submit" class="btn btn-primary">ارسال</button>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--        <!-- /.card -->--}}

{{--    </div>--}}
{{--@endsection--}}

@extends('adminPanel.Layout.wrapper')
@section('pageTitle')
    دسته بندی مشاغل
@endsection
@section('mainContent')
    <div class="header bg-gradient-primary pb-3 pt-4 text-right">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="m-0 text-dark">افزودن دسته بندی</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-4 direction">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('dashbord')}}">داشبورد</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.categories.index')}}">دسته بندی</a></li>
                            <li class="breadcrumb-item active">افزودن دسته بندی</li>
                        </ol>
                    </div><!-- /.col--->
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container">
            <div class="row">



                <div class="col-sm-12">
                    @if(session('message'))
                        <div class="alert alert-success col-sm-12 float-right" >
                            <li>{{Session::get('message')}}</li>
                        </div>
                    @endif
                    @if(session ('error'))
                        <div class="alert alert-danger col-sm-12 float-right" >
                            <li>{{Session::get('error')}}</li>
                        </div>
                    @endif
                    @if(session ('warning'))
                        <div class="alert alert-warning col-sm-12 float-right">
                            <li>{{Session::get('warning')}}</li>
                        </div>
                    @endif
                </div>

                <div class="card text-right" >
                    <div class="card-header">
                        <div class="card-title">دسته بندی جدید</div>
                    </div>

                    {{--    <-----------card body ------->--}}
                    <div class="card-body">
                        <form action="{{route('admin.categories.update' , $JobCategories->id )}}" role="form" method="post"  enctype="multipart/form-data">
                            {{--                        <form action="{{route('admin.title.store')}}" role="form" method="post">--}}
                            @csrf
                            <div class="row">

                                <!-----------cat_name---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable> نام دسته بندی مشاغل</lable>
                                        <input type="text" class="form-control " name="cat_name"
                                               placeholder=" نام دسته بندی مشاغل.." value="{{$JobCategories->cat_name}}">
                                    </div>

                                </div>
                                <!-----------cat_icon---------->
                                @if($JobCategories->cat_icon != null && $JobCategories->cat_icon !='')
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>عکس آیکون</label>
                                            <div class="input-group">
                                                <div class="custom-file" >
                                                    <input type="file" class="custom-file-input" name="cat_icon">
                                                    <img name="thumbnail" style="width: 50%; margin-top: 140px" src="{{ url('') }}{{ $JobCategories->cat_icon }}">
                                                    <lable class="custom-file-label"></lable>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @else
                                    <div class="col-md-4 col-sm-12">
                                        <lable  for="thumbnail">آیکن قبلی </lable>
                                        <span class="text-danger mr-1">بدون تصویر</span>
                                    </div>
                            @endif
                                <!-----------cat_desc---------->
                                <div class="col-sm-12" style="margin-top: 70px">
                                    <div class="form-group">
                                        <lable> توضیحات</lable>
                                        <textarea rows="5" type="text" class="form-control" name="cat_desc" id="description" placeholder="توضیحات  وارد کنید ..." value="{{$JobCategories->cat_desc}}">{!! $JobCategories->cat_desc !!}</textarea>
                                    </div>
                                </div>


                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="ذخیره">
                                        <a class="btn btn-danger" href="{{ route('dashbord') }}">لغو عملیات</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                @stop
                @section('footerscript')

                    <script src="{{url('admin/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
                    <script src="{{url('admin/plugins/ckeditor/ckeditor.js')}}"></script>
                    <script !src="">
                        CKEDITOR.replace('description' , {
                            filebrowserUploadMethod : 'form',
                            filebrowserUploadUrl: '/dashboard/categories/save_image',
                            filebrowserImageUploadUrl: '/dashboard/categories/save_image',
                        });
                    </script>

                    <script !src="">
                        $('.nav-link').removeClass('active');
                        $('#categories').addClass('active');
                    </script>
@endsection

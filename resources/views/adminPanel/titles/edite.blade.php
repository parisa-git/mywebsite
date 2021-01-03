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
    افزودن تیتر
@endsection
@section('mainContent')
    <div class="header bg-gradient-primary pb-3 pt-4 text-right">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="m-0 text-dark">افزودن تیتر</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('dashbord')}}">داشبورد</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.title.index')}}">تیترها</a></li>
                            <li class="breadcrumb-item active">افزودن تیتر</li>
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
                        <div class="card-title">مشخصات تیتر جدید</div>
                    </div>

                    {{--    <-----------card body ------->--}}
                    <div class="card-body">
                        <form action="{{route('admin.title.update' , $title->id )}}" role="form" method="post">
{{--                        <form action="{{route('admin.title.store')}}" role="form" method="post">--}}
                            @csrf
                            <div class="row">

                                <!-----------title location---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable> محل تیتر در سایت</lable>
                                        <input type="text" class="form-control " name="titleLocation" disabled
                                               placeholder="محل قرارگیری تیتر را وارد کنید ..." value="{{$title->titleLocation}}">
                                    </div>

                                </div>
                                <!-----------title first---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>تیتر اول</lable>
                                        <input type="text" class="form-control" name="firstTitle"
                                               placeholder="تیتر اول را وارد کنید ..." value="{{$title->firstTitle}}">
                                    </div>
                                </div>
                                <!-----------title second---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>تیتر دوم</lable>
                                        <input type="text" class="form-control" name="secendTitle"
                                               placeholder="تیتر دوم را وارد کنید ..." value="{{$title->secendTitle}}">
                                    </div>
                                </div>
                                <!-----------title description---------->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <lable>توضیحات زیر تیتر</lable>
                                        <textarea rows="5" type="text" class="form-control" name="description" id="description" placeholder="توضیحات زیر تیتر را وارد کنید ..." value="{{$title->description}}">{!!$title->description !!}</textarea>
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
                            filebrowserUploadUrl: '/dashboard/title/save_image',
                            filebrowserImageUploadUrl: '/dashboard/title/save_image',
                        });
                    </script>

                    <script !src="">
                        $('.nav-link').removeClass('active');
                        $('#titles').addClass('active');
                    </script>
            @endsection

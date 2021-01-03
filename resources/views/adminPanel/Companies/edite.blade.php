
@extends('adminPanel.Layout.wrapper')
@section('pageTitle')
    افزودن شرکت
@endsection
@section('mainContent')
    <div class="header bg-gradient-primary pb-3 pt-4 text-right">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="m-0 text-dark"> @yield('pageTitle')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('dashbord')}}">داشبورد</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.companies.index')}}">شرکت ها</a></li>
                            <li class="breadcrumb-item active">@yield('pageTitle')</li>
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
                        <form action="{{route('admin.companies.update' , $Companies->id )}}" role="form" method="post" enctype="multipart/form-data">
{{--                        <form action="{{route('admin.title.store')}}" role="form" method="post">--}}
                            @csrf
                            <div class="row">

                                <!-----------companies_name---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>نام شرکت</lable>
                                        <input type="text" class="form-control " name="titleLocation"
                                               placeholder="نام شرکت را وارد کنید ..." value="{{$Companies->companies_name}}">
                                    </div>

                                </div>
                                <!-----------companies_summary---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable> توضیحات مختصر</lable>
                                        <input type="text" class="form-control" name="firstTitle"
                                               placeholder="توضیحات مختصر را وارد کنید ..." value="{{$Companies->companies_summary}}">
                                    </div>
                                </div>
                                <!-----------companies_image---------->
                                @if($Companies->companies_image != null && $Companies->companies_image !='')
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>عکس </label>
                                            <div class="input-group">
                                                <div class="custom-file" >
                                                    <input type="file" class="custom-file-input" name="cat_icon">
                                                    <img name="thumbnail" style="width: 100%; margin-top: 220px" src="{{ url('') }}{{ $Companies->companies_image }}">
                                                    <lable class="custom-file-label"></lable>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-4 col-sm-12">
                                        <lable  for="thumbnail">عکس قبلی </lable>
                                        <span class="text-danger mr-1">بدون تصویر</span>
                                    </div>
                                 @endif
                                <!-----------companies_desc---------->
                                <div class="col-sm-12" style="margin-top: 200px">
                                    <div class="form-group">
                                        <lable>توضیحات </lable>
                                        <textarea rows="5" type="text" class="form-control" name="companies_desc" id="description" placeholder="توضیحات  را وارد کنید ..." value="{{$Companies->companies_desc}}">{!!$Companies->companies_desc !!}</textarea>
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
                            filebrowserUploadUrl: '/dashboard/companies/save_image',
                            filebrowserImageUploadUrl: '/dashboard/companies/save_image',
                        });
                    </script>

                    <script !src="">
                        $('.nav-link').removeClass('active');
                        $('#companies').addClass('active');
                    </script>
            @endsection

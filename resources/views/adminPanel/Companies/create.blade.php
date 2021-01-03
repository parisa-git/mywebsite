

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
                        <h1 class="m-0 text-dark">افزودن شرکت</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('dashbord')}}">داشبورد</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.companies.index')}}">شرکت ها</a></li>
                            <li class="breadcrumb-item active">افزودن شرکت</li>
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
                        <div class="card-title">مشخصات شرکت جدید</div>
                    </div>

                    {{--<----------- card body  ------->--}}
                    <div class="card-body">
                        <form action="{{route('admin.companies.store')}}" role="form" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger col-sm-3">
                                            <li>{{$error}}</li>
                                        </div>
                                    @endforeach
                                </div>
                                <!----------- companies_name---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable> نام شرکت</lable>
                                        <input type="text" class="form-control" name="companies_name"
                                               placeholder=" نام شرکت خود  را وارد کنید ..." value="{{old('companies_name')}}">
                                    </div>

                                </div>
                                <!-----------companies_summary---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>توضیحات مختصر</lable>
                                        <input type="text" class="form-control" name="companies_summary"
                                               placeholder="توضیحات مختصر ..." value="{{old('companies_summary')}}">
                                    </div>
                                </div>
                                <!-----------companies_image---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>عکس </label>
                                        <div class="input-group">
                                            <div class="custom-file" >
                                                <input type="file" class="custom-file-input" name="companies_image">
                                                <lable class="custom-file-label"></lable>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-----------companies_desc---------->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <lable>توضیحات  </lable>
                                        <textarea rows="5" type="text" class="form-control" name="companies_desc" id="description" placeholder="توضیحات  را وارد کنید ..." value="{{old('companies_desc')}}"></textarea>
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
                        filebrowserUploadUrl: '/dashboard/component/save_image',
                        filebrowserImageUploadUrl: '/dashboard/component/save_image',
                    });
                </script>

                    <script !src="">
                        $('.nav-link').removeClass('active');
                        $('#companies').addClass('active');
                    </script>
            @endsection


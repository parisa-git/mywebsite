
@extends('adminPanel.Layout.wrapper')
@section('pageTitle')
    افزودن کاندید ها
@endsection
@section('mainContent')
    <div class="header bg-gradient-primary pb-3 pt-4 text-right">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="m-0 text-dark">@yield('pageTitle')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('dashbord')}}">داشبورد</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.candidates.index')}}">کاندید</a></li>
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
                        <div class="card-title">مشخصات کاندید جدید</div>
                    </div>

                    {{--    <-----------card body ------->--}}
                    <div class="card-body">
                        <form action="{{route('admin.candidates.store')}}" role="form" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger col-sm-3">
                                            <li>{{$error}}</li>
                                        </div>
                                    @endforeach
                                </div>
                                <!-----------fullName---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>نام کاندید</lable>
                                        <input type="text" class="form-control" name="fullName"
                                               placeholder="نام خود را وارد کنید ..." value="{{old('fullName')}}">
                                    </div>

                                </div>
                                <!-----------work_title---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>عنوان شغل</lable>
                                        <input type="text" class="form-control" name="work_title"
                                               placeholder="عنوان شغل را وارد کنید ..." value="{{old('work_title')}}">
                                    </div>

                                </div>

                                <!-----------professional_skills---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>مهارت های حرفه ای</lable>
                                        <input type="text" class="form-control" name="professional_skills"
                                               placeholder="مهارت های حرفه ای را وارد کنید ..." value="{{old('professional_skills')}}">
                                    </div>

                                </div>

                                <!-----------work_experience---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>تجربه های کاری</lable>
                                        <input type="text" class="form-control" name="work_experience"
                                               placeholder="تجربه های کاری را وارد کنید ..." value="{{old('work_experience')}}">
                                    </div>

                                </div>
                                <!-----------education---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>تحصیلات</lable>
                                        <input type="text" class="form-control" name="education"
                                               placeholder="تحصیلات را وارد کنید ..." value="{{old('education')}}">
                                    </div>

                                </div>

                                <!-----------image---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>عکس </label>
                                        <div class="input-group">
                                            <div class="custom-file" >
                                                <input type="file" class="custom-file-input" name="image">
                                                <lable class="custom-file-label"></lable>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-----------about_me---------->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <lable> توضیحات</lable>
                                        <textarea rows="5" type="text" class="form-control" name="about_me" id="description" placeholder="توضیحات  وارد کنید ..." value="{{old('about_me')}}"></textarea>
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
                            filebrowserUploadUrl: '/dashboard/candidates/save_image',
                            filebrowserImageUploadUrl: '/dashboard/candidates/save_image',
                        });
                    </script>

                    <script !src="">
                        $('.nav-link').removeClass('active');
                        $('#candidates').addClass('active');
                    </script>
@endsection



@extends('adminPanel.Layout.wrapper')
@section('pageTitle')
    افزودن شغل
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
                            <li class="breadcrumb-item"><a href="{{route('admin.jobs.index')}}">شغل</a></li>
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
                        <div class="card-title">مشخصات شغل جدید</div>
                    </div>

                    {{--    <-----------card body ------->--}}
                    <div class="card-body">
                        <form action="{{route('admin.jobs.store')}}" role="form" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger col-sm-3">
                                            <li>{{$error}}</li>
                                        </div>
                                    @endforeach
                                </div>
                                <!-----------job_name---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>نام شغل</lable>
                                        <input type="text" class="form-control" name="job_name"
                                               placeholder="شغل را وارد کنید ..."
                                               value="{{old('job_name')}}">
                                    </div>

                                </div>

                                <!-----------job_money---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>حقوق حدودی</lable>
                                        <input type="text" class="form-control" name="job_money"
                                               placeholder="حقوق حدودی را وارد کنید ..."
                                               value="{{old('job_money')}}">
                                    </div>

                                </div>

                                <!-----------job_time---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>نوع ساعت کاری</lable>
                                        <input type="text" class="form-control" name="job_time"
                                               placeholder="نوع ساعت کاری را وارد کنید ..."
                                               value="{{old('job_time')}}">
                                    </div>

                                </div>

                                <!-----------categories_name---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">دسته بندی</label>

                                        <select class="form-control" id="categories_id" name="categories_id"
                                                value="">
                                            @foreach($allCategories as $select)
                                                <option selected value="{{$select->id}}">{{$select->cat_name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <!-----------state_name---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">انتخاب استان</label>

                                        <select class="form-control" id="state_id" name="state_id"
                                                value="">
                                            @foreach($allstate as $state)
                                                <option selected value="{{$state->id}}">{{$state->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <!-----------job_img---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>عکس </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="job_img">
                                                <lable class="custom-file-label"></lable>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!----------job_email----------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>ایمیل</lable>
                                        <input type="email" class="form-control" name="job_email"
                                               placeholder="ایمیل را وارد کنید ..."
                                               value="{{old('job_email')}}">
                                    </div>

                                </div>

                                <!----------job_skill----------->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <lable>مهارت </lable>
                                        <textarea rows="5" type="text" class="form-control" name="job_skill"
                                                  placeholder="مهارت را وارد کنید ..."></textarea>
                                    </div>

                                </div>


                                <!----------job_more----------->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <lable>موارد بیشتر</lable>
                                        <textarea rows="5" type="text" class="form-control" name="job_more"
                                               placeholder="موارد بیشتر را وارد کنید ..."></textarea>
                                    </div>

                                </div>

                                <!-----------job_desc---------->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <lable> توضیحات</lable>
                                        <textarea rows="5" type="text" class="form-control" name="job_desc"
                                                  id="description" placeholder="توضیحات  وارد کنید ..."></textarea>
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

                    <script
                        src="{{url('admin/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
                    <script src="{{url('admin/plugins/ckeditor/ckeditor.js')}}"></script>
                    {{--                    <script src="{{url('admin/plugins/select2-develop/')}}"></script>--}}
                    <script !src="">
                        CKEDITOR.replace('description', {
                            filebrowserUploadMethod: 'form',
                            filebrowserUploadUrl: '/dashboard/jobs/save_image',
                            filebrowserImageUploadUrl: '/dashboard/jobs/save_image',
                        });
                    </script>

                    <script !src="">
                        $('.nav-link').removeClass('active');
                        $('#jobs').addClass('active');
                    </script>
@endsection


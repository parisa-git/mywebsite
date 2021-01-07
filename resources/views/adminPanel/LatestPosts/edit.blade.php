
@extends('adminPanel.Layout.wrapper')
@section('pageTitle')
    اخرین پست ها
@endsection
@section('mainContent')
    <div class="header bg-gradient-primary pb-3 pt-4 text-right">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="m-0 text-dark">افزودن @yield('pageTitle')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-4 direction">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('dashbord')}}">داشبورد</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.posts.index')}}">@yield('pageTitle') </a></li>
                            <li class="breadcrumb-item active">افزودن @yield('pageTitle')</li>
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
                        <div class="card-title">@yield('pageTitle') </div>
                    </div>

                    {{--    <-----------card body ------->--}}
                    <div class="card-body">
                        <form action="{{route('admin.posts.update' , $LatestPosts->id )}}" role="form" method="post"  enctype="multipart/form-data">

                            @csrf
                            <div class="row">

                                <!-----------title---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable> عنوان</lable>
                                        <input type="text" class="form-control " name="title"
                                               placeholder=" عنوان.." value="{{$LatestPosts->title}}">
                                    </div>

                                </div>
                                <!-----------image---------->
                                @if($LatestPosts->image != null && $LatestPosts->image !='')
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>تصویر</label>
                                            <div class="input-group">
                                                <div class="custom-file" >
                                                    <input type="file" class="custom-file-input" name="image">
                                                    <img name="thumbnail" style="width: 50%; margin-top: 140px" src="{{ url('') }}{{ $LatestPosts->image }}">
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
                                <!-----------text---------->
                                <div class="col-sm-12" style="margin-top: 70px">
                                    <div class="form-group">
                                        <lable> پست</lable>
                                        <textarea rows="5" type="text" class="form-control" name="text" id="description" placeholder="پست  وارد کنید ..." value="{{$LatestPosts->text}}">{!! $LatestPosts->text !!}</textarea>
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
                            filebrowserUploadUrl: '/dashboard/posts/save_image',
                            filebrowserImageUploadUrl: '/dashboard/posts/save_image',
                        });
                    </script>

                    <script !src="">
                        $('.nav-link').removeClass('active');
                        $('#posts').addClass('active');
                    </script>
@endsection

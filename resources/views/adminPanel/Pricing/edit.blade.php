

@extends('adminPanel.Layout.wrapper')
@section('pageTitle')
    تعرفه تبلیغات
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
                    <div class="col-sm-4 direction">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('dashbord')}}">داشبورد</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.pricing.index')}}">@yield('pageTitle')</a></li>
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
                        <div class="card-title">دسته بندی جدید</div>
                    </div>

                    {{--    <-----------card body ------->--}}
                    <div class="card-body">
                        <form action="{{route('admin.pricing.update' , $Pricing->id )}}" role="form" method="post">

                            @csrf
                            <div class="row">

                                <!-----------title---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable> نام تعرفه</lable>
                                        <input type="text" class="form-control " name="title"
                                               placeholder="نام تعرفه.." value="{{$Pricing->title}}">
                                    </div>

                                </div>
                                <!-----------posts---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable> تعداد پست ها</lable>
                                        <input type="text" class="form-control " name="posts"
                                               placeholder=" تعداد پست ها.." value="{{$Pricing->posts}}">
                                    </div>

                                </div>
                                <!-----------price---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>قیمت</lable>
                                        <input type="text" class="form-control " name="price"
                                               placeholder=" قیمت.." value="{{$Pricing->price}}">
                                    </div>

                                </div>


                            <!-----------desc---------->
                                <div class="col-sm-12" style="margin-top: 70px">
                                    <div class="form-group">
                                        <lable> توضیحات</lable>
                                        <textarea rows="5" type="text" class="form-control" name="desc" id="description" placeholder="توضیحات  وارد کنید ..." value="{{$Pricing->desc}}">{!! $Pricing->desc !!}</textarea>
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
                            filebrowserUploadUrl: '/dashboard/pricing/save_image',
                            filebrowserImageUploadUrl: '/dashboard/pricing/save_image',
                        });
                    </script>

                    <script !src="">
                        $('.nav-link').removeClass('active');
                        $('#pricing').addClass('active');
                    </script>
@endsection

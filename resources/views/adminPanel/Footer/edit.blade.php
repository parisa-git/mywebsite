
@extends('adminPanel.Layout.wrapper')
@section('pageTitle')
    فوتر
@endsection
@section('mainContent')
    <div class="header bg-gradient-primary pb-3 pt-4 text-right">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="m-0 text-dark">اافزودن @yield('pageTitle')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('dashbord')}}">داشبورد</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.footer.index')}}">@yield('pageTitle')</a></li>
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
                        <div class="card-title">مشخصات فوتر جدید</div>
                    </div>

                    {{--    <-----------card body ------->--}}
                    <div class="card-body">
                        <form action="{{route('admin.footer.update' , $Footer->id )}}" role="form" method="post">
                            @csrf
                            <div class="row">

                                <!-----------title ---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>عنوان</lable>
                                        <input type="text" class="form-control " name="title" disabled
                                               placeholder="عنوانرا وارد کنید ..." value="{{$Footer->title}}">
                                    </div>

                                </div>
                                <!-----------name_link---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>نام لینک</lable>
                                        <input type="text" class="form-control" name="name_link"
                                               placeholder="نام لینک را وارد کنید ..." value="{{$Footer->name_link}}">
                                    </div>
                                </div>
                                <!-----------link---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>لینک</lable>
                                        <input type="text" class="form-control" name="link"
                                               placeholder="لینک را وارد کنید ..." value="{{$Footer->link}}">
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

                    <script !src="">
                        $('.nav-link').removeClass('active');
                        $('#footer').addClass('active');
                    </script>
@endsection

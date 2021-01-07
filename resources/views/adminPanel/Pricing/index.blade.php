
@extends('adminPanel.Layout.wrapper')

@section('pageTitle')
    تعرفه تبلیغات
@endsection

@section('mainContent')
    <div class="content-wrapper text-right" style="direction: ltr">
        <!-- Content Header (Page header) -->
        <section class="content-header text-right mt-3">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-9 d-flex">
                        <h1 style="position: relative; left: 650px">جداول@yield('pageTitle') </h1>
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href={{route('dashbord')}}>خانه</a></li>
                            <li class="breadcrumb-item active">@yield('pageTitle')
                            </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    @if(session('message'))
                        <div class="alert alert-success col-sm-12 float-right">
                            <li>{{Session::get('message')}}</li>
                        </div>
                    @endif
                    @if(session ('error'))
                        <div class="alert alert-danger col-sm-12 float-right">
                            <li>{{Session::get('error')}}</li>
                        </div>
                    @endif
                    @if(session ('warning'))
                        <div class="alert alert-warning col-sm-12 float-right">
                            <li>{{Session::get('warning')}}</li>
                        </div>
                    @endif
                </div>
                <div class="col-sm-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger col-sm-12 featherlight">
                            <li>{{$error}}</li>
                        </div>
                    @endforeach
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex">

                            <button type="button" id="add_btn" data-toggle="modal" data-target="#addModal"
                                    class="btn btn-outline-dark btn-lg px-3"><a class="nav-link text-dark"
                                                                                href={{route('admin.pricing.create')}}>افزودن<i
                                        class="m-1 fa fa-plus"></i>
                                </a>

                            </button>
                            <h3 class="card-title text-right pt-3" style="position: relative; left: 500px">@yield('pageTitle')</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive direction">
                            <table id="example2" class="table table-bordered table-hover mb-4">
                                <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th> نام شرکت </th>
                                    <th> تعداد پست ها</th>
                                    <th>قیمت</th>
                                    <th>توضیحات</th>
                                    <th> عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allPricing as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->posts}}</td>
                                        <td>{{$item->price}}</td>
                                         <td>{!! Illuminate\Support\Str::limit($item->desc, 10) !!}</td>
                                        <td>
                                            <a class="btn btn-outline-primary m-1 ajax  "
                                               href="{{route('admin.pricing.edit', $item->id)}}"
                                               data-toggle="tooltip" title="" data-original-title="ویرایش">
                                                <i class="m-1 fa fa-edit"></i>
                                            </a>

                                            <a class="btn btn-outline-danger m-1 ajax  "
                                               href="{{route('admin.pricing.destroy', $item->id)}}"
                                               data-toggle="tooltip" title="" data-original-title="حذف">
                                                <i class="m-1 fa fa-trash"></i>
                                            </a>

                                            <!-- Button trigger modal -->
{{--                                            <button type="button" class="btn btn-outline-danger m-1 ajax"  data-toggle="modal" data-target="#exampleModal">--}}
{{--                                                <i class="m-1 fa fa-trash"></i>--}}
{{--                                            </button>--}}

{{--                                            <!-- Modal -->--}}
{{--                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                                                <div class="modal-dialog" role="document">--}}
{{--                                                    <div class="modal-content">--}}
{{--                                                        <div class="modal-header">--}}
{{--                                                            <h5 class="modal-title" id="exampleModalLabel">هشدار</h5>--}}
{{--                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                                <span aria-hidden="true">&times;</span>--}}
{{--                                                            </button>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-body">--}}
{{--                                                         آیا مظمئن هستید میخواهید حذف کنید؟--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-footer">--}}
{{--                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">خیر</button>--}}
{{--                                                            <a class="btn btn-outline-danger m-1 ajax  "--}}
{{--                                                               href="{{route('admin.pricing.destroy', $item->id)}}"--}}
{{--                                                               data-toggle="tooltip" title="" data-original-title="حذف">--}}
{{--                                                                <i class="m-1 fa fa-trash"></i>بله--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}


                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ردیف</th>
                                    <th> نام شرکت </th>
                                    <th> تعداد پست ها</th>
                                    <th>قیمت</th>
                                    <th>توضیحات</th>
                                    <th> عملیات</th>
                                </tr>
                                </tfoot>
                            </table>
                            {{$allPricing->links()}}
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>




@endsection

@section('footerscript')

    <script !src="">
        $('.nav-link').removeClass('active');
        $('#pricing').addClass('active')
    </script>

@endsection

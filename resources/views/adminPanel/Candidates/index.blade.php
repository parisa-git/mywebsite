
@extends('adminPanel.Layout.wrapper')

@section('pageTitle')
    کاندید ها
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
                            <li class="breadcrumb-item active">جداول @yield('pageTitle')
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
                                                                                href={{route('admin.candidates.create')}}>افزودن<i
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
                                    <th>نام </th>
                                    <th> عکس</th>
                                    <th> عنوان شغل</th>
                                    <th>توضیحات</th>
                                    <th> عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allCandidates as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->fullName}}</td>
                                        <td>{{$item->work_title}}</td>
                                        <td><img width="100px" src="{{ url('') }}{{$item->image}}" alt="{{$item->cat_name}}"></td>
                                        <td>{!! Illuminate\Support\Str::limit($item->about_me, 10) !!}</td>
                                        <td>
                                            <a class="btn btn-outline-primary m-1 ajax  "
                                               href="{{route('admin.candidates.edit', $item->id)}}"
                                               data-toggle="tooltip" title="" data-original-title="ویرایش">
                                                <i class="m-1 fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-outline-danger m-1 ajax  "
                                               href="{{route('admin.candidates.destroy', $item->id)}}"
                                               data-toggle="tooltip" title="" data-original-title="حذف">
                                                <i class="m-1 fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ردیف</th>
                                    <th>نام </th>
                                    <th> عکس</th>
                                    <th> عنوان شغل</th>
                                    <th>توضیحات</th>
                                    <th> عملیات</th>
                                </tr>
                                </tfoot>
                            </table>
                            {{$allCandidates->links()}}
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
        $('#candidates').addClass('active')
    </script>

@endsection

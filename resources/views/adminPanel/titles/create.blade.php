@extends('adminPanel.Layout.wrapper')


@section('mainContent')

    <div class="col-9 text-right my-5" style="direction: rtl">
        <!-- general form elements -->
        <div class="card card-primary" style="position: relative; right: 285px;">
            <div class="card-header">
                <h3 class="card-title">تیترها</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">محل تیتر</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                               placeholder=" محل تیتر ">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"> تیتر اول</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                               placeholder="تیتر اول">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">تیتر دوم </label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                               placeholder="تیتر دوم">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">توضیحات تیتر </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="توضیحات تیتر"></textarea>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </div>

                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
@endsection

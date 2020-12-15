<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="شروع برنامه نویسی با یک پنل مدیریت طراحی شده با Bootstrap 4">
    <meta name="author" content="Creative Tim">
    <title>داشبورد آرگون - یک پنل مدیریت با بوت استرپ 4</title>
    <!-- Favicon -->
    <link href={{asset("admin/assets/img/brand/favicon.png")}} rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href={{asset("admin/assets/vender/nucleo/css/nucleo.css")}} rel="stylesheet">
    <link href={{asset("admin/assets/vender/@fortawesome/fontawesome-free/css/all.min.css")}} rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href={{asset("admin/assets/css/argon.css")}} rel="stylesheet">
</head>
<body>
<!-- Sidenav -->
<nav class="navbar navbar-vertical fixed-right navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="./index.html">
            <img src={{asset("admi/assets/img/brand/blue.png")}} class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-left text-right" aria-labelledby="navbar-default_dropdown_1">
                    <a class="dropdown-item" href="#">عملیات</a>
                    <a class="dropdown-item" href="#">عملیات دیگر</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">گزینه های بیشتر اینجا</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src={{asset("admin/assets/img/theme/team-1-800x800.jpg")}}>
                                </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-left text-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">خوش آمدید!</h6>
                    </div>
                    <a href={{asset("admin/examples/profile.html")}} class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>پروفایل من</span>
                    </a>
                    <a href={{asset("admin/examples/profile.html")}} class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>تنظیمات</span>
                    </a>
                    <a href={{asset("admin/examples/profile.html")}} class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>فعالیت</span>
                    </a>
                    <a href={{"admin/examples/profile.html"}} class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>پشتیبانی</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#!" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>خورج</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse text-right" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{route("dashbord")}}">
                            <img src={{asset("admin/navbar-brand-img/assets/img/brand/blue.png")}}>
                        </a>
                    </div>
                    <div class="col-6 collapse-close text-left">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="جستجو" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route("dashbord")}}">
                        <i class="ni ni-tv-2 text-primary"></i> داشبورد
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{asset("admin/examples/icons.html")}}>
                        <i class="ni ni-planet text-blue"></i> آیکون ها
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{asset("admin/examples/maps.html")}}>
                        <i class="ni ni-pin-3 text-orange"></i> نقشه ها
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{asset("admin/examples/profile.html")}}>
                        <i class="ni ni-single-02 text-yellow"></i> پروفایل کاربر
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{asset("admin/examples/tables.html")}}>
                        <i class="ni ni-bullet-list-67 text-red"></i> جداول
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{asset("admin/examples/login.html")}}>
                        <i class="ni ni-key-25 text-info"></i> ورود
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{asset("admin/examples/register.html")}}>
                        <i class="ni ni-circle-08 text-pink"></i> عضویت
                    </a>
                </li>
            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">مستندات قالب را ببینید:</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href={{asset("admin/docs/documentation.html")}}>
                        <i class="ni ni-single-copy-04"></i> مستندات
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Main content -->
<div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{route("dashbord")}}">داشبورد</a>
            <!-- Form -->
            <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                <div class="form-group mb-0">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input class="form-control pr-0 pl-3" placeholder="جستجو" type="text">
                    </div>
                </div>
            </form>
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pl-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src={{asset("./assets/img/theme/team-4-800x800.jpg")}}>
                                </span>
                            <div class="media-body mr-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold">جسیکا جونس</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-left text-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">خوش آمدید!</h6>
                        </div>
                        <a href={{asset("admin/examples/profile.html")}} class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>پروفایل من</span>
                        </a>
                        <a href={{asset("admin/examples/profile.html")}} class="dropdown-item">
                            <i class="ni ni-settings-gear-65"></i>
                            <span>تنظیمات</span>
                        </a>
                        <a href={{asset("admin/examples/profile.html" )}} class="dropdown-item">
                            <i class="ni ni-calendar-grid-58"></i>
                            <span>فعالیت</span>
                        </a>
                        <a href={{asset("admin/examples/profile.html")}} class="dropdown-item">
                            <i class="ni ni-support-16"></i>
                            <span>پشتیبانی</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#!" class="dropdown-item">
                            <i class="ni ni-user-run"></i>
                            <span>خروج</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8 text-right">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">ترافیک</h5>
                                        <span class="h2 font-weight-bold mb-0">350,897</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="fas fa-chart-bar"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm text-right">
                                    <span class="text-success ml-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                    <span class="text-nowrap">در ماه گذشته</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">کاربران جدید</h5>
                                        <span class="h2 font-weight-bold mb-0">2,356</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <i class="fas fa-chart-pie"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-danger ml-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                                    <span class="text-nowrap">در هفته گذشته</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">حراجی</h5>
                                        <span class="h2 font-weight-bold mb-0">924</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                            <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-warning ml-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                                    <span class="text-nowrap">در روز گذشته</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">کارایی</h5>
                                        <span class="h2 font-weight-bold mb-0">49,65%</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                            <i class="fas fa-percent"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-success ml-2"><i class="fas fa-arrow-up"></i> 12%</span>
                                    <span class="text-nowrap">در ماه گذشته</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0 text-right">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-light ls-1 mb-1">بررسی اجمالی</h6>
                                <h2 class="text-white mb-0">ارزش فروش</h2>
                            </div>
                            <div class="col">
                                <ul class="nav nav-pills justify-content-end">
                                    <li class="nav-item ml-2 mr-md-0" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k">
                                        <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                                            <span class="d-none d-md-block">ماه</span>
                                            <span class="d-md-none">M</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                                        <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                                            <span class="d-none d-md-block">هفته</span>
                                            <span class="d-md-none">W</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Chart -->
                        <div class="chart">
                            <!-- Chart wrapper -->
                            <canvas id="chart-sales" class="chart-canvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 text-right">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">کارایی</h6>
                                <h2 class="mb-0">کلیه سفارشات</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Chart -->
                        <div class="chart">
                            <canvas id="chart-orders" class="chart-canvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 text-right">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">بازدید های صفحه</h3>
                            </div>
                            <div class="col text-left">
                                <a href="#!" class="btn btn-sm btn-primary">نمایش همه</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">عنوان صفحه</th>
                                <th scope="col">بازدیدکننده</th>
                                <th scope="col">کاربران منحصر به فرد</th>
                                <th scope="col">نرخ بی کاری</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">
                                    /argon/
                                </th>
                                <td>
                                    4,569
                                </td>
                                <td>
                                    340
                                </td>
                                <td>
                                    <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    /argon/index.html
                                </th>
                                <td>
                                    3,985
                                </td>
                                <td>
                                    319
                                </td>
                                <td>
                                    <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    /argon/charts.html
                                </th>
                                <td>
                                    3,513
                                </td>
                                <td>
                                    294
                                </td>
                                <td>
                                    <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    /argon/tables.html
                                </th>
                                <td>
                                    2,050
                                </td>
                                <td>
                                    147
                                </td>
                                <td>
                                    <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    /argon/profile.html
                                </th>
                                <td>
                                    1,795
                                </td>
                                <td>
                                    190
                                </td>
                                <td>
                                    <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">ترافیک اجتماعی</h3>
                            </div>
                            <div class="col text-left">
                                <a href="#!" class="btn btn-sm btn-primary">نمایش همه</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">ارجاع</th>
                                <th scope="col">بازدیدکننده</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">
                                    فیسبوک
                                </th>
                                <td>
                                    1,480
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="ml-2">60%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    فیسبوک
                                </th>
                                <td>
                                    5,480
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="ml-2">70%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    گوگل
                                </th>
                                <td>
                                    4,807
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="ml-2">80%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    اینستاگرام
                                </th>
                                <td>
                                    3,678
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="ml-2">75%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    تویتر
                                </th>
                                <td>
                                    2,645
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2">30%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-right text-muted">
                        &copy; 1398 <a href="" class="font-weight-bold ml-1">argon</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="" class="nav-link" target="_blank">argon</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" target="_blank">درباره ما</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" target="_blank">بلاگ</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" target="_blank">سوالات متداول</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src={{asset("admin/assets/vender/jquery/dist/jquery.min.js")}}></script>
<script src={{asset("admin/assets/vender/bootstrap/dist/js/bootstrap.bundle.min.js")}}></script>
<!-- Optional JS -->
<script src={{asset("admin/assets/vender/chart.js/dist/Chart.min.js")}}></script>
<script src={{asset("admin/assets/vender/chart.js/dist/Chart.extension.js")}}></script>
<!-- Argon JS -->
<script src={{asset("admin/assets/js/argon.js")}}></script>
</body>
</html>

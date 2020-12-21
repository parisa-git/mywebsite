<!DOCTYPE html>
<html lang="fa" dir="rtl">
{{--@yield('head')--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="شروع برنامه نویسی با یک پنل مدیریت طراحی شده با Bootstrap 4">
    <meta name="author" content="Creative Tim">
    <title> @yield('TitlePanel')</title>
    <!-- Favicon -->
    <link href={{asset("admin/assets/img/brand/favicon.png")}} rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href={{asset("admin/assets/vender/nucleo/css/nucleo.css")}} rel="stylesheet">
    <link href={{asset("admin/assets/vender/@fortawesome/fontawesome-free/css/all.min.css")}} rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href={{asset("admin/assets/css/argon.css")}} rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{asset("admin/assets/css/datatables.min.css")}}>
    <link rel="stylesheet" href={{asset("admin/assets/css/datatables.css")}}>
    <link rel="stylesheet" href={{asset("admin/assets/css/bootstrap.min.css")}}>

    @yield('headerLinks')

    @yield('headerScripts')

</head>
<body>
<div class="main-content">

    @yield('navtop')

{{--    @include('adminPanel.TopNav.topnav')--}}

    @include('adminPanel.SideNav.sidnav')



@yield('mainContent')

</div>

{{--@yield('js')--}}


<script src={{asset("admin/assets/vender/jquery/dist/jquery.min.js")}}></script>
<script src={{asset("admin/assets/vender/bootstrap/dist/js/bootstrap.bundle.min.js")}}></script>
<!-- Optional JS -->
<script src={{asset("admin/assets/vender/chart.js/dist/Chart.min.js")}}></script>
<script src={{asset("admin/assets/vender/chart.js/dist/Chart.extension.js")}}></script>
<!-- Argon JS -->
<script src={{asset("admin/assets/js/argon.js")}}></script>
<!-- Bootstrap JS -->
<script src={{asset("admin/assets/js/jquery.min.js")}}></script>
<script src={{asset("admin/assets/js/datatables.min.js")}}></script>
<script src={{asset("admin/assets/js/bootstrap.min.js")}}></script>
<script src={{asset("admin/assets/js/bootstrap.js")}}></script>

@yield('footerscript')
</body>
</html>

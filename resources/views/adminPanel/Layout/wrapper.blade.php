<!DOCTYPE html>
<html lang="fa" dir="rtl">
@yield('head')
<body>
<div class="main-content">

@include('adminPanel.TopNav.topnav')

@include('adminPanel.SideNav.sidnav')

@yield('mainContent')

</div>

@yield('js')

</body>
</html>

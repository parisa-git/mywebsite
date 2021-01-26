<!DOCTYPE html>
<html class="wide" lang="en">
@include('Site.Layout.head')
<body>
<div class="ie-panel"> <a href="https://windows.microsoft.com/en-US/internet-explorer/">
        <img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<div class="preloader">
    <div class="preloader-body">
        <div class="preloader-item">
            <svg width="40" height="40" viewbox="0 0 40 40">
                <polygon class="rect" points="0 0 0 40 40 40 40 0"></polygon>
            </svg>
        </div>
    </div>
</div>
<div class="page">
    <!-- Page Header-->
@include('Site.Layout.mainTop')

<!-- Page main content-->
@include('Site.pages.ContactUs.layout.main')

    <!-- Page Footer-->
@include('Site.Layout.footer')
</div>
<div class="snackbars" id="form-output-global"></div>
@include('Site.Layout.script')
</html>

<!DOCTYPE html>
<html class="wide" lang="en">
@include('Site.Layout.head')
<body>
<div class="ie-panel"> <a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
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
    @include('Site.pages.Pricing.layout.main')

    <!-- Page Footer-->
    @include('Site.Layout.footer')
</div>
<div class="snackbars" id="form-output-global"></div>
    @include('Site.Layout.script')
<!-- Google Tag Manager --><noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0" style="display:none;visibility:hidden">

    </iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');
</script><!-- End Google Tag Manager -->
</body>
</html>

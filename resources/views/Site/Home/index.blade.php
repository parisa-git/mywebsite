<!DOCTYPE html>
<html class="wide" lang="en">
@include('Site.Layout.head')
<body>
<div class="ie-panel"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img
            src={{asset("Site/images/ie8-panel/warning_bar_0000_us.jpg")}} height="42" width="820"
            alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
</div>
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

    @include('Site.Layout.navbar')

    @include('Site.pages.index.JobsFactory')

    @include('Site.pages.index.Categorie')

    @include('Site.pages.index.RecentJobs')

    @include('Site.pages.index.SuccessStories')

    @include('Site.pages.index.Pricing')

    @include('Site.pages.index.Steps')

    @include('Site.pages.index.LatestPosts')

    @include('Site.pages.index.CTA')

    @include('Site.Layout.footer')
</div>

<div class="snackbars" id="form-output-global"></div>

@include('Site.Layout.script')

</body>
</html>

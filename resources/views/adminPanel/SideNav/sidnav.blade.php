
<!-- Sidenav -->
<nav class="navbar navbar-vertical fixed-right navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="./index.html">
            <img src={{asset("admin/assets/img/brand/blue.png")}} class="navbar-brand-img" alt="...">
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
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">

                                <a data-toggle="collapse" href="#collapse1" class="nav-link" >
                                    <i class="ni ni-tv-2 text-primary"></i>   جداول پایه
                                </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">استان ها</div>
                        <div class="panel-footer">Panel Footer</div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link active" id="dashboard" href="{{route("dashbord")}}">
                <i class="ni ni-tv-2 text-primary"></i> داشبورد
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="titles" href={{route('admin.title.index')}}>
                <i class="ni ni-planet text-blue"></i>تیترها
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="categories" href={{route('admin.categories.index')}}>
                <i class="ni ni-circle-08 text-pink"></i> دسته بندی
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="jobs" href={{route('admin.jobs.index')}}>
                <i class="ni ni-planet text-blue"></i>مشاغل
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="companies" href={{route('admin.companies.index')}}>
                <i class="ni ni-planet text-blue"></i> شرکت ها
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="stories" href={{route('admin.stories.index')}}>
                <i class="ni ni-planet text-blue"></i> داستان ها
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="aboutus" href={{route('admin.aboutus.index')}}>
                <i class="ni ni-planet text-blue"></i> درباره ما
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="state" href={{route('admin.state.index')}}>
                <i class="ni ni-planet text-blue"></i>استان ما
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="candidates" href={{route('admin.candidates.index')}}>
                <i class="ni ni-planet text-blue"></i>کاندید ها
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="posts" href={{route('admin.posts.index')}}>
                <i class="ni ni-planet text-blue"></i>آخرین پست ها
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pricing" href={{route('admin.pricing.index')}}>
                <i class="ni ni-planet text-blue"></i>تعرفه تبلیغات
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="footer" href={{route('admin.footer.index')}}>
                <i class="ni ni-planet text-blue"></i>فوتر
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

{{--<!-- Sidenav -->--}}
{{--<nav class="navbar navbar-vertical fixed-right navbar-expand-md navbar-light bg-white" id="sidenav-main">--}}
{{--    <div class="container-fluid">--}}
{{--        <!-- Toggler -->--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <!-- Brand -->--}}
{{--        <a class="navbar-brand pt-0" href="./index.html">--}}
{{--            <img src="./assets/img/brand/blue.png" class="navbar-brand-img" alt="...">--}}
{{--        </a>--}}
{{--        <!-- User -->--}}
{{--        <ul class="nav align-items-center d-md-none">--}}
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    <i class="ni ni-bell-55"></i>--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-left text-right" aria-labelledby="navbar-default_dropdown_1">--}}
{{--                    <a class="dropdown-item" href="#">عملیات</a>--}}
{{--                    <a class="dropdown-item" href="#">عملیات دیگر</a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a class="dropdown-item" href="#">گزینه های بیشتر اینجا</a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    <div class="media align-items-center">--}}
{{--                                <span class="avatar avatar-sm rounded-circle">--}}
{{--                                    <img alt="Image placeholder" src="./assets/img/theme/team-1-800x800.jpg">--}}
{{--                                </span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-left text-right">--}}
{{--                    <div class=" dropdown-header noti-title">--}}
{{--                        <h6 class="text-overflow m-0">خوش آمدید!</h6>--}}
{{--                    </div>--}}
{{--                    <a href="./examples/profile.html" class="dropdown-item">--}}
{{--                        <i class="ni ni-single-02"></i>--}}
{{--                        <span>پروفایل من</span>--}}
{{--                    </a>--}}
{{--                    <a href="./examples/profile.html" class="dropdown-item">--}}
{{--                        <i class="ni ni-settings-gear-65"></i>--}}
{{--                        <span>تنظیمات</span>--}}
{{--                    </a>--}}
{{--                    <a href="./examples/profile.html" class="dropdown-item">--}}
{{--                        <i class="ni ni-calendar-grid-58"></i>--}}
{{--                        <span>فعالیت</span>--}}
{{--                    </a>--}}
{{--                    <a href="./examples/profile.html" class="dropdown-item">--}}
{{--                        <i class="ni ni-support-16"></i>--}}
{{--                        <span>پشتیبانی</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#!" class="dropdown-item">--}}
{{--                        <i class="ni ni-user-run"></i>--}}
{{--                        <span>خورج</span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--        <!-- Collapse -->--}}
{{--        <div class="collapse navbar-collapse text-right" id="sidenav-collapse-main">--}}
{{--            <!-- Collapse header -->--}}
{{--            <div class="navbar-collapse-header d-md-none">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-6 collapse-brand">--}}
{{--                        <a href="./index.html">--}}
{{--                            <img src="./assets/img/brand/blue.png">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-6 collapse-close text-left">--}}
{{--                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">--}}
{{--                            <span></span>--}}
{{--                            <span></span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Form -->--}}
{{--            <form class="mt-4 mb-3 d-md-none">--}}
{{--                <div class="input-group input-group-rounded input-group-merge">--}}
{{--                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="جستجو" aria-label="Search">--}}
{{--                    <div class="input-group-prepend">--}}
{{--                        <div class="input-group-text">--}}
{{--                            <span class="fa fa-search"></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--            <!-- Navigation -->--}}
{{--            <ul class="navbar-nav">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active" href="./index.html">--}}
{{--                        <i class="ni ni-tv-2 text-primary"></i> داشبورد--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="./examples/icons.html">--}}
{{--                        <i class="ni ni-planet text-blue"></i> آیکون ها--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="./examples/maps.html">--}}
{{--                        <i class="ni ni-pin-3 text-orange"></i> نقشه ها--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="./examples/profile.html">--}}
{{--                        <i class="ni ni-single-02 text-yellow"></i> پروفایل کاربر--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="./examples/tables.html">--}}
{{--                        <i class="ni ni-bullet-list-67 text-red"></i> جداول--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="./examples/login.html">--}}
{{--                        <i class="ni ni-key-25 text-info"></i> ورود--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="./examples/register.html">--}}
{{--                        <i class="ni ni-circle-08 text-pink"></i> عضویت--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <!-- Divider -->--}}
{{--            <hr class="my-3">--}}
{{--            <!-- Heading -->--}}
{{--            <h6 class="navbar-heading text-muted">مستندات قالب را ببینید:</h6>--}}
{{--            <!-- Navigation -->--}}
{{--            <ul class="navbar-nav mb-md-3">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="docs/documentation.html">--}}
{{--                        <i class="ni ni-single-copy-04"></i> مستندات--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

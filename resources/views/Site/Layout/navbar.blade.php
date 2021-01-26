<!-- Page Header-->
<header class="section page-header jumbotron-creative">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
             data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
             data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
             data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
             data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px"
             data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span>
                        </button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand">
                            <!--Brand--><a class="brand" href="index.blade.php">
                                <img class="brand-logo-dark" src={{asset("Site/images/logo-default-286x52.png")}} alt=""
                                     width="143" height="26"/>
                                <img class="brand-logo-light" src="images/logo-inverse-286x52.png" alt="" width="143"
                                    height="26"/></a>
                        </div>
                    </div>
                    <div class="rd-navbar-main-element">
                        <div class="rd-navbar-nav-wrap " style="direction: rtl">
                            <ul class="rd-navbar-nav">

                                <li class="rd-nav-item ml-5"><a class="rd-nav-link" href="{{route('Home')}}">صفحه اصلی</a>

                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('Home.aboutus')}}">درباره ما</a>

                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('Home.contactus')}}">تماس با ما</a>

                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('Home.recendjobs')}}">مشاغل</a>

                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('Home.pricing')}}">تعرفه ها</a>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="rd-navbar-aside">


                        @guest
                            <div class="rd-navbar-aside-item">
                                <button
                                    class="button button-xs button-primary-outline button-icon button-icon-left rd-navbar-popup-toggle"
                                    data-rd-navbar-toggle="#rd-navbar-register"><span
                                        class="icon mdi mdi-account"></span>عضویت
                                </button>
                                <div class="rd-navbar-popup bg-gray-100" id="rd-navbar-register">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                       class="form-control @error('name') is-invalid @enderror"
                                                       name="name" value="{{ old('name') }}" required
                                                       autocomplete="name" autofocus>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       name="email" value="{{ old('email') }}" required
                                                       autocomplete="email">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       name="password" required autocomplete="new-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control"
                                                       name="password_confirmation" required
                                                       autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            @if (Route::has('register'))
                                <div class="rd-navbar-aside-item">
                                    <button
                                        class="button button-xs button-primary button-icon button-icon-left rd-navbar-popup-toggle"
                                        data-rd-navbar-toggle="#rd-navbar-login"><span
                                            class="icon mdi mdi-import"></span> <i class="fas fa-sign-in-alt"></i>ورود
                                    </button>
                                    <div class="rd-navbar-popup bg-gray-100" id="rd-navbar-login">
                                        <h5 class="rd-navbar-popup-title">ورود</h5>
                                        <form class="rd-form form-compact" method="post" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-wrap">
                                                <input id="email" type="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       name="email" value="{{ old('email') }}" required
                                                       autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <label class="form-label"
                                                       for="emaill">{{ __('E-Mail Address') }}</label>
                                            </div>
                                            <div class="form-wrap">
                                                <input id="password" type="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       name="password" required autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <label class="form-label"
                                                       for="password">{{ __('Password') }}</label>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember"
                                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{--                                                        {{ __('Login') }}--}}
                                                        ارسال
                                                    </button>

                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                            {{--                                            <div class="form-wrap">--}}
                                            {{--                                                <button class="button button-block button-primary" type="submit">--}}
                                            {{--                                                    Login--}}
                                            {{--                                                </button>--}}
                                            {{--                                            </div>--}}
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @else

                            <a id="navbarDropdown"
                               class="nav-link dropdown-toggle button button-xs btn btn-outline-dark" href="#"
                               role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>

                        @endguest

                    </div>
                </div>
            </div>
        </nav>
    </div>


    <div class="jumbotron-creative-inner">
        <div class="container">
            <div class="jumbotron-creative-main">
                @foreach($titles as $title)

                    @if($title->id == 1)
                        <h2 class="jumbotron-creative-title text-right">{{$title->firstTitle}}</h2>
                    @endif
                @endforeach
                <div class="form-layout-search-outer">
                    <form class="form-layout-search form-lg">
                        <div class="form-wrap form-wrap-icon">
                            <select class="form-input select" id="form-region" data-placeholder="All Regions"
                                    name="region" data-minimum-results-for-search="Infinity"
                                    data-constraints="@Selected">
                                @foreach($allJobCategories as $cat)
                                    <option selected value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-wrap form-wrap-icon form-wrap-select">
                            <!-- Select 2-->
                            <select class="form-input select" id="form-region" data-placeholder="All Regions"
                                    name="region" data-minimum-results-for-search="Infinity"
                                    data-constraints="@Selected">
                                @foreach($allstates as $state)
                                    <option selected value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            </select>

                            <span class="icon fl-bigmug-line-big104"></span>

                        </div>
                        <div class="form-wrap form-wrap-button form-wrap-button-icon-only">
                            <button class="button button-lg button-primary button-icon-only" type="submit"
                                        aria-label="search">
                                <a href="{{route('Home.recendjobs')}}">
                                    جستوجو
{{--                                    <span class="icon icon-4 fl-bigmug-line-search74"></span>--}}
                                </a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="jc-decoration">
            <div class="jc-decoration-item jc-decoration-item-1">
                <svg version="1.1" x="0px" y="0px" viewbox="0 0 1446 970" width="1446" height="970"
                     preserveAspectRatio="none">
                    <path
                        d="M-0.000,33.000 C-0.000,33.000 80.000,54.000 113.000,83.000 C146.000,112.000 147.000,152.000 183.000,174.000 C219.000,196.000 288.000,172.000 334.000,193.000 C380.000,214.000 379.000,282.000 427.000,317.000 C475.000,352.000 548.000,336.000 588.000,371.000 C628.000,406.000 614.000,483.000 647.000,513.000 C680.000,543.000 786.000,537.000 841.000,587.000 C896.000,637.000 885.000,739.000 932.000,776.000 C979.000,813.000 1026.000,796.000 1069.000,817.000 C1112.000,838.000 1135.000,865.000 1189.000,893.000 C1243.000,921.000 1433.000,970.000 1433.000,970.000 L1446.000,0.000 L-0.000,33.000 Z"></path>
                </svg>
            </div>
            <div class="jc-decoration-item jc-decoration-item-2">
                <svg version="1.1" x="0px" y="0px" viewbox="0 0 1446 970" width="1446" height="970"
                     preserveAspectRatio="none">
                    <path
                        d="M-0.000,33.000 C-0.000,33.000 80.000,54.000 113.000,83.000 C146.000,112.000 147.000,152.000 183.000,174.000 C219.000,196.000 288.000,172.000 334.000,193.000 C380.000,214.000 379.000,282.000 427.000,317.000 C475.000,352.000 548.000,336.000 588.000,371.000 C628.000,406.000 614.000,483.000 647.000,513.000 C680.000,543.000 786.000,537.000 841.000,587.000 C896.000,637.000 885.000,739.000 932.000,776.000 C979.000,813.000 1026.000,796.000 1069.000,817.000 C1112.000,838.000 1135.000,865.000 1189.000,893.000 C1243.000,921.000 1433.000,970.000 1433.000,970.000 L1446.000,0.000 L-0.000,33.000 Z"></path>
                </svg>
            </div>
            <img class="jc-decoration-image" src={{asset("Site/images/home-1-748x528.png")}} alt="" width="748"
                 height="528"/>
        </div>
    </div>
</header>
@include('Site.pages.index.recendjobs')

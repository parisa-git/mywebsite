<!-- Welcome to JobsFactory-->
<section class="section section-md bg-default text-center">
    <div class="container ">
        @foreach($titles as $title)
            @if($title->id == 2)
        <h3>{{$title->firstTitle}}</h3>

        <p class="text-spacing-05">{{$title->secendTitle}}</p>
            @endif
        @endforeach
                <div class="row row-50 justify-content-center align-items-center text-left">
            <div class="col-md-10 col-lg-6">
                <figure class="figure-responsive block-5"><img src={{asset("Site/images/home-2-540x413.jpg")}} alt="" width="540" height="413"/>
                </figure>
            </div>
            <div class="col-md-10 col-lg-6">
                <div class="row row-50 row-xl-70">
                    <div class="col-sm-6">
                        <!-- Box Line-->
                        <article class="box-line box-line_sm">
                            <div class="box-line-inner">
                                <div class="box-line-icon icon mercury-icon-group"></div>
                                @foreach($titles as $title)
                                    @if($title->id == 12)
                                <h5 class="box-line-title">{{$title->secendTitle}}</h5>
                                    @endif
                                @endforeach
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6">
                        <!-- Box Line-->
                        <article class="box-line box-line_sm">
                            <div class="box-line-inner">
                                <div class="box-line-icon icon mercury-icon-partners"></div>
                                @foreach($titles as $title)
                                    @if($title->id == 13)
                                <h5 class="box-line-title">{{$title->secendTitle}}</h5>
                                    @endif
                                @endforeach
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6">
                        <!-- Box Line  -->
                        <article class="box-line box-line_sm">
                            <div class="box-line-inner">
                                <div class="box-line-icon icon mercury-icon-chat"></div>
                                @foreach($titles as $title)
                                    @if($title->id == 14)
                                <h5 class="box-line-title">{{$title->secendTitle}}</h5>
                                @endif
                                @endforeach
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6">
                        <!-- Box Line-->
                        <article class="box-line box-line_sm">
                            <div class="box-line-inner">
                                <div class="box-line-icon icon mercury-icon-target"></div>
                                @foreach($titles as $title)
                                    @if($title->id == 15)
                                <h5 class="box-line-title">{{$title->secendTitle}}</h5>
                                    @endif
                                @endforeach
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

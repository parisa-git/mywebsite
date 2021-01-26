@include('Site.pages.AboutUs.layout.nav')
<!-- Welcome to JobsFactory-->
<section class="section section-md">
    @foreach($aboutus as $item)
    <div class="container">
        <div class="row row-30 align-items-center text-right">
            <div class="col-lg-6 height-fill">
                <figure class="figure-responsive">
                    <img src="{{url('')}}{{$item->about_image}}" alt="" width="573" height="368"/>
                </figure>
            </div>
            <div class="col-lg-6">
                <article class="box-info">
                    <h3>{{$item->about_title}}</h3>
                    <p>{!! $item->about_desc !!}</p>

                </article>
            </div>
        </div>
    </div>

    @endforeach
</section>

<section class="parallax-container section-md bg-primary bg-overlay-1 text-center" data-parallax-img="{{asset("site/images/parallax-2.jpg")}}">
    <div class="parallax-content">
        <div class="container container-fullwidth">

            @foreach($titles as $title)

                @if($title->id == 7)
                    <h3>{{$title->firstTitle}}</h3>
            @endif
        @endforeach
        <!-- Owl Carousel-->
            <div class="owl-carousel owl-carousel-stretch" data-autoplay="true" data-autoplay-timeout="4000" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="5" data-xxl-items="6" data-dots="true" data-nav="false" data-stage-padding="2" data-loop="false" data-margin="30" data-mouse-drag="false">
                @foreach($allCompanies  as $company)
                    <a class="link-corporate" href="#">
                        <img src="{{ url('') }}{{$company->companies_image}}" alt="" width="183" height="44"/>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- CTA-->
<section class="section section-md bg-gray-100 text-center">
    <div class="container">
        <h3>برنامه JobsFactory را برای موبایل خود دریافت کنید</h3>
        <p class="offset-top-20px"><span style="max-width: 670px;">
                جستجوی شغل هرگز به این آسانی نبوده است. اکنون می توانید شغلی را پیدا کنید که با انتظار شغلی شما مطابقت داشته باشد ، برای شغل درخواست دهید و از طریق تلفن همراه خود بازخورد دریافت کنید. اکنون جستجوی کار خود را شروع کنید!
            </span></p>
        <div class="group"><a class="button button-primary button-fixed-size" href="#"><img src="images/google-play-download-138x35.png" alt="" width="138" height="35"/></a><a class="button button-primary button-fixed-size" href="#"><img src="images/appstore.svg" alt=""></a></div>
    </div>
</section>

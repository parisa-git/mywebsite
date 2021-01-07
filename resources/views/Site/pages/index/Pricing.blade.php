<!-- Pricing-->
<section class="section section-md bg-default">
    <div class="container">
        @foreach($titles as $title)

            @if($title->id == 17)
                <h3 class="text-center">{{$title->firstTitle}}</h3>
            @endif
        @endforeach
        <div class="row row-50 justify-content-center">

            @foreach($allPricing as $item)

            <div class="col-md-6 col-lg-4">
                <!-- Pricing Table Classic-->
                <article class="pt pt-classic">
                    <div class="pt-classic-header">
                        <div class="pt-classic-item">

                            <p class="pt-title">{{$item->title}}</p>
                        </div>
                        <p class="pt-price">
                            <span>{{$item->price}}</span>
                            <span class="pt-price-small pt-price-currency">تومان</span>
{{--                            <span class="pt-price-small">00</span>--}}
                        </p>
                    </div>
                    <div class="pt-classic-main">
                        <ul class="pt-classic-features">
                            <li>{!! $item->desc !!}</li>
                        </ul><a class="button button-primary-outline" href="#">شروع</a>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
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

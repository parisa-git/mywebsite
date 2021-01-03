<!-- Popular Categories-->
<section class="section section-md bg-default text-center">
    <div class="container container-fullwidth">
        @foreach($titles as $title)

            @if($title->id == 3)
        <h3>{{$title->firstTitle}}</h3>
        @endif
    @endforeach
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-carousel-stretch" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="5" data-xxl-items="6" data-dots="true" data-nav="false" data-stage-padding="1" data-loop="false" data-margin="26" data-md-margin="20" data-lg-margin="26" data-autoplay="false" data-autoplay-timeout="3500" data-mouse-drag="false">
           @foreach($allJobCategories  as $cat)
            <a class="box-creative" href="job-listing-full.html">
                <div class="box-creative-inner">
                    <div class="test"><img src="{{ url('') }}{{$cat->cat_icon}}" alt=""></div>
                    <p class="box-creative-title">{{$cat->cat_name}}</p>
                    <p>2590 open positions</p>
                </div>
                <div class="box-creative-dummy"></div>
            </a>
            @endforeach
        </div>

    </div>
</section>

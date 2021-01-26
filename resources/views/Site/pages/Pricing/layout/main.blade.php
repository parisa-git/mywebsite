


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

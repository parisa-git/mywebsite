<!-- Success Stories-->
<section class="parallax-container section-md bg-primary bg-overlay-1 text-center" data-parallax-img=>
    <div class="material-parallax parallax"><img src="{{asset('Site/images/bg-image-7.jpg')}}" alt="" style="display: block; transform: translate3d(-50%, 183px, 0px) rotate(0.1deg);"></div>

    <div class="parallax-content">
        <div class="container">
            @foreach($titles as $title)

                @if($title->id == 6)
                    <h3>{{$title->firstTitle}}</h3>
            @endif
        @endforeach
            <!-- Owl Carousel-->
            <div class="owl-carousel" data-items="1" data-md-items="2" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="30" data-autoplay="true" data-mouse-drag="false">
                @foreach($allStories as $story)
                <blockquote class="quote-mary text-right direction">
                    <div class="quote-mary-main">
                        <svg class="quote-mary-mark" version="1.1" x="0px" y="0px" viewbox="0 0 36 28" width="38" height="28">
                            <path d="M13,0l-2.4,13.3H15V28H0V13.1L4,0H13z M34,0l-2.4,13.3H36V28H20.9V13.1L25,0H34z"></path>
                        </svg>
                        <div class="quote-mary-text">
                            <p>{!! $story->story_text !!}</p>
                        </div>
                    </div>
                    <div class="quote-mary-meta"><img class="quote-mary-avatar" src="{{ url('') }}{{$story->story_image}}" alt="" width="73" height="73"/>
                        <div class="quote-mary-info">
                            <cite class="quote-mary-cite heading-5">{{$story->story_fullName}}</cite>
                            <p class="quote-mary-subtitle">{{$story->story_jobTitle}}</p>
                        </div>
                    </div>
                </blockquote>
                @endforeach
            </div>
        </div>
    </div>
</section>

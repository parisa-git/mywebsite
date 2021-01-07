<!-- Steps-->
<section class="section section-md bg-default text-center direction">
    <div class="container">
        @foreach($titles as $title)

            @if($title->id == 8)
                <h3>{{$title->firstTitle}}</h3>
            @endif
        @endforeach
        <ul class="list-linked">
            <li class="ll-item">
                <div class="icon ll-item-icon thin-icon-email-search">
                    <svg class="ll-item-icon-inner" version="1.2" baseProfile="tiny" viewbox="-1 -1 102 102">
                        <circle cx="50" cy="50" r="50" fill="none" vector-effect="non-scaling-stroke"></circle>
                    </svg>
                </div>
                <div class="ll-item-main">
                    @foreach($titles as $title)
                    @if($title->id == 9)
                    <h5 class="ll-item-title"><a href="job-listing.html">{{$title->firstTitle}}</a></h5>
                    <p>{{$title->secendTitle}}</p>
                    @endif
                    @endforeach
                </div>
            </li>
            <li class="ll-item">
                <div class="icon ll-item-icon mercury-icon-target-2">
                    <svg class="ll-item-icon-inner" version="1.2" baseProfile="tiny" viewbox="-1 -1 102 102">
                        <circle cx="50" cy="50" r="50" fill="none" vector-effect="non-scaling-stroke"></circle>
                    </svg>
                </div>
                <div class="ll-item-main">
                    @foreach($titles as $title)
                    @if($title->id == 10)
                    <h5 class="ll-item-title"><a href="job-details.html">{{$title->firstTitle}}</a></h5>
                    <p>{{$title->secendTitle}}</p>
                    @endif
                    @endforeach
                </div>
            </li>
            <li class="ll-item">
                <div class="icon ll-item-icon ll-item-icon-sm mercury-icon-e-mail-o">
                    <svg class="ll-item-icon-inner" version="1.2" baseProfile="tiny" viewbox="-1 -1 102 102">
                        <circle cx="50" cy="50" r="50" fill="none" vector-effect="non-scaling-stroke"></circle>
                    </svg>
                </div>
                <div class="ll-item-main">
                    @foreach($titles as $title)
                    @if($title->id == 11)
                    <h5 class="ll-item-title"><a href="submit-resume.html">{{$title->firstTitle}}</a></h5>
                    <p>{{$title->secendTitle}}</p>
                    @endif
                    @endforeach
                </div>
            </li>
            <li class="ll-item">
                <div class="icon ll-item-icon mercury-icon-touch">
                    <svg class="ll-item-icon-inner" version="1.2" baseProfile="tiny" viewbox="-1 -1 102 102">
                        <circle cx="50" cy="50" r="50" fill="none" vector-effect="non-scaling-stroke"></circle>
                    </svg>
                </div>
                <div class="ll-item-main"><a class="button button-sm button-primary-outline" href="job-listing.html">الان شروع کن</a></div>
            </li>
        </ul>

    </div>
</section>

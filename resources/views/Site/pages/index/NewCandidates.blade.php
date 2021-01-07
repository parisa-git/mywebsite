
<!-- Recent Jobs-->

<section class="section section-sm bg-default">
    <div class="container">
        @foreach($titles as $title)

            @if($title->id == 16)
                <h3 class="text-center">{{$title->firstTitle}}</h3>
            @endif
        @endforeach
        <div class="owl-carousel owl-carousel-profile" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-fade="true" data-margin="30" data-mouse-drag="false">

            <!-- Profile Classic-->
            @foreach($allCandidates as $item)
            <a class="profile-classic" href="resume-page.html">
                <figure class="profile-classic-figure">
                    <img class="profile-classic-image" src="{{ url('') }}{{$item->image}}" style="width:266px; height: 219px" alt="" width="" height=""/>
                </figure>
                <div class="profile-classic-main  text-right">
                    <h5 class="profile-classic-name">{{$item->fullName}}</h5>
                    <ul class="profile-classic-list">
{{--                        <li><span class="icon mdi mdi-map-marker"></span><span>Los Angeles, California</span></li>--}}
                        <li><span>{{$item->work_title}}</span><span class="icon mdi mdi-account"></span></li>
                    </ul>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

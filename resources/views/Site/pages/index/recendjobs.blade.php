<!-- Recent Jobs-->
<section class="section section-md bg-gray-100">
    <div class="container">
        <div class="row row-40">
            <div class="col-12 text-center">
                @foreach($titles as $title)

                    @if($title->id == 20)
                        <h3>{{$title->firstTitle}}</h3>
                    @endif
                @endforeach
            </div>
            <div class="col-12 direction">
                <div class="table-job-offers-outer">
                    <table class="table-job-offers table-responsive">
                        @foreach($jobs as $item)
                        <tr>
                            <td class="table-job-offers-date"><span>{{Hekmatinasser\Verta\Verta::instance($item->created_at)->formatDifference()}}</span></td>
                            <td class="table-job-offers-main">
                                <!-- Company Light-->
                                <article class="company-light">
                                    <figure class="company-light-figure">
                                        <img class="company-light-image" src="{{url('')}}{{$item->job_img}}" alt="" width="45" height="45"/>
                                    </figure>
                                    <div class="company-light-main text-right">
                                        <h5 class="company-light-title">
                                            <a href="job-details.html">{{$item->job_name}}</a></h5>
{{--                                        <p class="text-color-default">StarArt</p>--}}
                                    </div>
                                </article>
                            </td>
                            <td class="table-job-offers-meta">
                                <div class="object-inline"><span class="icon icon-sm text-primary mdi mdi-cash"></span><span>{{$item->job_money}}</span></div>
                            </td>
                            <td class="table-job-offers-meta">
                                @foreach($allStates as $state)
                                    @if($item->state_id == $state->id)
                                <div class="object-inline"><span class="icon icon-1 text-primary mdi mdi-map-marker"></span><span>{{$state->name}}</span></div>
                                @endif
                                @endforeach
                            </td>
                            <td class="table-job-offers-badge"><span class="badge">{{$item->job_time}}</span></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="col-12 text-center">
                <a class="button button-lg button-primary-outline" href="{{route('Home.recendjobs')}}">مشاهده بشتر</a>
            </div>
        </div>
    </div>
</section>

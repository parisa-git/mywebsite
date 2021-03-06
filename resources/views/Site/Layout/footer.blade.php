<!-- Page Footer-->
<footer class="section footer-creative context-dark">
    <div class="footer-creative-main">
        <div class="container">
            <div class="row row-50 justify-content-lg-between direction text-right">
                <div class="col-lg-5 col-xl-4">
                    @foreach($footer as $item)
                        @if($item->id == 1)
                            <p class="footer-creative-title">{{$item->title}}</p>
                        @endif
                    @endforeach

                    <div class="footer-creative-divider"></div>

                    <div class="row row-narrow row-15">
                        <div class="col-6">
                            <ul class="list-marked-1 text-right">
                                @foreach($footer as $item)
                                    @if($item->id == 1)
                                        <li><a href="{{$item->link}}">{{$item->name_link}}</a></li>
                                    @endif

                                    @if($item->id == 4)
                                        <li><a href="{{$item->link}}">{{$item->name_link}}</a></li>
                                    @endif

                                    @if($item->id == 5)
                                        <li><a href="{{$item->link}}">{{$item->name_link}}</a></li>
                                    @endif

                                    @if($item->id == 6)
                                        <li><a href="{{$item->link}}">{{$item->name_link}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-marked-1 text-right">
                                @foreach($footer as $item)
                                    @if($item->id == 7)
                                        <li><a href="{{$item->link}}">{{$item->name_link}}</a></li>
                                    @endif

                                    @if($item->id == 8)
                                        <li><a href="{{$item->link}}">{{$item->name_link}}</a></li>
                                    @endif

                                    @if($item->id == 9)
                                        <li><a href="{{$item->link}}">{{$item->name_link}}</a></li>
                                    @endif

                                    @if($item->id == 10)
                                        <li><a href="{{$item->link}}">{{$item->name_link}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    @foreach($footer as $item)
                        @if($item->id == 7)
                            <p class="footer-creative-title">{{$item->title}}</p>
                        @endif
                    @endforeach
                    <div class="footer-creative-divider"></div>
                    <div class="post-line-group">
                        <!-- Post Line--><a class="post-line" href="blog-post.html">
                            <time class="post-line-time" datetime="2019"><span class="post-line-time-day">25</span><span
                                    class="post-line-time-month">April</span></time>
                            <p class="post-line-text">Canada adds 12,500 jobs in modest July rebound</p></a>
                        <!-- Post Line--><a class="post-line" href="blog-post.html">
                            <time class="post-line-time" datetime="2019"><span class="post-line-time-day">14</span><span
                                    class="post-line-time-month">April</span></time>
                            <p class="post-line-text">Outsourcing vs. In-House Digital Marketing</p></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    @foreach($footer as $item)
                        @if($item->id == 12)
                            <p class="footer-creative-title">{{$item->title}}</p>
                        @endif
                    @endforeach
                    <div class="footer-creative-divider"></div>
                    <div class="row row-narrow row-15">
                        <div class="col-6">
                            <ul class="list list-1 list-icons">
                                <li><a href="job-listing-full.html"><span
                                            class="icon icon-sm mdi mdi-map-marker"></span><span>San Francisco</span></a>
                                </li>
                                <li><a href="job-listing-full.html"><span
                                            class="icon icon-sm mdi mdi-map-marker"></span><span>Washington</span></a>
                                </li>
                                <li><a href="job-listing-full.html"><span
                                            class="icon icon-sm mdi mdi-map-marker"></span><span>Sacramento</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list list-1 list-icons">
                                <li><a href="job-listing-full.html"><span
                                            class="icon icon-sm mdi mdi-map-marker"></span><span>New York</span></a>
                                </li>
                                <li><a href="job-listing-full.html"><span
                                            class="icon icon-sm mdi mdi-map-marker"></span><span>Ontario</span></a></li>
                                <li><a href="job-listing-full.html"><span
                                            class="icon icon-sm mdi mdi-map-marker"></span><span>Chicago</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-creative-aside">
        <div class="container">
            <p class="rights"><span>JobsFactory</span><span>&nbsp;&copy;&nbsp;</span><span
                    class="copyright-year"></span><span>&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a>
            </p>
        </div>
    </div>
</footer>

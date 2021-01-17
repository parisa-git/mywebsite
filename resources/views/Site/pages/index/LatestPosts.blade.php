<!-- Latest Posts-->
<section class="section section-md bg-gray-100">
    <div class="container">

        @foreach($titles as $title)

            @if($title->id == 18)
                <h3 class="text-center">{{$title->firstTitle}}</h3>
            @endif
        @endforeach
        <div class="row row-30 row-xl-70">
            @foreach($allLatestPosts as $item)

            <div class="col-12 col-lg-4">
                <!-- Post Minimal-->
                <article class="post-minimal">
                    <a class="post-minimal-media" href="blog-post.html">
                        <img class="post-minimal-image" src="{{ url('') }}{{$item->image}}" alt="" width="369" height="253"/>
                    </a>
                    <div class="post-minimal-main text-right">
                        <h5 class="post-minimal-title">
                            <a href="blog-post.html">{{$item->title}}</a>
                        </h5>
                        <p>{!! $item->text !!}</p>

                        <time class="post-minimal-time" datetime="2019">{{Hekmatinasser\Verta\Verta::instance($item->created_at)->format("%Y %B %d")}}</time>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>

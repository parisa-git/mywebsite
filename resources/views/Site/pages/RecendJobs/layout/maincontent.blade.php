@include('Site.pages.RecendJobs.layout.nav')
<section class="section section-md">
    <div class="container">
        <form class="form-layout-search form-lg direction">
            <div class="form-wrap form-wrap-icon">
                <select class="form-input select" id="form-region" data-placeholder="All Regions"
                        name="region" data-minimum-results-for-search="Infinity"
                        data-constraints="@Selected">
                    @foreach($allJobCategories as $cat)
                        <option selected value="{{$cat->id}}">{{$cat->cat_name}}</option>
                    @endforeach
                </select></div>
            <div class="form-wrap form-wrap-icon form-wrap-select ">
                <!-- Select 2-->
                <select class="form-input select" id="form-region" data-placeholder="All Regions"
                        name="region" data-minimum-results-for-search="Infinity"
                        data-constraints="@Selected">
                    @foreach($allStates as $state)
                        <option selected value="{{$state->id}}">{{$state->name}}</option>
                    @endforeach
                </select>
                <span class="icon fl-bigmug-line-big104"></span>
            </div>
            <div class="form-wrap form-wrap-button">
                <button class="button button-lg button-primary" type="submit">جستجوجو</button>
            </div>
        </form>
        <div class="row row-50 flex-lg-row-reverse ">

            <div class="col-lg-4 col-xl-3 text-right">
                <div class="row row-30">
                    <div class="col-sm-6 col-lg-12 text-right direction">

                        <p class="heading-8">استان ها</p>
                        <hr>
                        <ul class="list list-xs text-right">

                            @foreach($allStates as $state)

                            <li>
                                <label class="checkbox checkbox_info text-tertiary">
                                    <input name="vacancy-type-checkbox-1" value="checkbox-1" type="checkbox">
                                    {{$state->name}}
                                </label>
                            </li>

                            @endforeach

                        </ul>

                    </div>
                    <div class="col-sm-6 col-lg-12 text-right direction">
                        <p class="heading-8">دسته بندی </p>
                        <hr>

                        <ul class="list list-xs">
                            @foreach($allJobCategories as $item)
                            <li>
                                <label class="checkbox checkbox_info">
                                    <input name="category-checkbox-1" value="checkbox-1" type="checkbox">{{$item->cat_name}}
                                </label>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-9 text-right direction">
                <table class="table-job-listing table-responsive">
                    @foreach($jobs as $item)
                        <a href="">
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
                                                <a href="{{route('Home.jobdetails', $item->id)}}">{{$item->job_name}}</a></h5>
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
                        </a>
                    @endforeach
                </table>
                <!-- Bootstrap Pagination-->
                <nav class="pagination-outer text-center" aria-label="Page navigation">

                    <div class="pagination">
                        {{$jobs->links()}}
                    </div>
                </nav>
            </div>

        </div>
    </div>
</section>

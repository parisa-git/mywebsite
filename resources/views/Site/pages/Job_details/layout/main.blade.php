<section class="section breadcrumbs-custom ">
    <div class="breadcrumbs-custom-aside">
        <div class="container text-right direction">
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{route('Home')}}">صفحه اصلی</a></li>
                <li><a href="#">صفحه کاندید</a></li>
                <li class="active">شغل ها</li>
            </ul>
        </div>
    </div>
</section>
<section class="section section-md direction">

    <div class="container">
        <div class="row row-50">
            <div class="col-lg-8 text-right">
                <div class="layout-details">
                    <article class="company-light company-light_1">
                        <figure class="company-light-logo">
                            <img class="company-light-logo-image" src="{{url('')}}{{$jobs->job_img}}" alt="" width="45" height="45"/>
                        </figure>
                        <div class="company-light-main">
                            <h5 class="company-light-title">{{$jobs->job_name}}</h5>
                            <div class="company-light-info">
                                <div class="row row-15 row-bordered">
                                    <div class="col-sm-6">
                                        <ul class="list list-xs">
                                            <li>
                                                <p class="object-inline object-inline_sm">
                                                    <span class="icon icon-1 text-primary mdi mdi-map-marker"></span>
                                                    @foreach($allStates as $state)
                                                        @if($jobs->state_id == $state->id)
                                                    <span>{{$state->name}}</span>
                                                        @endif
                                                    @endforeach
                                                </p>
                                            </li>
                                            <li>
                                                <p class="object-inline object-inline_sm">
                                                    <span class="icon icon-default text-primary mdi mdi-clock"></span>
                                                    <span>{{Hekmatinasser\Verta\Verta::instance($jobs->created_at)->formatDifference()}}</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="list list-xs">
                                            <li>
                                                <p class="object-inline object-inline_sm">
                                                    <span class="icon icon-sm text-primary mdi mdi-cash"></span>
                                                    <span>{{$jobs->job_money}}</span></p>
                                            </li>
                                            <li>
                                                <p class="object-inline object-inline_sm">
                                                    <span class="icon icon-1 text-primary mdi mdi-web"></span>
                                                    <span><a href="#">{{$jobs->job_email}}</a></span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <p class="text-style-1">
                {!!$jobs->job_desc!!}
                   <div class="row row-30">
                    <div class="col-md-6">
                        <h4>مهارت های مورد نیاز</h4>
                        <ul class="list-marked-3  text-right">
                            <li class=" text-right">{{$jobs->job_skill}}</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4>معرفی بیشتر</h4>
                        <ul class="list-marked-3">
                            <li>{{$jobs->job_more}}</li>
                        </ul>
                    </div>
                </div>
                <div class="layout-1">
                    <div class="layout-1-inner">
                        <p>Share this vacancy</p>
                        <div>
                            <ul class="list-inline list-inline-xs">
                                <li><a class="icon icon-xxs icon-filled icon-filled-brand icon-circle fa fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-xxs icon-filled icon-filled-brand icon-circle fa fa-google-plus" href="#"></a></li>
                                <li><a class="icon icon-xxs icon-filled icon-filled-brand icon-circle fa fa-twitter" href="#"></a></li>
                                <li><a class="icon icon-xxs icon-filled icon-filled-brand icon-circle fa fa-pinterest-p" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="block offset-top-2 text-right">
                    <h4>شغل های مرتبط</h4>
                    <table class="table-job-listing table-responsive">
                        <tr>
                            <td class="table-job-listing-main">
                                <!-- Company Minimal-->
                                <article class="company-minimal">
                                    <figure class="company-minimal-figure"><img class="company-minimal-image" src="images/company-2-38x49.png" alt="" width="38" height="49"/>
                                    </figure>
                                    <div class="company-minimal-main">
                                        <h5 class="company-minimal-name"><a href="job-details.html">Marketing Director</a></h5>
                                        <p>UpBook, Saint-Etienne, France</p>
                                    </div>
                                </article>
                            </td>
                            <td class="table-job-listing-badge"><span class="badge badge-secondary">Part Time</span></td>
                        </tr>
                        <tr>
                            <td class="table-job-listing-main">
                                <!-- Company Minimal-->
                                <article class="company-minimal">
                                    <figure class="company-minimal-figure"><img class="company-minimal-image" src="images/company-3-46x52.png" alt="" width="46" height="52"/>
                                    </figure>
                                    <div class="company-minimal-main">
                                        <h5 class="company-minimal-name"><a href="job-details.html">Front End Developer</a></h5>
                                        <p>MediaLab, Derry, United Kingdom</p>
                                    </div>
                                </article>
                            </td>
                            <td class="table-job-listing-badge"><span class="badge badge-tertiary">Freelance</span></td>
                        </tr>
                        <tr>
                            <td class="table-job-listing-main">
                                <!-- Company Minimal-->
                                <article class="company-minimal">
                                    <figure class="company-minimal-figure"><img class="company-minimal-image" src="images/company-4-50x49.png" alt="" width="50" height="49"/>
                                    </figure>
                                    <div class="company-minimal-main">
                                        <h5 class="company-minimal-name"><a href="job-details.html">Website Designer</a></h5>
                                        <p>Creator, Los Angeles, CA, USA</p>
                                    </div>
                                </article>
                            </td>
                            <td class="table-job-listing-badge"><span class="badge">Full Time</span></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-4 text-right">
                <div class="row row-30 row-lg-50">
                    <div class="col-md-6 col-lg-12">
                        <!-- RD Mailform-->
                        <form class="rd-mailform form-corporate form-spacing-small form-corporate_sm " data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                            <h4>Contact StarArt</h4>
                            <div class="form-wrap ">
                                <label class="form-label" for="contact-name">Your Name</label>
                                <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                            </div>
                            <div class="form-wrap">
                                <label class="form-label" for="contact-email">E-mail</label>
                                <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                            </div>
                            <div class="form-wrap">
                                <label class="form-label" for="contact-phone">Phone</label>
                                <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                            </div>
                            <div class="form-wrap">
                                <label class="form-label" for="contact-message">Message</label>
                                <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                            </div>
                            <div class="form-wrap">
                                <button class="button button-block button-primary" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;landscape.natural.landcover&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;labels.text&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#000000&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.attraction&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#bde1c8&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#eceded&quot;},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.government&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#bde1c8&quot;}]},{&quot;featureType&quot;:&quot;poi.school&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f3f3f4&quot;}]},{&quot;featureType&quot;:&quot;poi.sports_complex&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#46bcec&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]">
                            <div class="google-map"></div>
                            <ul class="google-map-markers">
                                <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
                            </ul>
                        </div>
                        <article class="message-bubble">
                            <div class="message-bubble-inner">
                                <div class="icon mdi mdi-map-marker icon-sm text-primary"></div>
                                <div class="message-bubble-main">
                                    <p>116 Holland Park, Holland Park, W11 4UA</p>
                                    <p>Email:&nbsp;<a href="mailto:#">info@demolink.org</a></p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


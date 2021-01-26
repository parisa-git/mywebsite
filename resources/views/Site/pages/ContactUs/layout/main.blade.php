@include('Site.pages.ContactUs.layout.nav')
<section class="section section-md">
    <div class="container">
        <div class="row row-50">
            <div class="col-md-10 col-lg-8 col-xl-12 text-right">
                <h4>اطلاعات تماس</h4>
                <p style="letter-spacing: .05em;">
                    شما می توانید به هر روشی که مناسب شما باشد با ما تماس بگیرید
                    . ما 24/7 از طریق نمابر ، ایمیل یا تلفن در دسترس هستیم.
                    همچنین می توانید شخصاً به دفتر ما مراجعه کنید.</p>
            </div>
        </div>
        <div class="layout-bordered">
            @foreach($aboutus as $item)
            <div class="layout-bordered-item">
                <div class="layout-bordered-item-inner">
                    <div class="unit unit-spacing-sm flex-md-column">
                        <div class="unit-left icon icon-xl fl-bigmug-line-cellphone55 text-primary text-right"></div>
                        <div class="unit-body text-right">

                            <p class="heading-7">  تلفن :
                               </p>
                            <ul class="list-0">
                                <li>
                                    <dl class="list-terms-inline">
                                        <dt>تلفن</dt>
                                        <dd><a href="tel:#"> {{$item->about_phone}}</a></dd>
                                    </dl>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="layout-bordered-item">
                <div class="layout-bordered-item-inner">
                    <div class="unit unit-spacing-sm flex-md-column">
                        <div class="unit-left icon icon-xl fl-bigmug-line-big104 text-primary text-right"></div>
                        <div class="unit-body text-right">
                            <p class="heading-7">      آدرس ما :
                               </p>
                            <ul class="list-0">
                                <li> {{$item->about_address}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layout-bordered-item">
                <div class="layout-bordered-item-inner">
                    <div class="unit unit-spacing-sm flex-md-column">
                        <div class="unit-left icon icon-xlg fl-bigmug-line-email64 text-primary text-right"></div>
                        <div class="unit-body text-right">
                            <p class="heading-7">ایمیل :</p>
                            <ul class="list-0">
                                <li><a href="mailto:#">Office@demolink.org</a></li>
                                <li><a href="mailto:#">Support@demolink.org</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 text-right">
                <h4>با ما در تماس باشید</h4>
                <p>برای تماس مستقیم با ما از فرم تماس زیر استفاده کنید.</p>
                <!-- RD Mailform-->
                <div class="col-sm-12">
                    @if(session('message'))
                        <div class="alert alert-success col-sm-12 float-right" >
                            <li>{{Session::get('message')}}</li>
                        </div>
                    @endif
                    @if(session ('error'))
                        <div class="alert alert-danger col-sm-12 float-right" >
                            <li>{{Session::get('error')}}</li>
                        </div>
                    @endif
                    @if(session ('warning'))
                        <div class="alert alert-warning col-sm-12 float-right">
                            <li>{{Session::get('warning')}}</li>
                        </div>
                    @endif     @if(session ('success'))
                        <div class="alert alert-success col-sm-12 float-right">
                            <li>{{Session::get('success')}}</li>
                        </div>
                    @endif
                </div>
                <form class="rd-mailform form-lg direction" data-form-output="form-output-global"
                      data-form-type="contact" method="post" action="{{url('sendemail/send')}}">
                    @csrf
                    <div class="row row-30">
                        <div class="col-lg-4">
                            <div class="form-wrap">
                                <label class="form-label text-right" for="contact-name">نام خود را وارد کنید </label>
                                <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-wrap">
                                <label class="form-label text-right" for="contact-email">ایمیل</label>
                                <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-wrap">
                                <label class="form-label text-right" for="contact-phone">موبایل</label>
                                <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap">
                                <label class="form-label text-right" for="contact-message">پیام شما</label>
                                <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <input class="button button-primary" type="submit" name="send" value="ارسال">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

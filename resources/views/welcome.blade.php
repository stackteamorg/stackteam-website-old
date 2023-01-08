<x-app-layout>
    <x-hero/>
    <x-service-box/>
   <x-slide-team/>
    <div class="app-screen-preview-two pt-60 pb-60 mb-60">
        <div class="container">
            <div class="title-style-eleven text-center mb-70 md-mb-20">
                <h2> {{ __('index.content.team') }} </h2>
            </div>
        </div>

        <div class="app-preview-slider-two">
            <div class="item">
                <div class="img-holder"><img src="{{ asset('assets/images/teams/1.jpg') }}" alt=""><p class="text-center">CTO</p></div>
            </div>
            <div class="item">
                <div class="img-holder"><img src="{{ asset('assets/images/teams/12.jpg') }}" alt=""><p class="text-center">CEO</p></div>
            </div>
            <div class="item">
                <div class="img-holder"><img src="{{ asset('assets/images/teams/3.jpg') }}" alt=""><p class="text-center">Co-Founder</p></div>
            </div>
            <div class="item">
                <div class="img-holder"><img src="{{ asset('assets/images/teams/4.jpg') }}" alt=""><p class="text-center">Business Intellignece</p></div>
            </div>
            <div class="item">
                <div class="img-holder"><img src="{{ asset('assets/images/teams/5.jpg') }}" alt=""><p class="text-center">Product Owner</p></div>
            </div>
            <div class="item">
                <div class="img-holder"><img src="{{ asset('assets/images/teams/6.jpg') }}" alt=""><p class="text-center">Back-End Developer</p></div>
            </div>
            <div class="item">
                <div class="img-holder"><img src="{{ asset('assets/images/teams/14.jpg') }}" alt=""><p class="text-center">Back-End Developer</p></div>
            </div>
            <div class="item">
                <div class="img-holder"><img src="{{ asset('assets/images/teams/13.jpg') }}" alt=""><p class="text-center">Back-End Developer</p></div>
            </div>
        </div> <!-- /.app-preview-slider-two -->
    </div>
    
    <x-comment-box/>

    <div class="fancy-feature-ten mt-100 mb-100 md-mt-70" id="feature">
        <div class="bg-wrapper">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-12 text-center" data-aos="fade-left" data-aos-duration="1200">
                        <div class="title-style-six">
                            <h2> {{ __('index.perks.title') }} </h2>
                        </div> <!-- /.title-style-six -->
                    </div>
                </div>
                <div class="row justify-content-center mt-35 md-mt-20">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                        <div class="block-style-fifteen mt-40">
                            <div class="icon d-flex align-items-center justify-content-center" style="background:#102a43;"><img src="{{ asset('assets/images/icon/money.png') }}" alt=""></div>
                            <h3>  {{ __('index.perks.itemone.title') }} </h3>
                            <p> {{ __('index.perks.itemone.text') }} </p>
                            <!--a href="index(product-landing).html#" class="mt-30"><img src="{{ asset('assets/images/icon/69.svg') }}" alt=""></a-->
                        </div> <!-- /.block-style-fifteen -->
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                        <div class="block-style-fifteen mt-40">
                            <div class="icon d-flex align-items-center justify-content-center" style="background:#102a43;"><img src="{{ asset('assets/images/icon/deadline.png') }}" alt=""></div>
                            <h3> {{ __('index.perks.itemtwo.title') }} </h3>
                            <p> {{ __('index.perks.itemtwo.text') }} </p>
                            <!--a href="index(product-landing).html#" class="mt-30"><img src="{{ asset('assets/images/icon/69.svg') }}" alt=""></a-->
                        </div> <!-- /.block-style-fifteen -->
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="block-style-fifteen mt-40">
                            <div class="icon d-flex align-items-center justify-content-center" style="background:#102a43;"><img src="{{ asset('assets/images/icon/healthcare.png') }}" alt=""></div>
                            <h3> {{ __('index.perks.itemthree.title') }} </h3>
                            <p> {{ __('index.perks.itemthree.text') }} </p>
                            <!--a href="index(product-landing).html#" class="mt-30"><img src="{{ asset('assets/images/icon/69.svg') }}" alt=""></a-->
                        </div> <!-- /.block-style-fifteen -->
                    </div>
                </div>
                <div class="row justify-content-center mt-35 md-mt-20">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                        <div class="block-style-fifteen mt-40">
                            <div class="icon d-flex align-items-center justify-content-center" style="background:#102a43;"><img src="{{ asset('assets/images/icon/gift.png') }}" alt=""></div>
                            <h3> {{ __('index.perks.itemfour.title') }} </h3>
                            <p> {{ __('index.perks.itemfour.text') }} </p>
                            <!--a href="index(product-landing).html#" class="mt-30"><img src="{{ asset('assets/images/icon/69.svg') }}" alt=""></a-->
                        </div> <!-- /.block-style-fifteen -->
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                        <div class="block-style-fifteen mt-40">
                            <div class="icon d-flex align-items-center justify-content-center" style="background:#102a43;"><img src="{{ asset('assets/images/icon/presentation.png') }}" alt=""></div>
                            <h3> {{ __('index.perks.itemfive.title') }} </h3>
                            <p> {{ __('index.perks.itemfive.text') }} </p>
                            <!--a href="index(product-landing).html#" class="mt-30"><img src="{{ asset('assets/images/icon/69.svg') }}" alt=""></a-->
                        </div> <!-- /.block-style-fifteen -->
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div><a class="service-a" href="mailto:info@stackteam.org"> {{  __('index.content.join') }} ... </a></div>
                    </div>
                </div>
            </div>
        </div> <!-- /.bg-wrapper -->
    </div>
</x-app-layout>
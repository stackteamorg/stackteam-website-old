    {{--<div class="hero-banner-two hero-home padding-hero bg-fbf3ec">

        <!--Start Shape -->
        <img src="{{ asset('assets/images/shape/102.svg') }}" alt="" class="shapes shape-six">
        <img src="{{ asset('assets/images/shape/103.svg') }}" alt="" class="shapes shape-seven">
        <!-- End Shape -->

        <div class="container">
            <div class="row align-items-start justify-content-between">
                <div class="col-lg-6 order-lg-last">
                    <div class="illustration-holder">
                        <img src="{{ asset('assets/images/assets/ils-01.png') }}" alt="" class="illustration_01">
                        <img src="{{ asset('assets/images/hero/' .app()->getLocale(). '/comment01.png') }} " alt="" class="shapes shape-one">
                        <img src="{{ asset('assets/images/hero/' .app()->getLocale(). '/comment02.png') }}" alt="" class="shapes shape-two">
                        <img src="{{ asset('assets/images/hero/' . app()->getLocale() . '/comment03.png') }}" alt="" class="shapes shape-three">
                    </div>
                </div>

                <div class="col-xl-5 col-lg-6 order-lg-first">
                    <div class="hero-text-wrapper md-mt-50">
                        <h1>
                            <span>
                                 {{ __('index.content.nameofcompany') }}
                                <img src="{{ asset('assets/images/shape/line-shape-1.svg') }}" alt="" class="cs-screen">
                            </span>
                            <small>  {{ __('index.hero.title') }} </small>
                        </h1>
                        <p class="sub-text"> {{ __('index.hero.text') }} </p>
                        <p class="">{!! __('index.hero.subtext') !!}</p>
                        <form>
                            <input type="tel" name="phonenumber" class="phonenumber" id="phonenumber-top" placeholder="+98 912 018 6223">
                            <button pos="top" class="send"> {{ __('index.hero.valuesubmit') }} </button>
                        </form>
                        <ul class="list-item d-flex mt-20">--}}

                           {{-- <li> {{ __('index.hero.item1') }} </li>
                            <li> {{ __('index.hero.item2') }} </li>--}}
                            {{-- <li> {{ __('index.hero.item2') }} </li>
                        </ul>
                    </div> <!-- /.hero-text-wrapper -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
        <x-service-box/>
    </div>
    --}}

    {{--<div class="hero-banner-ten padding-hero hero-home">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-11 col-md-8 m-auto">
                    <h1 class="hero-heading text-white">{{ __('index.content.nameofcompany') }}</h1>
                    <p class="hero-sub-heading text-white">{{ __('index.content.nameofcompany') }}{{ __('index.hero.title') }}</p>
                </div>
            </div>
            <div class="d-sm-flex align-items-center justify-content-center button-group">
                <a href="{{ route('team' ,['lang' => app()->getLocale()]) }}" class="d-flex align-items-center find-button">
                <iconify-icon icon="material-symbols:person-search-rounded" class="icon"></iconify-icon>
                    <div>
                        <strong> {{  __('index.content.findteam') }} </strong>
                    </div>
                </a>
            </div>
        </div>
    </div>--}}

    <div class="hero-banner-seven lg-container pt-150 pb-150">
        <div class="container">
            <div class="illustration-container pt-100">
                <img src="{{ asset('assets/images/hero/stackteam-hero.png') }}" alt="">
            </div>
            <div class="row">
                <div class="col-lg-6 mr-auto">
                    <h1 class="hero-heading"> {{ __('index.content.nameofcompany') }} </h1>
                    <p class="hero-sub-heading"> {{ __('index.content.nameofcompany') }}{{ __('index.hero.title') }} <br> {{ __('index.hero.text') }} </p>
                    <form>
                        <input type="tel" name="phonenumber" class="phonenumber" id="phonenumber-top" placeholder="+98 912 018 6223">
                        <button pos="top" id="send"> {{ __('index.hero.valuesubmit') }} </button>
                    </form>
                    <p class="term-text" style="color:#102a43;"> <img src="{{ asset('assets/images/icon/support.svg') }}" class="float-right mt-1 ml-2"/> {!! __('index.hero.subtext') !!} </p>
                </div>
            </div>
        </div>
    </div>


    <!-- about -->
    <div class="fancy-text-block-two pt-150 pb-170 md-pt-100 md-pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="100">
                    <div class="title-style-one md-mb-40">
                        <h2 class="heading">
                            {{ __('about.hero.title') }}
                            <span>{{ __('index.content.nameofcompany') }}<img src="{{ asset('assets/images/shape/line-shape-11-svg.svg') }}" alt=""></span>
                        </h2>
                        <p class="sub-heading">{!! __('about.hero.text') !!}</p>
                        <div class="mt-2 text-center">
                            <a class="service-a" href="{{ route('about',['lang' => app()->getLocale()]) }}"> {{ __('menu.navigation.about') }} ...</a>
                        </div>
                    </div> <!-- /.title-style-one -->
                </div>
                <div class="col-lg-6 col-md-8 m-auto" data-aos="fade-right" data-aos-duration="1200">
                    <img src="{{ asset('assets/images/teams/10.jpg') }}" alt="" class="fancy_img_media">
                </div>
            </div>
        </div>
    </div>
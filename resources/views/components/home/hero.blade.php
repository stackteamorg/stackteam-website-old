<div class="hero-banner-seven lg-container pt-150 pb-150">
    <div class="container">
        <div class="row">   
            <div class="col-lg-6">
                <h1 class="hero-heading"> {{ __('index.content.nameofcompany') }} </h1>
                <p class="hero-sub-heading"> {{ __('index.content.nameofcompany') }}{{ __('index.hero.title') }} <br> {{ __('index.hero.text') }} </p>
                <form>
                    <input type="tel" name="phonenumber" class="phonenumber" id="phonenumber-top" placeholder="+98 912 018 6223">
                    <button pos="top" class="send"> {{ __('index.hero.valuesubmit') }} </button>
                </form>
                <p class="term-text term-icon"> <img src="{{ asset('assets/images/icon/support.svg') }}"/> {!! __('index.hero.subtext') !!} </p>
            </div>
            <div class="col-lg-6 pr-4">
                <img src="{{ asset('assets/images/hero/stackteam-hero.png') }}" alt="">
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
                </div>
            </div>
            <div class="col-lg-6 col-md-8 m-auto" data-aos="fade-right" data-aos-duration="1200">
                <img src="{{ asset('assets/images/teams/10.jpg') }}" alt="" class="fancy_img_media">
            </div>
        </div>
    </div>
</div>
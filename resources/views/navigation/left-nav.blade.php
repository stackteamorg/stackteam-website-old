{{--<nav id="mega-menu-holder" class="navbar navbar-expand-lg">
    <div  class="container nav-container">
        <button class="navbar-toggler">
            <span></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <div class="d-lg-flex justify-content-between align-items-center">
                <ul class="navbar-nav">
                    <x-menu :text="__('menu.navigation.home')" :link="route('index',['lang' => app()->getLocale()])"/>
                    <x-menu :text="__('menu.navigation.service')" :link="route('service',['lang' => app()->getLocale()])"/>
                    <x-menu :text="__('menu.navigation.coworker')" :link="route('process',['lang' => app()->getLocale()])"/>
                    <x-menu :text="__('menu.navigation.faq')" :link="route('faq',['lang' => app()->getLocale()])"/>
                    <x-menu :text="__('menu.navigation.about')" :link="route('about',['lang' => app()->getLocale()])"/>
                </ul>

                <ul class="right-widget">
                    <li class="d-sm-flex">
                        <ul class="language-button-group d-flex align-items-center justify-content-center">
                            @if (app()->getLocale() != 'en')
                            <li>
                                <a href="{{ route(Request::route()->getName(),['lang' => 'en']) }}" class="en-lang">English</a>
                            </li>
                            @endif
                            @if (app()->getLocale() != 'fa')
                            <li>
                                <a href="{{ route(Request::route()->getName(),['lang' => 'fa']) }}" class="fa-lang">فارسی</a>
                            </li>
                            @endif
                            @if (app()->getLocale() != 'ar')
                            <li>
                                <a href="{{ route(Request::route()->getName(),['lang' => 'ar']) }}" class="ar-lang">العربية</a>
                            </li>
                            @endif
                        </ul>

                        <ul class="user-login-button d-flex align-items-center justify-content-center">
                            <li>
                                <a href="{{ route('brief',['lang' => app()->getLocale()]) }}" class="theme-btn-five">{{ __('menu.navigation.becoworker') }} </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div> 
</nav>--}}

<nav id="mega-menu-holder" class="navbar navbar-expand-lg">
    <div  class="container nav-container">
        <button class="navbar-toggler">
            <span></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <div class="d-lg-flex justify-content-between align-items-center">
                <ul class="navbar-nav">
                    <x-menu :text="__('menu.navigation.home')" :link="route('index',['lang' => app()->getLocale()])" :submenu="0"/>
                    <x-menu :text="__('menu.navigation.service')" :link="route('service',['lang' => app()->getLocale()])" :submenu="0"/>
                    {{--<li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="index-doc.html#" data-toggle="dropdown"> {{ __('menu.navigation.ecosystem') }} </a>
                        <div class="dropdown-menu">
                            <ul class="mega-menu d-flex justify-content-center">
                            <li>
                                    <a href="index-event.html" class="dropdown-item img-box">
                                        <img src="{{ asset('assets/images/ecosystem/icon/mag.jpg') }}" class="img-submenu" alt="">
                                        <span class="font-rubik text-submenu"> {{ __('menu.navigation.stackmag') }} </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-event.html" class="dropdown-item img-box">
                                        <img src="{{ asset('assets/images/ecosystem/icon/ac.jpg') }}" class="img-submenu" alt="">
                                        <span class="font-rubik text-submenu"> {{ __('menu.navigation.stackacademy') }} </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-event.html" class="dropdown-item img-box">
                                        <img src="{{ asset('assets/images/ecosystem/icon/job.jpg') }}" class="img-submenu" alt="">
                                        <span class="font-rubik text-submenu"> {{ __('menu.navigation.stackjob') }} </span>
                                    </a>
                                </li>
                            </ul> 
                        </div> <!-- /.dropdown-menu -->
                    </li>--}}
                    <x-menu :text="__('menu.navigation.coworker')" :link="route('process',['lang' => app()->getLocale()])" :submenu="0"/>
                    <x-menu :text="__('menu.navigation.about')" :link="route('about',['lang' => app()->getLocale()])" :submenu="0"/>
                    <x-menu :text="__('menu.navigation.contact')" :link="route('contact',['lang' => app()->getLocale()])" :submenu="0"/>
                </ul>

                <ul class="right-widget user-login-button d-flex align-items-center justify-content-center">
                    @if (app()->getLocale() != 'en')   
                    <li>
                        <a href="{{ route(Request::route()->getName(),['lang' => 'en']) }}" class="signIn-action d-flex align-items-center mx-1">
                            <iconify-icon icon="twemoji:flag-united-kingdom" class="flag-icon"></iconify-icon>
                            <span class="text-secondary">English</span>
                        </a>
                    </li>
                    @endif
                    @if (app()->getLocale() != 'fa')
                    <li>
                        <a href="{{ route(Request::route()->getName(),['lang' => 'fa']) }}" class="signIn-action d-flex align-items-center mx-1">
                            <iconify-icon icon="twemoji:flag-iran" class="flag-icon"></iconify-icon>
                            <span class="text-secondary">فارسی</span>
                        </a>
                    </li>
                    @endif
                    @if (app()->getLocale() != 'ar')
                    <li>
                        <a href="{{ route(Request::route()->getName(),['lang' => 'ar']) }}" class="signIn-action d-flex align-items-center mx-1">
                            <iconify-icon icon="twemoji:flag-united-arab-emirates" class="flag-icon"></iconify-icon>
                            <span class="text-secondary">العربية</span>
                        </a>
                    </li>
                    @endif
                    <li>
                        <a href="{{ route('brief',['lang' => app()->getLocale()]) }}" class="signUp-action d-flex align-items-center">
                            <span> {{ __('menu.navigation.becoworker') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div> 
</nav>
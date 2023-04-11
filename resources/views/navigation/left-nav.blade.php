{{--<nav id="mega-menu-holder" class="navbar navbar-expand-lg">
    <div  class="container nav-container">
        <button class="navbar-toggler">
            <span></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <div class="d-lg-flex justify-content-between align-items-center">
                <ul class="navbar-nav">
                    <x-menu :text="__('menu.navigation.home')" :link="route('index',['lang' => app()->getLocale()])" :submenu="0"/>
                    <x-menu :text="__('menu.navigation.service')" :link="route('service',['lang' => app()->getLocale()])" :submenu="0"/>
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
</nav>--}}

<nav class="navbar navbar-expand-lg bg-body-tertiary px-4">
    <div class="container-fluid nav-border py-4">
        <!--logo-->
        @include('navigation.right-nav')
        <button class="navbar-toggler humber-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="material-symbols-outlined">
            menu
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <x-menu :text="__('menu.navigation.home')" :link="route('index',['lang' => app()->getLocale()])"/>
            <x-menu :text="__('menu.navigation.service')" :link="route('service',['lang' => app()->getLocale()])"/>
            <x-menu :text="__('menu.navigation.coworker')" :link="route('process',['lang' => app()->getLocale()])"/>
            <x-menu :text="__('menu.navigation.about')" :link="route('about',['lang' => app()->getLocale()])"/>
            <x-menu :text="__('menu.navigation.contact')" :link="route('contact',['lang' => app()->getLocale()])"/>
        </ul>
        <div class="d-flex">
            <div class="me-4 pt-3">
            @if (app()->getLocale() != 'en') 
                <a class="language" href=" {{ route(Request::route()->getName(),['lang' => 'en']) }} ">En</a>
            @endif
            @if (app()->getLocale() != 'fa')
                <a class="language" href=" {{ route(Request::route()->getName(),['lang' => 'fa']) }} ">Fa</a>
            @endif
            @if (app()->getLocale() != 'ar')
                <a class="language" href=" {{ route(Request::route()->getName(),['lang' => 'ar']) }} ">AR</a>
            @endif
            <a class="btn btn-blue" href=" {{ route('brief',['lang' => app()->getLocale()]) }} "> {{ __('menu.navigation.becoworker') }} </a>
        </div>
        </div>
    </div>
</nav>
<nav id="mega-menu-holder" class="navbar navbar-expand-lg">
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
                    <x-menu :text="__('menu.navigation.about')" :link="route('about',['lang' => app()->getLocale()])"/>
                    <x-menu :text="__('menu.navigation.contact')" :link="route('contact',['lang' => app()->getLocale()])"/>
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
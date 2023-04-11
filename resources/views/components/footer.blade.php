{{--<footer class="theme-footer-four">
    <div class="top-footer">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-xl-4 col-lg-3 col-12 footer-about-widget">
                    <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="stackteam"></a></div>
                </div> <!-- /.about-widget -->
                <div class="col-lg-3 col-md-4 footer-list">
                    <h5 class="footer-title font-slab"> {{ __('footer.content.menu') }} </h5>
                    <ul>
                        <li><a href="{{ route('index',['lang' => app()->getLocale()]) }}">{{ __('menu.navigation.home') }}</a></li>
                        <li><a href="{{ route('service',['lang' => app()->getLocale()]) }}">{{ __('menu.navigation.service') }}</a></li>
                        <li><a href="{{ route('process',['lang' => app()->getLocale()]) }}">{{ __('menu.navigation.coworker') }}</a></li>
                        <li><a href="{{ route('faq',['lang' => app()->getLocale()]) }}">{{ __('menu.navigation.faq') }}</a></li>
                        <li><a href="{{ route('about',['lang' => app()->getLocale()]) }}">{{ __('menu.navigation.about') }}</a></li>
                        <li><a href="{{ route('contact',['lang' => app()->getLocale()]) }}">{{ __('menu.navigation.contact') }}</a></li>
                    </ul>
                </div> <!-- /.footer-list -->
                <div class="col-lg-3 col-md-4 footer-list">
                    <h5 class="footer-title font-slab"> {{ __('footer.content.contact') }} </h5>
                    <ul class="font-rubik mt-10">
                        <li><a href="{{  $email->link }}">{{ $email->data }}</a></li>
                        <li><a href="{{  $phone->link }}" class="dir-ltr">{!!  $phone->data !!}</a></li>
                    </ul>
                    <ul class="d-flex justify-content-left">
                        <x-social-list />
                    </ul>
                </div> <!-- /.footer-list -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div>
    
    <div class="container">
        <div class="bottom-footer-content">
            <p> {{ __('footer.content.copyright') }} </p>
        </div> <!-- /.bottom-footer -->
    </div>
</footer> <!-- /.theme-footer-four -->--}}
<footer class="container-fluid footer">
    <div class="row">
        <div class="col-md-3 col-sm-6 offset-md-1">
            <p>
                <h4> {{ __('footer.content.menu') }} </h4>
                <ul class="footer-menu">
                    <li><a href="{{ route('index',['lang' => app()->getLocale()]) }}" class="footer-link"><span class="material-symbols-outlined">home</span> {{ __('menu.navigation.home') }} </a></li>
                    <li><a href="{{ route('service',['lang' => app()->getLocale()]) }}" class="footer-link"><span class="material-symbols-outlined">assignment</span> {{ __('menu.navigation.service') }}</a> </li>
                    <li><a href="{{ route('process',['lang' => app()->getLocale()]) }}" class="footer-link"><span class="material-symbols-outlined">ballot</span> {{ __('menu.navigation.coworker') }} </a></li>
                    <li><a href="{{ route('faq',['lang' => app()->getLocale()]) }}" class="footer-link"><span class="material-symbols-outlined">question_mark </span> {{ __('menu.navigation.faq') }} </a></li>
                    <li><a href="{{ route('about',['lang' => app()->getLocale()]) }}" class="footer-link"><span class="material-symbols-outlined">groups</span> {{ __('menu.navigation.about') }} </a></li>
                    <li><a href="{{ route('contact',['lang' => app()->getLocale()]) }}" class="footer-link"><span class="material-symbols-outlined">phone_in_talk</span> {{ __('menu.navigation.contact') }} </a></li>
                </ul>
            </p>
        </div>
        <div class="col-md-3 col-sm-6">
            <p>
                <h4> {{ __('footer.content.contact') }} </h4>
                <ul class="footer-menu">
                    <li><a href="{{  $email->link }}" class="footer-link"><span class="material-symbols-outlined">mail</span> {{ $email->data }} </a></li>
                    <li><a href="{{  $phone->link }}" class="dir-ltr footer-link"> {!!  $phone->data !!} </a></li>
                </ul>
            </p>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="footer-logo text-center">
                <img src="{{ asset('assets/images/logo/stackteam.png') }}" class="img-fluid" alt="">
                <h4> {{ __('footer.content.copyright') }} </h4>
            </div>
            <div class="footer-social d-flex justify-content-center">
                <x-social-list />
            </div>
        </div>
    </div>
    
</footer>
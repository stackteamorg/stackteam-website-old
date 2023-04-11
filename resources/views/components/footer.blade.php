<footer class="theme-footer-four">
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
</footer> <!-- /.theme-footer-four -->
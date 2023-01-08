<x-app-layout>
<div class="fancy-hero-three">
            <div class="shapes shape-one"></div>
            <div class="shapes shape-two"></div>
            <div class="shapes shape-three"></div>
            <div class="shapes shape-four"></div>
            <div class="shapes shape-five"></div>
            <div class="shapes shape-six"></div>
            <div class="bg-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 m-auto">
                            <h1 class="heading"> {{ $service->title }} </h1>
                            <p class="sub-heading"> {{ $service->subtitle }} </p>
                        </div>
                    </div>
                </div>
            </div> <!-- /.bg-wrapper -->
        </div> <!-- /.fancy-hero-three -->
        


        <!-- 
        =============================================
            Fancy Text block Eleven
        ============================================== 
        -->
        <div class="fancy-text-block-eleven mt-200 md-mt-100 mb-100 md-mb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-last">
                        <div class="text-wrapper pt-0">
                            <p> {{ $service->subtext }} </p>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="video-box">
                            <img src="{{ asset('assets/images/gallery/'. $service->name .'.png') }}" alt="">
                            <a data-fancybox="" href="#" class="fancybox video-button d-flex align-items-center justify-content-center"><img src="{{ asset('assets/images/icon/170.svg') }}" alt=""></a>
                        </div> <!-- /.video-box -->
                    </div>
                </div>
                <div class="row mt-50">
                    <div class="col-md-6">
                        <h4 class="font-gordita pt-40"> {{ __('service.detail.target') }} </h4>
                        <ul class="list-item-one pt-2">
                            @foreach ($service->goals as $goal)
                            <li class="term-icon"><img src="{{ asset('assets/images/icon/177.svg') }}" />{{ $goal->text }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="font-gordita pt-40"> {{ __('service.detail.advantage') }} </h4>
                        <p class="pt-2">{!! $service->advantage_text !!}</p>
                    </div>
                </div>
            </div>
        </div> <!-- /.fancy-text-block-eleven -->
</x-app-layout>
{{--<div class="fancy-feature-eight mt-160 md-mt-100">
    <div class="container">
        <div class="bg-wrapper">
            <div class="row justify-content-center">
                @foreach ($services as $service)
                @php 
					//print_r($service->toArray());die();
					$slug = str_replace([' ','(',')','،',','],['-','','','',''],$service->title);
					$url = route('service.detail',['lang' => app()->getLocale(),'id' => $service->id,'title' => $slug]);
				@endphp
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                    <div class="block-style-thirteen" onclick="location.href='{{ $url }}';">
                        <div class="icon"><img src="{{ asset('assets/images/service/icon/' . $service->name . '.png') }}" alt=""></div>
                        <div class="title font-rubik">{{ $service->title }}</div>
                        <p>{{ $service->subtitle }}</p>
                    </div> <!-- /.block-style-thirteen -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div> <!-- /.fancy-feature-eight -->--}}

<div class="fancy-feature-twentySeven lg-container  pt-60 pb-60 mb-60" id="product">
    <div class="container">
        <div class="title-style-twelve text-center mb-70 md-mb-20">
            <div class="row">
                <div class="col-xl-10 col-lg-11 m-auto">
                    <h2>
                        <span> {{ __('menu.navigation.service') }} <!--img src="{{ asset('assets/images/shape/line-shape-13.svg') }}" alt=""--></span>
                    </h2>
                    <!--p class="mt-40 md-mt-30">Together with useful notifications, collaboration insights, and improvement tips – it’s time for your documents to start working for you.</p-->
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($services as $service)
                @php 
					//print_r($service->toArray());die();
					$slug = str_replace([' ','(',')','،',','],['-','','','',''],$service->title);
					$url = route('service.detail',['lang' => app()->getLocale(),'id' => $service->id,'title' => $slug]);
				@endphp
                <div class="col-lg-4 col-sm-6" data-aos="fade-up">
                    <div class="block-style-twentySeven" onclick="location.href='{{ $url }}';">
                        <div class="icon d-flex align-items-end justify-content-center"><img src="{{ asset('assets/images/service/icon/' . $service->name . '.svg') }}" alt="" class="icon-service"></div>
                        <h4 class="font-gordita"> {{ $service->title }} </h4>
                        <p> {{ $service->subtitle }} </p>
                    </div> <!-- /.block-style-twentySeven -->
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12 mt-60 text-center">
                <a class="service-a" href="{{ route('service' ,['lang' => app()->getLocale()]) }}"> {{  __('index.content.more') }} ... </a>
            </div>
        </div>
    </div>
</div> 
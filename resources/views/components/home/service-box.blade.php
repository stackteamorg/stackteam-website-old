<section class="container-fluid bg-darkblue">
    <div class="row">
        <div class="col-md-12">
            <div class="service-title text-center">
                <h3> {{ __('menu.navigation.service') }} </h3>
                <p> {{ __('service.hero.text') }} </p>
            </div>
            <div class="service-part">
                @php
                    $delay=200;
                @endphp
                @foreach ($services as $service)
                @php 
					//print_r($service->toArray());die();
					$slug = str_replace([' ','(',')','،',','],['-','','','',''],$service->title);
					$url = route('service.detail',['lang' => app()->getLocale(),'id' => $service->id,'title' => $slug]);
                    $delay+=200;
				@endphp
                <div class="service-box p-2" data-aos="fade-up" data-aos-delay="{{ $delay }}" >
                    <a href="{{ $url }}" class="service-link">
                        <div class="service-icon"><img src="{{ asset('assets/images/service/icon/' . $service->name . '.png') }}" alt=""/></div> 
                        <b> {{ $service->title }} </b>
                        <p class="mt-40"> {{ $service->subtitle }} </p>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="text-center more-box">
                <a class="btn btn-more" href=" {{ route('service' ,['lang' => app()->getLocale()]) }} "> {{  __('index.content.more') }} ... </a>
            </div>
        </div>
    </div>
</section>
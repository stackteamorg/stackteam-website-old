<div class="fancy-feature-thirtyTwo pt-110 pb-160 md-pt-90 md-pb-100">
	<div class="container">
		<div class="row align-items-center justify-content-center">

			@foreach ($services as $service)
				@php 
					//print_r($service->toArray());die();
					$slug = str_replace([' ','(',')','،',','],['-','','','',''],$service->title);
					$url = route('service.detail',['lang' => app()->getLocale(),'id' => $service->id,'title' => $slug]);
				@endphp
			<x-service-item :title="$service->subtitle"
					:text="$service->title"
					:img="'assets/images/service/icon/' . $service->name . '.png'"
					:link="$url"
					delay="100" />
			@endforeach
			<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
				<div class="block-style-twentyTwo" onclick="location.href='{{ route('team',['lang' => app()->getLocale()]) }}';">
					<div class="icon d-flex align-items-center justify-content-center bg-darkblue"><img src="{{ asset('assets/images/service/icon/group.png') }}" alt=""></div>
					<h4> {{ __('service.team.subtitle') }} </h4>
					<p> {{ __('service.team.title') }} </p>
				</div> <!-- /.block-style-twentyTwo -->
			</div>
		</div>
	</div>
</div> <!-- /.fancy-feature-thirtyTwo -->
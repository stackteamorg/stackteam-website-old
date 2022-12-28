<x-app-layout>
	<div class="pricing-section-three-inner-page hero-team">
		<img src="images/shape/124.svg" alt="" class="shapes shape-one">
		<img src="images/shape/125.svg" alt="" class="shapes shape-two">
		<div class="container">
			<div class="title-style-five text-center mb-50 md-mb-30">
				<div class="row">
					<div class="col-lg-9 m-auto">
						<h2>  {{ __('index.content.team') }} </h2>
					</div>
				</div>
			</div>
			<div class="pricing-table-area-three">
				<div class="row justify-content-center">
					<x-list-team/>
				</div>
				<div class="row">
					<div class="col-md-12 mt-60 text-center">
						<a class="service-a" href="{{ route('brief' ,['lang' => app()->getLocale()]) }}"> {{ __('menu.navigation.becoworker') }} </a>
					</div>
				</div>
			</div> <!-- /.pricing-table-area-three -->
		</div> <!-- ./container -->
	</div>
</x-app-layout>
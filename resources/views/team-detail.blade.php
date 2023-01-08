<x-app-layout>
	<div class="fancy-hero-five hero-team">
		<div class="bg-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 m-auto text-center">
						<h6 class="page-title text-white"> {{ __('index.content.team') }} </h6>
						<h1 class="heading text-white"> {{ $team->title }} </h1>
					</div>
				</div>
			</div>
		</div> <!-- /.bg-wrapper -->
	</div> <!-- /.fancy-hero-five -->

	<div class="blog-page-white-bg blog-v4">
		<div class="container">
			<div class="wrapper">
				<div class="post-meta" data-aos="fade-up" data-aos-duration="1200">
					<div class="post">
						{!! $team->text !!}

					</div>
				</div> <!-- /.post-meta -->
			</div> <!-- /.wrapper -->
		</div>
	</div> <!-- /.blog-page-white-bg -->
</x-app-layout>
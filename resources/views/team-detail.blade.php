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
						<h1 class="heading"> {{ __('index.content.team') }} </h1>
						<p class="sub-heading"> {{ $team->title }} </p>
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
				<div class="col-lg-7 order-lg-last">
					<div class="text-wrapper pt-0">
						<p> {!! $team->text !!} </p>
					</div>
				</div>
				<div class="col-lg-5 order-lg-first">
					<div class="video-box">
						<img src="{{ asset ('assets/images/skills/' . $team->img . '.jpg') }}" alt="">
						<a data-fancybox="" href="#" class="fancybox d-flex align-items-center justify-content-center"><img src="{{ asset('assets/images/icon/170.svg') }}" alt=""></a>
					</div> <!-- /.video-box -->
				</div>
			</div>
			<div class="row mt-50">
				<div class="col-md-6">
					<h4 class="font-gordita pt-40"> مسئولیت هایی که تیم بک اند بر عهده دارند:</h4>
					<p> {!! $team->responsibility !!} </p>
				</div>
				<div class="col-md-6">
					<h4 class="font-gordita pt-40"> حداقل الزامات که برنامه نویس های استک تیم دارند:  </h4>
					<p> {!! $team->requirements !!} </p>
				</div>
			</div>
		</div>
	</div> <!-- /.fancy-text-block-eleven -->
</x-app-layout>
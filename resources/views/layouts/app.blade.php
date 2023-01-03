<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		@include('layouts.head')	
	</head>

	<body>
		<div class="main-page-wrapper p0">
			<!-- ===================================================
				Loading Transition
			==================================================== -->
			@include ("layouts.loading")

            <!-- Start Menu Section -->
			{{--<div class="theme-main-menu sticky-menu theme-menu-two">
				<div class="d-flex align-items-center justify-content-center">
					<!--logo-->
					@include('navigation.right-nav')
					<!--menu-->
					@include('navigation.left-nav')					
				</div>
			</div>--}}
			<div class="theme-main-menu sticky-menu theme-menu-three">
				<div class="d-flex align-items-center justify-content-center">
					<!--logo-->
					@include('navigation.right-nav')
					<!--menu-->
					@include('navigation.left-nav')					
				</div>
			</div>
			<!-- End Menu Section -->
			{{$slot}}
			
			<x-conversation/>

			<!-- Start Footer Section -->
			<x-footer />
			<!-- End Footer Section -->
			
			<!-- Scroll Top Button -->
			<button class="scroll-top">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>

			<!-- Alarm Box Start -->
				<div class="message"></div>
			<!-- End -->

			<!-- Whatsapp Icon Start -->
			<a href="https://api.whatsapp.com/send?phone=989102716223&text=سلام. من درخواست همکاری و مشاوره دارم" target="_blank" class="whatsapp-icon">
				<div>
					<i class="fa fa-whatsapp" id="whatsapp-call" aria-hidden="true"></i>
				</div>
			</a>
			<!-- End -->


		<!-- Optional JavaScript  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="{{ secure_secure_asset('assets/vendor/jquery.min.js') }}"></script>
		<!-- Popper js -->
		<script src="{{ secure_asset('assets/vendor/popper.js/popper.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ secure_asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	    <!-- menu  -->
		<script src="{{ secure_asset('assets/vendor/mega-menu/assets/js/custom.js') }}"></script>
		<!-- AOS js -->
		<script src="{{ secure_asset('assets/vendor/aos-next/dist/aos.js') }}"></script>
		<!-- js count to -->
		<script src="{{ secure_asset('assets/vendor/jquery.appear.js') }}"></script>
		<script src="{{ secure_asset('assets/vendor/jquery.countTo.js') }}"></script>
		<!-- Slick Slider -->
		<script src="{{ secure_asset('assets/vendor/slick/slick.min.js') }}"></script>

		<!-- MixIt Up -->
		<script src="{{ secure_asset('assets/vendor/mixitup-3/mixitup.min.js') }}"></script>

		<script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>

		<!-- Theme js -->
		<script src="{{ secure_asset('assets/js/theme.js') }}"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
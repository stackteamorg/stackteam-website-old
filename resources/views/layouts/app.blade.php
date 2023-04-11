<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		@include('layouts.head')	
	</head>

	<body>
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
			{{--<div class="theme-main-menu sticky-menu theme-menu-three">
				<div class="d-flex align-items-center justify-content-center">
					<!--logo-->
					@include('navigation.right-nav')
					<!--menu-->
					@include('navigation.left-nav')					
				</div>
			</div>--}}
			<!--menu-->
			@include('navigation.left-nav')		
			<!-- End Menu Section -->
			{{$slot}}
			
			{{--<x-conversation/>--}}

			<!-- Start Footer Section -->
			<x-footer />
			<!-- End Footer Section -->
			
			<!-- Scroll Top Button -->
			{{--<button class="scroll-top">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			--}}
			<!-- Alarm Box Start -->
				<div class="message"></div> </div>
			<!-- End -->
			
			<!-- Whatsapp Icon Start -->
			<a href="https://api.whatsapp.com/send?phone=989102716223&text=سلام. من درخواست همکاری و مشاوره دارم" target="_blank">
				<div class="whatsapp-icon">
					<img src="{{ asset('assets/images/icon/whatsapp.svg') }}" alt="">
				</div>
			</a>
			<!-- End -->


		<!-- Optional JavaScript  -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    		<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
		<script src="{{ asset('assets/js/aos.js') }}"></script>
		<script>
			AOS.init({
				easing: 'ease-in-out-sine'
			});
		</script>
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
		$('.send').click(function (e){
			e.preventDefault();
			var phonenumber = $("#phonenumber-top").val();
			console.log(phonenumber);
			$.ajax({
			url:"/api/consultation/store",
			data: { 'phone_number' : phonenumber },
			method: "POST",
			success: function(data){
				$('.message').html(data.result);
			}
			});
		});
		});
		</script>
	</body>
</html>
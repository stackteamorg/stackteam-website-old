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


			<!-- 
			=============================================
				Sign In
			============================================== 
			-->
			<div class="user-data-page clearfix d-lg-flex">
				<div class="illustration-wrapper d-flex align-items-center justify-content-between flex-column">
					<h3 class="font-rubik"> {{ __('brief.content.title1') }} <br> {{ __('brief.content.title2') }} </h3>
					<div class="illustration-holder">
						<img src="{{ asset('assets/images/assets/ils_08.svg') }}" alt="" class="illustration">
						<img src="{{ asset('assets/images/assets/ils_08.1.svg') }}" alt="" class="shapes shape-one">
						<img src="{{ asset('assets/images/assets/ils_08.2.svg') }}" alt="" class="shapes shape-two">
					</div>
				</div> <!-- /.illustration-wrapper -->

				<div class="form-wrapper">
					<div class="d-flex justify-content-between">
						<div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo/'.app()->getLocale().'/logo.png') }}" alt=""></a></div>
						<a href="{{ route('index',['lang' => app()->getLocale()]) }}" class="font-rubik go-back-button">{{ __('menu.navigation.home') }}</a>
					</div>
					
					@if (isset($success)) 
						@if ($success)
							<div class="alert alert-success">{{ __('brief.alert.success') }}</div>
						@else
							<div class="alert alert-danger">{{ __('brief.alert.error.message') }}</div>
						@endif
					@else
					<form action="{{ route('brief',['lang' => app()->getLocale()]) }}" method="POST" class="user-data-form mt-80 md-mt-40">
						@csrf
						<h2> {{ __('brief.form.title1') }} <br> {{ __('brief.form.title2') }} </h2>
						<p class="header-info pt-30 pb-50"> {{ __('brief.form.subtitle') }} <a href="{{ route('about',['lang' => app()->getLocale()]) }}"> {{ __('brief.form.linksubtitle') }} </a></p>

						<div class="row">
							<div class="col-12">
								<div class="input-group-meta mb-80 sm-mb-70">
									<label>{{ __('brief.form.fullname') }}</label>
									<input value="{{ old('fullname') }}" type="text" name="fullname" placeholder="{{ __('brief.form.placeholder.fullname') }}">
									
									@error('fullname')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>

							</div>
                            <div class="col-12">
								<div class="input-group-meta mb-80 sm-mb-70">
									<label>{{ __('brief.form.phonenumber') }}</label>
									<input type="tel" value="{{ old('phone_number') }}" name="phone_number" placeholder="{{ __('brief.form.placeholder.phonenumber') }}">
									
									@error('phone_number')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
							</div>
                            <div class="col-12">
								<div class="input-group-meta mb-80 sm-mb-70">
									<label>{{ __('brief.form.detail') }}</label>
									<textarea name="detail" class="textarea-request" rows="3" placeholder="{{ __('brief.form.placeholder.detail') }}">{{ old('detail') }}</textarea>
															
									@error('detail')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror</div>
							</div>
							<!--div class="col-12">
								<div class="agreement-checkbox d-flex justify-content-between align-items-center">
									<div>
										<input type="checkbox" id="remember">
										<label for="remember">Keep me logged in</label>
									</div>
									<a href="login.html#">Forget Password?</a>
								</div--> <!-- /.agreement-checkbox -->
							<!--/div-->
							<div class="col-12">
								<!--button class="theme-btn-one mt-50 mb-50">ثبت</button-->
								<input class="theme-btn-one mt-50 mb-50" type="submit" value=" {{ __('brief.form.valuebutton') }} "/>
							</div>
							<div class="col-12">
								<p class="text-center font-rubik copyright-text"> {{ __('footer.content.copyright') }} </p>
							</div>
						</div>
					</form>
					@endif
				</div> <!-- /.form-wrapper -->
			</div> <!-- /.user-data-page -->
			
			


			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="{{ secure_asset('assets/vendor/jquery.min.js') }}"></script>
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

		<!-- MixIt Up -->
		<script src="{{ secure_asset('assets/vendor/mixitup-3/mixitup.min.js') }}"></script>


		<!-- Theme js -->
		<script src="{{ secure_asset('assets/js/theme.js') }}"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
<x-app-layout>
	<div class="container">
		<div class="row py-4">
			<div class="col-md-6">
				<img src="{{ asset('assets/images/assets/brief.jpg') }}" class="img-fluid" alt="">
			</div>
			<div class="col-md-6">
				@if (isset($success)) 
					@if ($success)
						<div class="alert alert-success">{{ __('brief.alert.success') }}</div>
					@else
						<div class="alert alert-danger">{{ __('brief.alert.error.message') }}</div>
					@endif
				@else
				<form action="{{ route('brief',['lang' => app()->getLocale()]) }}" method="POST">
					@csrf
					<h2 class="mt-2"> {{ __('brief.form.title1') }} <br> {{ __('brief.form.title2') }} </h2>
					<p class="my-2"> {{ __('brief.form.subtitle') }} <a href="{{ route('about',['lang' => app()->getLocale()]) }}"> {{ __('brief.form.linksubtitle') }} </a></p>
					<div class="form-group my-4">
						<label for="exampleInputEmail1"> {{ __('brief.form.fullname') }} </label>
						<input value="{{ old('fullname') }}" type="text" name="fullname" class="form-control brief-input" placeholder="{{ __('brief.form.placeholder.fullname') }}">
						@error('fullname')
						<small class="form-text text-danger">{{ $message }}</small>
						@enderror
					</div>
					<div class="form-group my-4">
						<label for="exampleInputEmail1"> {{ __('brief.form.phonenumber') }} </label>
						<input type="tel" value="{{ old('phone_number') }}" name="phone_number" placeholder="{{ __('brief.form.placeholder.phonenumber') }}" class="form-control brief-input">
						@error('phone_number')
						<small class="form-text text-danger">{{ $message }}</small>
						@enderror
					</div>
					<div class="form-group my-4">
						<label for="exampleFormControlTextarea1"> {{ __('brief.form.detail') }} </label>
						<textarea ame="detail" class="form-control brief-input" rows="4"  placeholder="{{ __('brief.form.placeholder.detail') }}"></textarea>
						@error('detail')
						<small class="form-text text-danger">{{ $message }}</small>
						@enderror
					</div>
					<div class="text-center more-box my-4">
						<input class="btn btn-blue" type="submit" value=" {{ __('brief.form.valuebutton') }} "/>
					</div>
				</form>
				@endif
			</div>
		</div>
	</div>
</x-app-layout>
<x-app-layout>
<div class="terms_and_policy padding-hero">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<ul class="nav nav-tabs">
					@foreach($faqs as $navigation)
					@php 
						$slug = str_replace(' ','-',$navigation->title);
						$url = route('faq.answer',['lang' => app()->getLocale(),'id' => $navigation->id,'title' => $slug]);
					@endphp
					<li class="nav-item">
						<a class="nav-link active" href="{{  $url }}">{{ $navigation->title }}</a>
					</li>
					@endforeach
				</ul>
			</div>

			<div class="col-lg-8">
				<!-- Tab panes -->
				<div class="tab-content">
					<div id="opt1" class="tab-pane fade active show">
						<h2 class="font-gilroy-bold">{{ $faq->title }}</h2>
						<div class="update-date">{{ $faq->updated_at }}</div>
						{!! $faq->text !!}
					</div>
				</div> <!-- /.tab-content -->
			</div>
		</div>
	</div>
</div>
</x-app-layout>
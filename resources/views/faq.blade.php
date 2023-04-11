<x-app-layout>
	<div class="container my-4">
		<div class="row py-4">
			<div class="col-md-4">
				<ul class="nav nav-tabs bg-blue py-4 px-2">
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

			<div class="col-md-8">
				<!-- Tab panes -->
				<div class="tab-content">
					<div id="opt1" class="tab-pane fade active show">
						<h2 class="mb-4">{{ $faq->title }}</h2>
						<div class="badge badge-secondary my-3">{{ $faq->updated_at }}</div>
						{!! $faq->text !!}
					</div>
				</div> <!-- /.tab-content -->
			</div>
		</div>
	</div>
</x-app-layout>
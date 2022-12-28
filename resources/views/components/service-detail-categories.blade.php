<div class="category-list">
    <h4 class="font-gordita"> {{ __('service.category.title') }} </h4>
    <ul>
        @foreach ($services as $service)
            @php
                $slug = str_replace([' ','(',')','،',','],['-','','','',''],$service->title);
                $url = route('service.detail',['lang' => app()->getLocale(),'id' => $service->id,'title' => $slug]);
            @endphp
        <li>
            <a href="{{ $url }}">
                {{ $service->title }}
            </a>
        </li>
        @endforeach
    </ul>
</div> <!-- /.category-list -->
@foreach ($services as $service)
    @php 
        //print_r($service->toArray());die();
        $slug = str_replace([' ','(',')','،',','],['-','','','',''],$service->title);
        $url = route('service.detail',['lang' => app()->getLocale(),'id' => $service->id,'title' => $slug]);
    @endphp
    <li>
        <a href="{{ $url }}" class="dropdown-item img-box">
            <img src="{{ asset('assets/images/service/icon/' . $service->name . '.jpg') }}" class="img-submenu" alt="">
            <span class="font-rubik text-submenu"> {{ $service->title }} </span>
        </a>
    </li>
@endforeach
    <li>
        <a href="{{ route('team' ,['lang' => app()->getLocale()]) }}" class="dropdown-item img-box">
            <img src="{{ asset('assets/images/service/icon/team.jpg') }}" class="img-submenu" alt="">
            <span class="font-rubik text-submenu"> تشکیل تیم </span>
        </a>
    </li>
@if($submenu=="0")
    <li class="nav-item position-static">
        <a class="nav-link" href="{{ $link }}">{{ $text }}</a>
    </li>
@else($submenu=="1")
    <li class="nav-item dropdown position-static">
        <a class="nav-link dropdown-toggle" href="{{ $link }}" data-toggle="dropdown"> {{ $text }} </a>
        <div class="dropdown-menu">
            <ul class="mega-menu d-flex justify-content-center">
                <x-sub-service/>
            </ul> 
        </div> <!-- /.dropdown-menu -->
    </li>
@endif
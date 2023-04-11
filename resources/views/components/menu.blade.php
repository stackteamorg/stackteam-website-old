@if( $routeName != $link )
<li class="nav-item mx-2"> <a class="nav-link" href="{{ $link }}">{{ $text }} {{$routname}}</a> </li>
@else
<li class="nav-item mx-2"> <a class="nav-link active" href="{{ $link }}"><b>{{ $text }} {{$routname}}</b></a> </li>
@endif
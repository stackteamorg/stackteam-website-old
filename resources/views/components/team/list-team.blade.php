    @foreach ($teams as $team)
        @php 
            //print_r($service->toArray());die();
            $slug = str_replace([' ','(',')','،',','],['-','','','',''],$team->name);
            $url = route('team.detail',['lang' => app()->getLocale(),'id' => $team->id,'title' => $slug]);
        @endphp
    <div class="col-lg-4 col-md-6">
        <div class="pr-table-wrapper skew-right">
            
            <img src="{{ asset ('assets/images/skills/' . $team->img . '.jpg') }}"/>
            <div class="pack-name pc1 font-slab mt-50"><span> {{ $team->title }} </span></div>
            <img src="{{ asset('assets/images/shape/114.svg') }}" alt="" class="line">
            <!--ul>
                <li>Angular Js</li>
                <li>React Js</li>
                <li>Vue Js</li>
                <li>Flutter</li>
            </ul-->
            <a href="{{$url}}" class="subscribe-btn font-rubik"> {{ __('index.content.view') }} </a>
        </div> <!-- /.pr-table-wrapper -->
    </div>
    @endforeach
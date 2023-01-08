<div class="fancy-feature-thirtyFive position-relative lg-container mt-120 md-mt-120 mb-225" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="block-style-thirtySix">
                        <div class="title-style-fourteen pb-100">
                            <h2> {{ __('index.skill.title') }} </h2>
                        </div>
                        <ul class="slider-arrows d-flex justify-content-center justify-content-lg-end pt-25 md-pt-10 md-pb-30">
                            <li class="prev_case2 ripple-btn slick-arrow" style=""><i class="flaticon-right-arrow"></i></li>
                            <li class="next_case2 ripple-btn slick-arrow" style=""><i class="flaticon-right-arrow"></i></li>
                        </ul>
                    </div> <!-- /.block-style-thirtySix -->
                </div>
            </div>
        </div>
        <div class="slider-wrapper">
            <div class="portfolio_slider_two">
                @foreach($team as $team)
                @php 
                    //print_r($service->toArray());die();
                    $slug = str_replace([' ','(',')','،',','],['-','','','',''],$team->name);
                    $url = route('team.detail',['lang' => app()->getLocale(),'id' => $team->id,'title' => $slug]);
                @endphp
                <div class="item">
                    <div class="card-block">
                        <img src="{{ asset('assets/images/skills/' . $team->img . '.png') }}" alt="" class="w-100">
                        <div class="hover tran3s d-flex align-items-center justify-content-center flex-column">
                            <a href="{{$url}}" class="view tran3s"> {{ __('index.content.view') }} </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> <!-- /.portfolio_slider_two -->
        </div> <!-- /.slider-wrapper -->
    </div>
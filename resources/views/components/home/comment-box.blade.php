<div class="client-feedback-slider-one md-pb-80 pb-100"><!-- remove pb-170-->
    <div class="shapes-holder">
        <img src="{{ asset('assets/images/shape/39.svg') }}" alt="">
        <img src="{{ asset('assets/images/media/img_21.png') }}" alt="" class="cp-img-one">
        <img src="{{ asset('assets/images/media/img_22.png') }}" alt="" class="cp-img-two">
        <img src="{{ asset('assets/images/media/img_23.png') }}" alt="" class="cp-img-three">
        <img src="{{ asset('assets/images/media/img_24.png') }}" alt="" class="cp-img-four">
        <div class="title-style-two">
            <h2> {{ __('index.comment.titlep1') }} <br> {{ __('index.comment.titlep2') }} <br> {{ __('index.comment.titlep3') }} </h2>
        </div>
    </div> <!-- /.shapes-holder -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ml-auto">
                <div class="feedback-meta">
                    <div class="watermark font-gilroy-bold"> Feedback </div>
                    <img src="{{ asset('assets/images/icon/30-svg.svg') }}" alt="" class="icon">
                    <div class="clientSliderOne clientSliderOne-rtl">
                        @foreach ($feedbacks as $feedback)
                        <x-feedback
                            :brand="$feedback" />
                        @endforeach
                    </div>
                    <ul class="d-flex slider-arrow mt-40">
                        <li class="prev_c"><i class="flaticon-right-arrow"></i></li>
                        <li class="next_c"><i class="flaticon-right-arrow"></i></li>
                    </ul>
                </div> <!-- /.feedback-meta -->
            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.client-feedback-slider-one -->
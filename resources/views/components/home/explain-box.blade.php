@if($show=='true')        
    <div class="block-style-six pb-150 md-pb-70">
        <div class="row">
            <div class="col-lg-5 order-lg-last" data-aos="fade-right" data-aos-duration="1200">
                <div class="text-details pt-35 md-pb-50">
                    <img src="{{ asset('assets/images/icon/27.svg') }}" alt="" class="icon">
                    <h3 class="title font-gilroy-bold">{{ $title }}</h3>
                    <p class="text-meta">{!! $explain !!}</p>
                    <div class="quote-wrapper">
                        <div class="quote-icon d-flex align-items-center justify-content-center"><img src="{{ asset('assets/images/icon/28.svg') }}" alt=""></div>
                        <blockquote>“{{ $quotation }}”</blockquote>
                    </div> <!-- /.quote-wrapper -->
                </div> <!-- /.text-details -->
            </div>
            <div class="col-lg-7 col-md-9 m-auto order-lg-first" data-aos="fade-left" data-aos-duration="1200">
                <div class="illustration-holder illustration-one">
                    <img src="{{ asset($image) }}" alt="" class="ml-auto">
                    <div class="shapes shape-one"></div>
                    <div class="shapes shape-two"></div>
                    <div class="shapes shape-three"></div>
                    <div class="shapes shape-four"></div>
                    <div class="shapes shape-five"></div>
                    <img src="{{ asset('assets/images/shape/35.svg') }}" alt="" class="shapes shape-six">
                    <img src="{{ asset('assets/images/shape/36.svg') }}" alt="" class="shapes shape-seven">
                </div>
            </div>
        </div>
    </div> <!-- /.block-style-six -->
    @else
    <div class="block-style-six pb-150 md-pb-70">
        <div class="row">
            <div class="col-lg-5" data-aos="fade-left" data-aos-duration="1200">
                <div class="text-details pt-35 md-pb-50">
                <img src="{{ asset('assets/images/icon/29.svg') }}" alt="" class="icon">
                    <h3 class="title font-gilroy-bold">{{ $title }}</h3>
                    <p class="text-meta">{!! $explain !!}</p>
                    <div class="quote-wrapper">
                        <div class="quote-icon d-flex align-items-center justify-content-center"><img src="{{ asset('assets/images/icon/28.svg') }}" alt=""></div>
                        <blockquote>“{{ $quotation }}”</blockquote>
                    </div> <!-- /.quote-wrapper -->
                </div> <!-- /.text-details -->
            </div>

            <div class="col-lg-7 col-md-9 m-auto" data-aos="fade-right" data-aos-duration="1200">
                <div class="illustration-holder illustration-two">
                    <img src="{{ asset($image) }}" alt="" class="mr-auto">
                    <div class="shapes shape-one"></div>
                    <div class="shapes shape-two"></div>
                    <div class="shapes shape-three"></div>
                    <div class="shapes shape-four"></div>
                    <img src="{{ asset('assets/images/shape/40.svg') }}" alt="" class="shapes shape-five">
                    <img src="{{ asset('assets/images/shape/41.svg') }}" alt="" class="shapes shape-six">
                </div>
            </div>
        </div>
    </div> <!-- /.block-style-six -->
    @endif
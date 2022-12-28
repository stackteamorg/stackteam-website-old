<div class="fancy-text-block-eight pt-150 pb-200 md-pt-100 md-pb-150">
    <div class="container">
        <div class="title-style-two text-center mb-150 md-mb-40">
            <div class="row">
                <div class="col-xl-8 col-lg-9 col-md-10 m-auto">
                    <p>{{ __('index.introduce.small') }}</p>
                    <h2> {{ __('index.introduce.title') }}
                        <span> {{ __('index.content.nameofcompany') }} <img src="{{ asset('assets/images/shape/line-shape-2.svg') }}" alt=""></span>
                    </h2>
                </div>
            </div>
        </div>

        <x-explain-box
            name="how-work-stackteam"
            image="{{ asset('assets/images/assets/feature-img-09.png') }}"
            show="true"/>

        <x-explain-box
            name="stackteam-technical-service"
            image="{{ asset('assets/images/assets/feature-img-10.png') }}"
            show="false"/>


        <x-explain-box
            name="advantage-work-with-stackteam"
            image="{{ asset('assets/images/assets/feature-img-11.png') }}"
            show="true"/>

        
    </div>
</div> <!-- /.fancy-text-block-eight -->

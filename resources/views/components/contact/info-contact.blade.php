{{--<div class="contact-us-light pt-140 pb-200 md-pt-90 md-pb-80">
    <div class="bubble-one"></div>
    <div class="bubble-two"></div>
    <div class="bubble-three"></div>
    <div class="bubble-four"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6">
                <div class="address-info">
                    <div class="icon"><img src="{{ asset('assets/images/icon/15.png') }}" alt=""></div>
                    <div class="title"> {{ __('contact.info.location') }} </div>
                    <p class="font-rubik">{{ $address->data }}</p>
                </div> <!-- /.address-info -->
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="address-info">
                    <div class="icon"><img src="{{ asset('assets/images/icon/10.png') }}" alt=""></div>
                    <div class="title"> {{ __('contact.info.contact') }} </div>
                    <a href="{{ $phone->link }}">
                        <p class="font-rubik dir-ltr"> {{  $phone->data }} </p>
                    </a>
                </div> <!-- /.address-info -->
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="address-info">
                    <div class="icon"><img src="{{ asset('assets/images/icon/17.png') }}" alt=""></div>
                    <div class="title"> {{ __('contact.info.socialmedia.small') }} </div>
                    <ul class="d-flex justify-content-center">
                        <x-social-list />
                    </ul>
                </div> <!-- /.address-info -->
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="address-info">
                    <div class="icon"><img src="{{ asset('assets/images/icon/16.png') }}" alt=""></div>
                    <div class="title"> {{ __('contact.info.whatsapp') }} </div>
                    <p class="font-rubik">
                         <a href="{{ $whatsapp->link }}" target="_blank" class="dir-ltr">
                            {{  $whatsapp->data }} 
                        </a>
                    </p>
                </div> <!-- /.address-info -->
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="address-info">
                    <div class="icon"><img src="{{ asset('assets/images/icon/45.png') }}" alt=""></div>
                    <div class="title"> {{ __('contact.info.email') }} </div>
                    <a href="{{ $email->link }}">
                        <p class="font-rubik dir-ltr"> {{  $email->data }} </p>
                    </a>
                </div> <!-- /.address-info -->
            </div>
            <div class="col-md-4 col-sm-6"></div>
        </div>
    </div>
</div> <!-- /.contact-us-light -->--}}

<div class="contact-style-two">
    <div class="container">
        <div class="contact-info-wrapper">
            <div class="row justify-content-center mb-100">
                <div class="col-lg-4 col-sm-6 d-lg-flex">
                    <div class="address-info">
                        <div class="icon d-flex align-items-end"><img src="{{ asset('assets/images/icon/location.png') }}" alt=""></div>
                        <div class="title"> {{ __('contact.info.location') }} </div>
                        <p class="font-rubik"> {{ $address->data }} </p>
                    </div> <!-- /.address-info -->
                </div>
                <div class="col-lg-4 col-sm-6 d-lg-flex">
                    <div class="address-info">
                        <div class="icon d-flex align-items-end"><img src="{{ asset('assets/images/icon/phone.png') }}" alt=""></div>
                        <div class="title"> {{ __('contact.info.contact') }} </div>
                        <p class="font-rubik"> {!!  $phone->data !!} </p>
                    </div> <!-- /.address-info -->
                </div>
                <div class="col-lg-4 col-sm-6 d-lg-flex">
                    <div class="address-info">
                        <div class="icon d-flex align-items-end"><img src="{{ asset('assets/images/icon/share.png') }}" alt=""></div>
                        <div class="title"> {{ __('contact.info.socialmedia.small') }} </div>
                        <ul class="d-flex justify-content-center">
                            <x-social-list />
                        </ul>
                    </div> <!-- /.address-info -->
                </div>
            </div>
            <img src="images/shape/64.svg" alt="" class="shapes shape-one">
        </div> <!-- /.contact-info-wrapper -->

    </div>
</div>
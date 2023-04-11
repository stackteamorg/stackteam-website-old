{{--<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200">
    <div class="block-style-thirtyFive text-center mt-30">
        <div class="icon d-flex align-items-center justify-content-center bg-darkblue" ><img src="{{ asset($image) }}" alt=""></div>
        <h4> {{ $title }} </h4>
        <p> {{ $text }} </p>
    </div> <!-- /.block-style-thirtyFive -->
</div>--}}
<div class="col-md-3 col-sm-4 py-3">
    <div class="text-center">
        <img src="{{ asset($image) }}" class="process-icon" alt="">
    </div>
    <div class="text-center pt-4">
        {{ $title }}
    </div>
</div>
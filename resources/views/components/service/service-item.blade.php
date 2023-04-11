{{--<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="{{ $delay }}">
    <div class="block-style-twentyTwo" onclick="location.href='{{ $link }}';">
        <div class="icon d-flex align-items-center justify-content-center bg-darkblue"><img src="{{ asset($img) }} " alt=""></div>
        <h4> {{ $title }} </h4>
        <p> {{ $text }} </p>
    </div> <!-- /.block-style-twentyTwo -->
</div>--}}

<div class="col-md-4 col-sm-6">
    
    <div class="card mb-3 service-item-card" onclick="location.href='{{ $link }}';">
        <div class="row g-0">
            <div class="col-md-4 text-center">
                <img src="{{ asset($img) }}" class="img-fluid service-item" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title pt-4 text-white text-center mb-4"> {{ $title }} </h4>
                    <p class="card-text text-secondary text-center"> {{ $text }} </p>
                </div>
            </div>
        </div>
    </div>

</div>
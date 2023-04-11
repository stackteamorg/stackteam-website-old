<!-- Hero Part -->
<section class="container-fluid">
    <div class="row">
        <div class="col-md-12 hero-home">
            <h1> {{ __('index.content.nameofcompany') }}{{ __('index.hero.title') }} </h1>
            <p> {{ __('index.hero.text') }} </p>
            <form class="hero-form">
                <div>
                    <div class="relative">
                        <input type="text" id="phonenumber-top" placeholder=" {{ __('index.hero.placeholderinput') }}">
                        <button class="send"> {{ __('index.hero.valuesubmit') }} </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End Hero Part -->

<!-- About Part -->
<section class="container-fluid">
   <div class="row about-section">
       <div class="col-md-6">
           <img src="{{ asset('assets/images/shape/line01.svg') }}" class="img-fluid" alt="">
           <div class="p-4">
               <h2 style="font-size:64px;"> {{ __('about.hero.title') }} {{ __('index.content.nameofcompany') }} </h2>
               <p>  {!! __('about.hero.text') !!}</p>
           </div>
       </div>
       <div class="col-md-6 text-left">
           <img src="{{ asset('assets/images/media/stackteam.png') }}" class="img-fluid img-aboutsection" alt="">
       </div>
   </div>
</section>
<!--  End About Part -->

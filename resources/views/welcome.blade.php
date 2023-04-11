<x-app-layout>
    <x-hero/>
    <x-service-box/>
    <section class="container team-part">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center"> {{ __('index.content.team') }} </h3>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-5">
                        <img src="{{ asset('assets/images/teams/homeily.png') }}" class="img-fluid" alt="...">
                      </div>
                      <div class="col-md-7">
                        <div class="card-body mt-4">
                          <h5 class="card-title pt-4"> {{__('about.members.homeyli')}} </h5>
                          <p class="card-text"> Co-Founder </p>
                          <!--p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p-->
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-5">
                        <img src="{{ asset('assets/images/teams/zoveydat.png') }}" class="img-fluid" alt="...">
                      </div>
                      <div class="col-md-7">
                        <div class="card-body mt-4">
                          <h5 class="card-title pt-4"> {{__('about.members.zoveydat')}} </h5>
                          <p class="card-text">  CEO </p>
                          <!--p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p-->
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-5">
                        <img src="{{ asset('assets/images/teams/bazadaran.png') }}" class="img-fluid" alt="...">
                      </div>
                      <div class="col-md-7">
                        <div class="card-body mt-4">
                          <h5 class="card-title pt-4"> {{__('about.members.bazadaran')}} </h5>
                          <p class="card-text">  CTO </p>
                          <!--p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p-->
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-5">
                        <img src="{{ asset('assets/images/teams/taheri.png') }}" class="img-fluid" alt="...">
                      </div>
                      <div class="col-md-7">
                        <div class="card-body mt-4">
                          <h5 class="card-title pt-4"> {{__('about.members.taheri')}} </h5>
                          <p class="card-text">  Business Intellignece </p>
                          <!--p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p-->
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</x-app-layout>
<x-app-layout>
    {{--<div class="d-flex align-items-center pt-150">
        <div class="coming-soon-content font-gordita">
            <img src="{{ asset('assets/images/shape/179.svg')}}" alt="" class="shapes shape-one">
            <img src="{{ asset('assets/images/shape/180.svg') }}" alt="" class="shapes shape-two">
            <img src="{{ asset('assets/images/shape/181.svg') }}" alt="" class="shapes shape-three">
            <img src="{{ asset('assets/images/shape/182.svg') }}" alt="" class="shapes shape-four">
            <img src="{{ asset('assets/images/shape/183.svg') }}" alt="" class="shapes shape-five">
            <img src="{{ asset('assets/images/shape/184.svg') }}" alt="" class="shapes shape-six">
            <img src="{{ asset('assets/images/shape/185.svg') }}" alt="" class="shapes shape-seven">
            <img src="{{ asset('assets/images/shape/186.svg') }}" alt="" class="shapes shape-eight">
            <img src="{{ asset('assets/images/shape/187.svg') }}" alt="" class="shapes shape-nine">
            <img src="{{ asset('assets/images/shape/188.svg') }}" alt="" class="shapes shape-ten">
        </div> <!-- /.coming-soon-content -->
    </div> <!-- /.full-height-layout -->
    
    <div class="service-details-one pt-150 md-pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 order-lg-last">
                    <div class="details-wrapper pr-xl-5">
                        <h2 class="font-gordita">{{ $service->subtitle }}</h2>
                        <p class="sub-heading font-gordita pt-30 pb-70 md-pb-40">{{ $service->subtext }}</p>
                        <img src="{{ asset('assets/images/gallery/'. $service->name .'.png') }}" alt="" class="img-meta w-100">
                        <p class="pt-40 pb-40">{!! $service->text !!}</p>
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="font-gordita pt-40"> {{ __('service.detail.target') }} </h4>
                                <ul class="list-item-one">
                                    @foreach ($service->goals as $goal)
                                    <li>{{ $goal->text }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4 class="font-gordita pt-40"> {{ __('service.detail.advantage') }} </h4>
                                <p>{!! $service->advantage_text !!}</p>
                            </div>
                        </div>
                        <!--h3 class="font-gordita pt-90 pb-60 md-pt-50">Any Questions find here.</h3>
                        <div id="accordion" class="accordion-style-three">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed">
                                    How does the free trial work?
                                    </button>
                                </h5>
                                </div>
                                <div id="collapseOne" class="collapse">
                                <div class="card-body">
                                    <p>It's free to use for your first five ticket sales. Once your sixth ticket purchase comes through we will start charging the standard PAYG rate. If you would like to move to Pre pay then head to "Billing" and "Buy ticket credits".</p>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed">
                                    How do you weigh different criteria in your process?
                                    </button>
                                </h5>
                                </div>
                                <div id="collapseTwo" class="collapse">
                                <div class="card-body">
                                    <p>That's right. We want to make Ticket Tailor as affordable as possible for event organisers of all sizes. You also have the option to pass on any ticketing costs to your customers through a booking fee. We always aim to be the best value on the market so please let us know if you think you can find a similar product for a lower price.</p>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed">
                                    What does First Round look for in an idea?
                                    </button>
                                </h5>
                                </div>
                                <div id="collapseThree" class="collapse">
                                <div class="card-body">
                                    <p>Yes, you can add any booking fee you like to the ticket price, which means all your fees are covered and you get to keep the entire face value of the ticket price. You're in total control.</p>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed">
                                    What do you look for in a founding team?
                                    </button>
                                </h5>
                                </div>
                                <div id="collapseFour" class="collapse">
                                <div class="card-body">
                                    <p>All the subscriptions of that plan will retain to stay unless we explicitly move them to any other plan. The deletion is best a "soft" delete that stops the plan from permitting newsubscriptions.</p>
                                </div>
                                </div>
                            </div>
                        </div-->
                    </div> <!-- /.details-wrapper -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 order-lg-first">
                    <div class="sidebar md-mt-100">
                        <x-service-detail-categories />
                        <div class="sidenote">
                            <p>متن آژمایشی  lineup major linup browser</p>
                            <span>مهندس مهدی همیلی بنیانگذار و مدیرعامل استک تیم</span>
                        </div>
                        <!--div class="share-option">
                            <h4 class="font-gordita">Share it. </h4>
                            <ul class="d-flex social-icon">
                                <li><a href="service-detailsV1.html#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="service-detailsV1.html#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="service-detailsV1.html#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="service-detailsV1.html#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            </ul>
                        </div-->
                    </div> <!-- /.sidebar -->
                </div>
            </div>
        </div>
    </div> <!-- /.service-details-one -->--}}
    <div class="fancy-hero-three">
				<div class="shapes shape-one"></div>
				<div class="shapes shape-two"></div>
				<div class="shapes shape-three"></div>
				<div class="shapes shape-four"></div>
				<div class="shapes shape-five"></div>
				<div class="shapes shape-six"></div>
				<div class="bg-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-xl-9 col-lg-10 m-auto">
								<h1 class="heading"> {{ $service->title }} </h1>
								<p class="sub-heading"> {{ $service->subtitle }} </p>
							</div>
						</div>
					</div>
				</div> <!-- /.bg-wrapper -->
			</div> <!-- /.fancy-hero-three -->
			


			<!-- 
			=============================================
				Fancy Text block Eleven
			============================================== 
			-->
			<div class="fancy-text-block-eleven mt-200 md-mt-100 mb-100 md-mb-100">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 order-lg-last">
							<div class="text-wrapper pt-0">
								{{--<div class="title-style-two mb-35 md-mb-20">
									<h2><span>Service we offer is  <img src="images/shape/line-shape-5.svg" alt=""></span>
										specifically designed to meet your needs.
									</h2>
								</div> <!-- /.title-style-two -->--}}
								<p> {{ $service->subtext }} </p>
							</div>
						</div>
						<div class="col-lg-6 order-lg-first">
							<div class="video-box">
								<img src="{{ asset('assets/images/gallery/'. $service->name .'.png') }}" alt="">
								<a data-fancybox="" href="#" class="fancybox video-button d-flex align-items-center justify-content-center"><img src="{{ asset('assets/images/icon/170.svg') }}" alt=""></a>
							</div> <!-- /.video-box -->
						</div>
					</div>
                    <div class="row mt-50">
                        <div class="col-md-6">
                            <h4 class="font-gordita pt-40"> {{ __('service.detail.target') }} </h4>
                            <ul class="list-item-one pt-2">
                                @foreach ($service->goals as $goal)
                                <li class="term-icon"><img src="{{ asset('assets/images/icon/177.svg') }}" />{{ $goal->text }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4 class="font-gordita pt-40"> {{ __('service.detail.advantage') }} </h4>
                            <p class="pt-2">{!! $service->advantage_text !!}</p>
                        </div>
                    </div>
				</div>

				{{--<div class="mt-70">
					<div class="container">
						<div class="row">
							<div class="col-lg-4">
								<div class="block-style-thirtyThree pl-lg-5 mt-40">
									<div class="icon"><img src="images/icon/171.svg" alt=""></div>
									<h3 class="title"><span>Daily Updates</span></h3>
									<!--p>Elit esse cillum dolore eu fugiat nulla pariatur lorem elit</p-->
								</div> <!-- /.block-style-thirtyThree -->
							</div>
							<div class="col-lg-4">
								<div class="block-style-thirtyThree pl-lg-5 mt-40">
									<div class="icon"><img src="images/icon/172.svg" alt=""></div>
									<h3 class="title"><span>Easu Cutomization</span></h3>
									<p>Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta.</p>
								</div> <!-- /.block-style-thirtyThree -->
							</div>
							<div class="col-lg-4">
								<div class="block-style-thirtyThree pr-lg-5 mt-40">
									<div class="icon"><img src="images/icon/173.svg" alt=""></div>
									<h3 class="title"><span>Fast Support</span></h3>
									<p>Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta.</p>
								</div> <!-- /.block-style-thirtyThree -->
							</div>
                        </div>
					</div>
				</div>--}}
			</div> <!-- /.fancy-text-block-eleven -->


</x-app-layout>
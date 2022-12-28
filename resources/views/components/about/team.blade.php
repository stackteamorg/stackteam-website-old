<div class="team-section-one pt-50 md-pt-50">
        <div class="container">
            <div class="title-style-one text-center">
                <h2> {{ __('index.content.team') }} </h2>
            </div> <!-- /.title-style-one -->

            <div class="controls mt-80 mb-100 md-mt-60 md-mb-60">
                <button type="button" class="control" data-filter="all">All</button>
                <button type="button" class="control" data-filter=".management"> Management</button>
                <button type="button" class="control" data-filter=".developer">Developer</button>
                <button type="button" class="control" data-filter=".investment">Investment</button>
                <!--button type="button" class="control" data-filter=".account">Account</button-->
            </div>

            <div class="mixitUp-container">
            <div class="mix management">
                    <div class="team-member">
                        <img src="{{ asset('assets/images/teams/3.JPG') }}" alt="">
                        <h4> {{ __('about.members.homeyli') }} </h4>
                        <strong>Co-Founder</strong>
                    </div> <!-- /.team-member -->
                </div> <!-- /.mix -->
                <div class="mix management">
                    <div class="team-member">
                        <img src="{{ asset('assets/images/teams/2.JPG') }}" alt="">
                        <h4> {{ __('about.members.zoveydat') }} </h4>
                        <strong>CEO</strong>
                    </div> <!-- /.team-member -->
                </div> <!-- /.mix -->
                <div class="mix management">
                    <div class="team-member">
                        <img src="{{ asset('assets/images/teams/1.JPG') }}" alt="">
                        <h4> {{ __('about.members.bazadaran') }} </h4>
                        <strong>CTO</strong>
                    </div> <!-- /.team-member -->
                </div> <!-- /.mix -->
                <div class="mix management">
                    <div class="team-member">
                        <img src="{{ asset('assets/images/teams/5.JPG') }}" alt="">
                        <h4> {{ __('about.members.zare') }} </h4>
                        <strong>Product Owner</strong>
                    </div> <!-- /.team-member -->
                </div> <!-- /.mix -->
                <div class="mix investment">
                    <div class="team-member">
                        <img src="{{ asset('assets/images/teams/4.JPG') }}" alt="">
                        <h4> {{ __('about.members.taheri') }} </h4>
                        <strong> Business Intellignece </strong>
                    </div> <!-- /.team-member -->
                </div> <!-- /.mix -->
                <div class="mix developer">
                    <div class="team-member">
                        <img src="{{ asset('assets/images/teams/7.JPG') }}" alt="">
                        <h4> {{ __('about.members.ilya') }} </h4>
                        <strong>‌Back-end Developer</strong>
                    </div> <!-- /.team-member -->
                </div> <!-- /.mix -->
                <div class="mix developer ">
                    <div class="team-member" onclick="location.href='team-single.html';">
                        <img src="{{ asset('assets/images/teams/8.JPG') }}" alt="">
                        <h4> {{ __('about.members.shikh') }} </h4>
                        <strong>‌Back-end Developer</strong>
                    </div> <!-- /.team-member -->
                </div> <!-- /.mix -->
                <div class="mix developer ">
                    <div class="team-member" onclick="location.href='team-single.html';">
                        <img src="{{ asset('assets/images/teams/6.JPG') }}" alt="">
                        <h4> {{ __('about.members.ghaouri') }}  </h4>
                        <strong>‌Back-end Developer</strong>
                    </div> <!-- /.team-member -->
                </div> <!-- /.mix -->
                <div class="gap"></div>
                <div class="gap"></div>
                <div class="gap"></div>
            </div> <!-- /.mixitUp-container -->
        </div>
    </div> <!-- /.team-section-one -->
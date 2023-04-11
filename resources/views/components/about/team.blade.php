<section class="container">
    <div class="row">
        <div class="col-md-12 py-4 text-center">
            <h3> {{ __('index.content.team') }} </h3>
        </div>
        <div class="col-md-12 d-flex justify-content-center">
        <div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <!--li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-All-tab" data-bs-toggle="pill" data-bs-target="#pills-All" type="button" role="tab" aria-controls="pills-All" aria-selected="true">All</button>
            </li-->
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-Management-tab" data-bs-toggle="pill" data-bs-target="#pills-Management" type="button" role="tab" aria-controls="pills-Management" aria-selected="true">Management</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-Developer-tab" data-bs-toggle="pill" data-bs-target="#pills-Developer" type="button" role="tab" aria-controls="pills-Developer" aria-selected="false">Developer</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-Investment-tab" data-bs-toggle="pill" data-bs-target="#pills-Investment" type="button" role="tab" aria-controls="pills-Investment" aria-selected="false">Investment</button>
            </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
            {{--<div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                <x-team-member 
                img="assets/images/teams/3.jpg"
                fullname="{{__('about.members.homeyli')}}"
                role="Co-Founder"/>
                <x-team-member 
                img="assets/images/teams/2.jpg"
                fullname="{{__('about.members.zoveydat')}}"
                role="CEO"/>
                <x-team-member 
                img="assets/images/teams/1.jpg"
                fullname="{{__('about.members.bazadaran')}}"
                role="CTO"/>
                <x-team-member 
                img="assets/images/teams/5.jpg"
                fullname="{{__('about.members.zare')}}"
                role="Product Owner"/>
            </div>--}}
            <div class="tab-pane fade show active" id="pills-Management" role="tabpanel" aria-labelledby="pills-Management-tab">  
                <x-team-member 
                img="assets/images/teams/3.jpg"
                fullname="{{__('about.members.homeyli')}}"
                role="Co-Founder"/>
                <x-team-member 
                img="assets/images/teams/2.jpg"
                fullname="{{__('about.members.zoveydat')}}"
                role="CEO"/>
                <x-team-member 
                img="assets/images/teams/1.jpg"
                fullname="{{__('about.members.bazadaran')}}"
                role="CTO"/>
                <x-team-member 
                img="assets/images/teams/5.jpg"
                fullname="{{__('about.members.zare')}}"
                role="Product Owner"/>
            </div>
            <div class="tab-pane fade" id="pills-Developer" role="tabpanel" aria-labelledby="pills-Developer-tab">
                <x-team-member 
                img="assets/images/teams/8.jpg"
                fullname="{{__('about.members.shikh')}}"
                role="‌Back-end Developer"/>
            </div>
            <div class="tab-pane fade" id="pills-Investment" role="tabpanel" aria-labelledby="pills-Investment-tab">
                <x-team-member 
                img="assets/images/teams/4.jpg"
                fullname="{{__('about.members.taheri')}}"
                role="Business Intellignece"/>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>

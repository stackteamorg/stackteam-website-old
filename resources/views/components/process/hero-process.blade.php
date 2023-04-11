<div class="fancy-feature-thirtyFour mt-150 md-mt-100 pt-100 pb-100">
	<div class="container">
        <div class="row">
            <div class="col-lg-12  m-auto" data-aos="fade-up" data-aos-duration="1200">
                <div class="title-style-eleven text-center mb-70 md-mb-10">
                    <div> {{ __('process.hero.smalltitle') }} </div>
                    <h2> {{ __('process.hero.title') }} </h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
        <x-process-item title="{{ __('process.item1.title') }}" 
                text="{{ __('process.item1.text') }}"
                image="assets/images/icon/request.png"
                nameofclass="process-shape"/>

            <x-process-item title=" {{ __('process.item2.title') }} " 
                text="{{ __('process.item2.text') }}"
                image="assets/images/icon/check.png"
                nameofclass="process-shape"/>
            
            <x-process-item title="{{ __('process.item3.title') }} " 
                text="{{ __('process.item3.text') }}"
                image="assets/images/icon/metting.png"
                nameofclass="process-shape"/>

            <x-process-item title="{{ __('process.item4.title') }}" 
                text="{{ __('process.item4.text') }}"
                image="assets/images/icon/session.png"
                nameofclass="process-shape"/>

            <x-process-item title="{{ __('process.item5.title') }}" 
                text="{{ __('process.item5.text') }}"
                image="assets/images/icon/contract.png"
                nameofclass="process-shape"/>

            <x-process-item title="{{ __('process.item6.title') }}" 
                text="{{ __('process.item6.text') }}"
                image="assets/images/icon/product.png"
                nameofclass="process-shape"/>

            <x-process-item title="{{ __('process.item7.title') }}" 
                text="{{ __('process.item7.text') }}"
                image="assets/images/icon/develop.png"
                nameofclass="process-shape-en"/>
        </div>
    </div>
</div>

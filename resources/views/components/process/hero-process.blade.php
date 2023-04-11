<section class="container-fluid bg-blue py-66">
    <div class="row">
        <div class="col-md-12">
            <div class="title text-center">
                <small> {{ __('process.hero.smalltitle') }} </small>
                <h3 class="mb-4"> {{ __('process.hero.title') }} </h3>
            </div>
        </div>
    </div>
    <div class="row px-4 pt-66">
        <div class="col-md-10 offset-md-1">
            <div class="row d-flex justify-content-center">
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
</section>
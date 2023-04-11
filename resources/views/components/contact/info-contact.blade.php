<div class="container">
    <div class="row p-4 mb-4">
        <div class="col-md-4 p-4">
            <div class="contact-info p-4 text-center text-white">
                <div class="contact-icon"> <span class="material-symbols-outlined"> location_on </span> </div>
                <div class="mt-4">
                    <b> {{ __('contact.info.location') }} </b>
                    <p class="pt-2"> {{ __('contact.info.address') }} </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-4">
            <div class="contact-info p-4 text-center text-white">
                <div class="contact-icon"> <span class="material-symbols-outlined"> call </span> </div>
                <div class="mt-4">
                    <b> {{ __('contact.info.contact') }} </b>
                    <p class="pt-2"><a href="{{  $phone->link }}" class="footer-link"> {!!  $phone->data !!}</a> </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-4">
            <div class="contact-info p-4 text-center text-white">
                <div class="contact-icon"> <span class="material-symbols-outlined"> share </span> </div>
                <div class="mt-4">
                    <b> {{ __('contact.info.socialmedia.small') }} </b>
                    <div class="contact-page pt-4"> <x-social-list /> </div>
                    <div style="clear:both;" class="p-1"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-4"></div>
</div>
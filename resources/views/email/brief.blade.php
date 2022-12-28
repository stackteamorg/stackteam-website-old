<h3>یک درخواست همکاری جدید داریم</h4>
<h6>{{ __('brief.email.fullname') }}<h6>
<span>{{ $brief->fullname }}&nbsp;<small>{{ __('brief.email.lang') }}</small>&nbsp;{{ @__('index.lang.' . $brief->lang) }}</span>
<h6>{{ __('brief.email.phone_number') }}<h6>
<span><a href="tel:{{ $brief->phone_number }}">{{ $brief->phone_number }}</a></span>
<h6>{{ __('brief.email.detail') }}<h6>
<span>{{ $brief->detail }}</span>
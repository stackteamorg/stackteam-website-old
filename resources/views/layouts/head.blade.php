<x-metatag charset="UTF-8" />
<x-metatag name="csrf-token" />

<x-metatag-group :section="Request::route()->getName()" :sectionId="Request::route('id')" />
<x-metatag-group section="public" />
<x-metatag-group section="theme" />
<x-metatag-group section="og" />

<link rel="alternate" hreflang="fa-ir" href="https://stackteam.ir/" />
<link rel="canonical" href="https://stackteam.org" />
<!-- Google Search Console -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-D0GDEY6W27"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-D0GDEY6W27');
</script>
<!-- Favicon -->
<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('assets/images/fav-icon/icon.png') }}">
<!-- Main style sheet -->
@if (in_array(app()->getLocale(),['fa','ar']))
<link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/css/style-rtl.css') }}">
@else
<link rel="stylesheet" type="text/css" href="{{ secure_asset('assets-ltr/css/style.css') }}">
@endif
<!-- responsive style sheet -->
<link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/css/responsive.css') }}">
<!--  byekan font -->
<link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/fonts/somar/font.css') }}">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/fonts/yekan/font.css') }}">
<!-- fix style -->
<link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/css/custom/custom-style-' . app()->getLocale() . '.css') }}">

<!-- Fix Internet Explorer ______________________________________-->
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="{{ asset('assets/vendor/html5shiv.js') }}"></script>
    <script src="{{ asset('assets/vendor/respond.js') }}"></script>
<![endif]-->
<!-- yektanet -->
<script> !function (t, e, n) { t.yektanetAnalyticsObject = n, t[n] = t[n] || function () { t[n].q.push(arguments) }, t[n].q = t[n].q || []; var a = new Date, r = a.getFullYear().toString() + "0" + a.getMonth() + "0" + a.getDate() + "0" + a.getHours(), c = e.getElementsByTagName("script")[0], s = e.createElement("script"); s.id = "ua-script-fr4xWcrA"; s.dataset.analyticsobject = n; s.async = 1; s.type = "text/javascript"; s.src = "https://cdn.yektanet.com/rg_woebegone/scripts_v3/fr4xWcrA/rg.complete.js?v=" + r, c.parentNode.insertBefore(s, c) }(window, document, "yektanet"); </script> 

<script type="text/javascript">
  window.RAYCHAT_TOKEN = "a1903fbf-c0f2-41f0-8b21-8894a8405de2";
    (function () {
      d = document;
      s = d.createElement("script");
      s.src = "https://widget-react.raychat.io/install/widget.js";
      s.async = 1;
      d.getElementsByTagName("head")[0].appendChild(s);
    })();
  </script>
  
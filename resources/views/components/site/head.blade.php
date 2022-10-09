<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B34R0H2RRQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-B34R0H2RRQ');
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="Bredi - http://www.bredi.com.br">

<title>{{ env('APP_NAME') }}</title>

{{-- SEO --}}
@component('components.site.seo')
@endcomponent

{{-- site theme --}}
<meta name="msapplication-navbutton-color" content="#FFFFFF"/>
<meta name="apple-mobile-web-app-capable" content="yes">

<meta name="apple-mobile-web-app-status-bar-style" content="#FFFFFF">
<meta name="theme-color" content="#FFFFFF">

{{-- favicon --}}
<link rel="icon" sizes="192x192" href="/img/logo/favicon.svg">
<link rel="icon" href="/img/logo/favicon.svg" type="image/svg"/>
<link rel="shortcut icon" href="/img/logo/favicon.svg" type="image/svg"/>

{{-- fonts --}}
<link href="/fonts/fonts.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">

{{--  custom stylesheets  --}}
<link href="/css/site/custom.css" rel="stylesheet" media/>

{{--  page styles  --}}
@yield('styles')

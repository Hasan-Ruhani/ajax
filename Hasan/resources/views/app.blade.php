<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>{{$seo->title}}</title>
    <meta name="description" content="{{$seo->description}}"/>
    <meta name="keywords" content="{{$seo->keywords}}"/>

    <meta name="og:site_name" content="{{$seo->ogSiteName}}"/>
    <meta name="og:url" content="{{$seo->ogUrl}}"/>
    <meta name="og:title" content="{{$seo->ogTitle}}"/>
    <meta name="og:image" content="{{$seo->ogImage}}"/>
    <meta name="og:description" content="{{$seo->ogDescription}}"/>


    <link rel="icon" type="image/x-icon" href="{{asset('/favicon.ico')}}" />
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <script src="{{asset('js/axios.min.js')}}"></script>
</head>

<body class="d-flex flex-column h-100">

@include('components.navbar')
@include('components.loader')
<div class="" id="content-div">
    @yield('content')
</div>


<!-- Messenger Chat plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "100684349465296");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v17.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>



@include('components.footer')




<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>

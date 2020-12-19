<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <meta property="og:title" content="Face Classification JS">
  <meta property="og:description" content="ตรวจจับอารมณ์และเพศของใบหน้าบนเว็บบราวเซอร">
  <meta property="og:url" content="https://tupleblog.github.io/face-classification-js/">
  <meta property="og:site_name" content="face-classification-js">
  <meta property="og:image" content="https://tupleblog.github.io/face-classification-js/images/face_classification_og.png">
  <title>@yield('title')</title>
  <!-- CSS -->
  
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!--<link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/Vendor.css') }}" rel="stylesheet">-->
  <!--ReactJS-->
</head>
<body id='body_vendor'>
  <div class="wrapper" id=wrapper>
    @include('MIS.layout.topnav')
    @yield('content')
    @include('MIS.layout.sidenav')
  </div>
 <!-- UI scripts -->
 <script src="{{ asset('jquery/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('jquery/materialize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('jquery/adapter.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('iconJS/all.min.js') }}"></script>
    <!-- tf -->
    <!-- utils -->
    <script src="{{ asset('jquery/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('jquery/sweetalert2.all.min.js') }}"></script>
    <!--Local js-->
    <script src="{{ asset('js/util.js') }}"></script>
    <!-- chart -->
    <script src="{{ asset('js/VendorReact.js') }}"></script>
    <script type="text/javascript">
      $(function() {
        sales_chart();
  });
  </script>
<!-- Style -->
<style>
  #card-item-container {
    visibility: visible;
  }
  #image-container {
    position: relative;
  }
</style>
<!-- Style End-->
</body>

</html>

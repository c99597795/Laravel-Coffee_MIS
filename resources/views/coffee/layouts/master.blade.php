<!DOCTYPE html>
<html lang="en">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <meta property="og:title" content="Face Classification JS">
  <meta property="og:description" content="ตรวจจับอารมณ์และเพศของใบหน้าบนเว็บบราวเซอร">
  <meta property="og:url" content="https://tupleblog.github.io/face-classification-js/">
  <meta property="og:site_name" content="face-classification-js">
  <meta property="og:image" content="https://tupleblog.github.io/face-classification-js/images/face_classification_og.png">
  <title>@yield('title')</title>

  <!-- CSS  -->
  <!--<link href="{{asset('css/app.css')}}">-->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/webcam.css')}}" rel="stylesheet">
  <link href="{{asset('css/toast.css')}}" rel="stylesheet">
</head>
<style>
  body{
    background-image:url("{{ asset('images/coffee_background5.jpg') }}");
  }
</style>
<body id='body_index'>
  <!-- sticky footer -->
  <div class="wrapper" id="wrapper">
    <!-- main container -->
    @include('coffee.layouts.topnav')
    @yield('content')
    <!-- footer pusher -->
    <div class="push"></div>
  </div>

@include('coffee.layouts.footer')
<!-- UI scripts -->
<script src="{{asset('jquery/jquery-2.1.1.min.js')}}"></script>
  <script src="{{asset('jquery/materialize.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('jquery/adapter.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('iconJS/all.min.js')}}"></script>
  <!-- tf -->
  <script src="{{asset('Tensorflow/tfjs@0.9.js')}}"></script>
  <!-- utils -->
  <script src="{{asset('js/tracking-min.js')}}"></script>
  <script src="{{asset('js/face-min.js')}}"></script>
  <script src="{{asset('jquery/Chart.bundle.min.js')}}"></script>
  <script src="{{asset('jquery/sweetalert2.all.min.js')}}"></script>
  <!--Local js-->
  <script src="{{asset('js/util.js')}}"></script>
  <script src="{{asset('js/model_emotion.js')}}"></script>
  <script src="{{asset('js/model_gender.js')}}"></script>
  <script src="{{asset('js/webcam.js')}}"></script>
  <script src="{{asset('js/jquery.qrcode.min.js')}}"></script>
  <script src="{{asset('js/QRcodeToSQL.js')}}"></script>
  <script type="text/javascript">
    flag=0;
    $(function() {
      flag=0;
  // Handler for .ready() called.
  $("#show_Price").hide(500)

});
function btnc(argument) {
  // body...
  if(flag==0) 
    {
      flag=1;
    $("#show_Price").show(500)
  }
  else
  {
    flag=0;
    $("#show_Price").hide(500)
    location.reload();

  }
}
function ToQRcodeScanner(){
  //window.location = "QRcodeScanner.php";
  window.open('QRcodeScanner.php','QRcodeScanner',config='height=850,width=1280,left=280')
}
function QRcodeWindow(){
  window.open('QRcode.html','QRcode',config='height=540,width=540,left=720,top=250')
  console.alert('Should be Success')
}
</script>
  <style>
  #card-item-container {
    visibility: visible;
  }
  #image-container {
    position: relative;
  }
  </style>
</body>

</html>

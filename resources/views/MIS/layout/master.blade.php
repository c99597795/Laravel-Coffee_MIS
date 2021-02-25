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
  <script src="{{ asset('js/app.js') }}"></script>
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
    <!-- Vuejs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.min.js" integrity="sha512-BKbSR+cfyxLdMAsE0naLReFSLg8/pjbgfxHh/k/kUC82Hy7r6HtR5hLhobaln2gcTvzkyyehrdREdjpsQwy2Jw==" crossorigin="anonymous"></script>
    <!-- utils -->
    <script src="{{ asset('jquery/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('jquery/sweetalert2.all.min.js') }}"></script>
    <!--Local js-->
    <script src="{{ asset('js/util.js') }}"></script>
    <!-- chart -->
    <script src="{{ asset('js/VendorReact.js') }}"></script>
  <script type="module">
    import Editelement from '{{asset('js/component/Editelement.vue')}}';
    export default {
    name : '#Edit',
    data () {
        return {
            child : false
        }
    },
    components : {
        selectInput : selectInput
    },
    methods : {
        openChild () {
          console.log('openChild')
            this.child = true;
        },
        closeChild (event) {
            this.child = false;
            this.text = event.data;
        }
    }
};
//     var EditElement=new Vue({
//   el: '#EditElement',
//   data() {
//     return {
//       isShow: false
//     }
//    },
//   methods: {
//     showMore:function(event){
//       this.isShow = true
//       console.log('showMore')
//     },
//     closeMore() {
//       this.isShow = false
//       console.log('closeMore')
//     }
//   }
// })
// var demo = new Vue({
//   el: '#demo',
//   data: {
//     name: 'Vue.js'
//   },
//   // define methods under the `methods` object
//   methods: {
//     greet: function (event) {
//       // `this` inside methods points to the Vue instance
//       alert('Hello ' + this.name + '!')
//       // `event` is the native DOM event
//       console.log('showMore')
//     }
//   }
// })
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

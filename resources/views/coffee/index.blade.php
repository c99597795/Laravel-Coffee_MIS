@extends('coffee.layouts.master')
@section('title','index')
@section('content')
<div class="container" id='contain'>
  <br/>

  <!-- image viewer -->
  <div class="row" id="card-item-container">
    <div class='col-6 col-s-6'>
        <div id="image-container" class="card-content">
          <video id="webcam" preload autoplay loop muted></video>
          <canvas id="canvas_webcam"></canvas>
        </div>
      <span id="show_Price">獲得: <span id="price"></span>元 折扣</span>
    </div>
    <div class='row'>
      <div class='col-5 col-s-5'>
        <div id="result-container" class="card-content">
            <div class="chart-result-profile-webcam" style="display: block; text-align: center;">
              <canvas id="face_profile_chart" width="64" height="64"></canvas>
              <canvas id="face_profile_greyscale" width="64" height="64" style="display: none;"></canvas>
            </div>
            <div>
              <canvas id="chart_emotion"></canvas>
            </div>
            <div>
              <canvas id="chart_gender" style="display: none"></canvas>
            </div>
        </div>
        <h2><button class="btn-large red  waves-effect waves-light"  style="font-size:32px;" onclick="btnc()">試算</button> <br><br>
        </h2>
        <h2 id='QRcode'>
          <button class='button_webcam' id='QRcodebutton'style="font-size:32px;" onclick="QRcodeWindow()">會員專屬碼</button>
          <button class='button_webcam' id='QRcodebutton'style="font-size:32px;" onclick="ToQRcodeScanner()">　集點　</button>
        </h2>
        <div id="qrcode"></div>
    </div>
  </div>
</div>
@endsection


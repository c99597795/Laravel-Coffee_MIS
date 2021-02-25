@extends('MIS.layout.master')

@section('title','home')

    <!-- TopNav bar -->
    <!-- TopNav bar End-->
    @section('content')
    <!-- main container -->
    <main>
      <div class='container'>
      <!-- made a chart about account customer today-->
        <div>
        <span class='today_view'>
            今日總覽</span> 
        </div>
        <!--  -->
        <div class='main_cards'id='today-view'>
          <div class='card'>
            <div class='visitors-card'>
              <div class='card_left'>
                <i class="fas fa-user fa-5x"></i>
                <p>Visitors</p>
              </div>
              <div class="card_inner">
                <span id='VisitorNumber'>123</span><span> 人</span>
              </div>
            </div>
          </div>
          <div class='card'>
            <div class='revenue-card'>
              <div class=card_left>
                <i class="fas fa-money-check-alt fa-5x"></i>
                <p>Revenue</p>
              </div>
            <div class="card_inner">
              <span id='RevenueNumber'>10,000</span><span> $</span>
            </div>
          </div>
            
          </div>
          <div class='card'>
            <div class='sales-card'>
              <div class='card_left'>
                <i class="fas fa-coffee fa-5x"></i>
                <p>Sales</p>
              </div>
              <div class="card_inner">
                <span id='SalesNumber'>789</span><span> 杯</span>
              </div>
            </div>
          </div>
        </div>
        <div class="charts">
          <canvas id='chart'></canvas>
        </div>
      </div>
    </main>
    <!-- main container End-->
    <!-- SideNav -->
    <!-- SideNav End-->
    <script type="text/javascript">
      $(function() {
        sales_chart();
  });
  </script>
@endsection
 
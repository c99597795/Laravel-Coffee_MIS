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
            <span class='today_view'>點數管理</span> 
        </div>
        <!-- Table -->
        <div class="table">
                <table style='width:100%;'>
                    <tr><!-- Table_title-->
                        <th>ID</th>
                        <th>code</th>
                        <th>次數</th>
                    </tr>
                    <tr><!-- First_Line -->
                        <td>1</td>
                        <td>Man</td>
                        <td>11</td>
                    </tr>
                </table>
        </div>
        
      </div>
    </main>
    @endsection
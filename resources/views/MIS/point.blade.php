@extends('MIS.layout.master')

@section('title','Point')

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
                    @foreach($points as $point)
                    <tr><!-- First_Line -->
                        <td>{{ $point->id }}</td>
                        <td>{{ $point->code }}</td>
                        <td>{{ $point->times }}</td>
                    </tr>
                    @endforeach
                </table>
        </div>
        {{$points->links("pagination::bootstrap-4")}}
        
      </div>
    </main>
    @endsection
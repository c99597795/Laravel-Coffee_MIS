@extends('MIS.layout.master')

@section('title','Revenue')

    <!-- TopNav bar -->
    <!-- TopNav bar End-->
    @section('content')
    <!-- main container -->
    <main>
      <div class='container'>
      <!-- made a chart about account customer today-->
        <div>
            <span class='today_view'>營業額</span> 
        </div>
        <!-- Table -->
        <div class="table">
                <table style='width:100%;'>
                    <tr><!-- Table_title-->
                        <th>日期</th>
                        <th>營業額</th>
                    </tr>
                    @foreach($revenues as $revenue)
                    <tr><!-- First_Line -->
                        <td>{{ $revenue->date }}</td>
                        <td>{{ $revenue->revenue }}</td>
                    </tr>
                    @endforeach
                </table>
        </div>
        {{$revenues->links("pagination::bootstrap-4")}}
        
        
      </div>
    </main>
@endsection

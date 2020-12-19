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
            <span class='today_view'>會員管理</span> 
            <button class='add_new_profile_button'>新增會員資料</button>
        </div>
        <!-- Table -->
            <div class="table">
                <table style='width:100%;'>
                    <tr><!-- Table_title-->
                        <th>名稱</th>
                        <th>性別</th>
                        <th>生日</th>
                        <th>電話</th>
                        <th>購買次數</th>
                        <th>點數</th>
                        <th>上次購買時間</th>
                    </tr>
                    <tr>
                        
                        @foreach($members as $member)
                        <tr>
                            <td>{{$member->name}}</td>
                            <td>{{$member->sex}}</td>
                            <td>{{$member->birth}}</td>
                            <td>{{$member->phone}}</td>
                            <td>{{$member->times}}</td>
                            <td>{{$member->point}}</td>
                            <td>{{$member->last_bought}}</td>
                        </tr>
                        @endforeach
                    </tr>
                </table>
            </div>
            {{$members->links("pagination::bootstrap-4")}}
      </div>
     
    </main>
    @endsection
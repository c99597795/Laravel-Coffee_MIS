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
                        @foreach(App\Models\member::all() as $member)
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
                    <!-- 
                        <tr> 
                        <td>Vincent</td>
                        <td>Man</td>
                        <td>1998/11/13</td>
                        <td>0936888588</td>
                        <td>10</td>
                        <td>10</td>
                        <td>2020/11/7</td>
                        
                    </tr>
                    <tr>
                        <td>Ailie</td>
                        <td>Woman</td>
                        <td>1980/12/15</td>
                        <td>0955398866</td>
                        <td>9</td>
                        <td>10</td>
                        <td>2020/11/7</td>
                        
                    </tr>
                    <tr> 
                        <td>Sheng</td>
                        <td>Man</td>
                        <td>1978/2/13</td>
                        <td>098778945</td>
                        <td>5</td>
                        <td>5</td>
                        <td>2020/11/7</td>
                        
                    </tr>
                    <tr> 
                        <td>Andrew</td>
                        <td>Man</td>
                        <td>1996/3/23</td>
                        <td>0998587915</td>
                        <td>9</td>
                        <td>9</td>
                        <td>2020/11/7</td>
                        
                    </tr>
                    <tr> 
                        <td>Jhon</td>
                        <td>Man</td>
                        <td>1995/2/12</td>
                        <td>0978457874</td>
                        <td>4</td>
                        <td>4</td>
                        <td>2020/9/14</td>
                        
                    </tr>
                    <tr> 
                        <td>Stapone</td>
                        <td>Man</td>
                        <td>1992/10/14</td>
                        <td>0932569478</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2020/9/7</td>
                    </tr>
                    <tr> 
                        <td>Anny</td>
                        <td>Man</td>
                        <td>1989/8/7</td>
                        <td>0938785412</td>
                        <td>5</td>
                        <td>5</td>
                        <td>2020/10/5</td>
                        
                    </tr>
                    <tr> 
                        <td>Rose</td>
                        <td>Man</td>
                        <td>1997/12/21</td>
                        <td>0935478965</td>
                        <td>7</td>
                        <td>7</td>
                        <td>2020/9/14</td>
                        
                    </tr>
                    <tr> 
                        <td>Alice</td>
                        <td>Man</td>
                        <td>2001/12/20</td>
                        <td>0912578942</td>
                        <td>8</td>
                        <td>8</td>
                        <td>2020/9/10</td>
                        
                    </tr>
                    <tr> 
                        <td>Jack</td>
                        <td>Man</td>
                        <td>2000/2/23</td>
                        <td>0956874236</td>
                        <td>1</td>
                        <td>1</td>
                        <td>2020/10/8</td>
                        
                    </tr>-->
                </table>
            </div>
      </div>
    </main>
    @endsection
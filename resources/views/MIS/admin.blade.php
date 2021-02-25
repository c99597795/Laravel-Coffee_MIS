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
            <span class='today_view'>管理員帳號管理</span>
            <button class='add_new_profile_button' onclick=''>管理帳號</button>
        </div>
        <!-- Table -->
        {{-- <div id='demo'>
          @foreach($admins as $admin)
          <div id='show-element' class='EditElement_wrapper' v-if="isShow">
            <div class='EditElement_content'>
              <form id='{{ $admin->id }}'action="{{ route('admin.update',[$admin->id])}}" method='post'>
                  @csrf
                  @method('put')
                <div class='form-group'>
                      <label for='name'>姓名</label>
                      <input type='text' class='form-control' id='name' name='name' value="{{old('name',$admin->name)}}">
                  </div>
                  <div class='form-group'>
                      <label for='email'>Email</label>
                      <input type='text' class='form-control' id='email' name='email'value="{{old('email',$admin->email)}}">
                  </div>
                  <button type='submit' class="btn btn-primary">Update</button>
                  <div class="close-wrapper">
                    <div class="close-icon" @click="closeMore">
                      <span>X</span>
                    </div>
                  </div>             
              </form>
            </div>
          </div>
          @endforeach
        </div> --}}
        {{-- <div id="Edit">
          <button  class="btn btn-warning" type="button" @click="openChild">修改</button>
          <my-component v-if="child"
                        :msg="'get data!!!'"
                        @close-child="closeChild($event)"></my-component>
        </div> --}}
        <div class="table">
          <table style='width:100%;'>
              <tr><!-- Table_title-->
                  <th>姓名</th>
                  <th>Email</th>
                  <th>上次登入日期</th>
                  <th>建立日期</th>
              </tr>
              @foreach($admins as $admin)
              <tr><!-- Table_title-->
                <td>{{ $admin ->name}}</td>
                <td>{{ $admin ->email}}</td>
                <td>{{ $admin ->last_online_at}}</td>
                <td>{{ $admin ->created_at}}</td>
                <td>
                  <div id='EditElement'>
                    <button  class="btn btn-warning" type="button" @click="showMore">點名</button>
                  </div>
                </td>
                <td>
                <form action="{{route('admin.destroy',[$admin->id])}}"method='post' 
                  onSubmit="return confirm('Are you sure?')">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type='submit'>
                  曠課</button></form>
                </td>

              </tr>
              @endforeach
          </table>
  </div>
  
  {{$admins->links("pagination::bootstrap-4")}}
      </div>
    </main>
@endsection
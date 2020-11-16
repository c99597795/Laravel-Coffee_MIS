<div id='sidenav'>
      <div class="sidebar__title">
        <h1>Dashboard</h1>
        <i class="fas fa-coffee fa-2x"></i>
      </div>
      <div class="sidebar__link active_menu_link" >
        <i class='fa fa-home fa-2x'></i>
        <a href="{{ route('home') }}"></a>
      </div>
      <h2></h2>
      <div class="sidebar__link">
        <i class="fas fa-users fa-2x fa-fw"></i>
        <a href="{{ route('member_management') }}">會員管理</a>
      </div>
      <div class="sidebar__link">
        <i class="fas fa-search-dollar fa-2x fa-fw"></i>
        <a href="{{ route('point_management') }}">點數管理</a>
      </div>
      <div class="sidebar__link">
        <i class="fas fa-dollar-sign fa-2x fa-fw"></i>
        <a href="{{ route('revenue_management') }}">營業額</a>
      </div>
      <div class="sidebar__link">
      <i class="fas fa-user-cog fa-2x fa-fw"></i>
        <a href="{{ route('admin') }}">管理員帳號管理</a>
      </div>
    </div>
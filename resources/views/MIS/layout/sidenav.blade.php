<div id='sidenav'>
      <div class="sidebar__title">
        <h1>Dashboard</h1>
        <i class="fas fa-coffee fa-2x"></i>
      </div>
      <div class="sidebar__link active_menu_link" >
        <i class='fa fa-home fa-2x'></i>
        <a href="{{ route('home') }}"></a>
      </div>
      <div class="sidebar__link__User">
        <div class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>
  
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
  
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
        </div>
      </div>
      <h2></h2>
      <div class="sidebar__link">
        <i class="fas fa-users fa-2x fa-fw"></i>
        <a href="{{ route('member') }}">會員管理</a>
      </div>
      <div class="sidebar__link">
        <i class="fas fa-search-dollar fa-2x fa-fw"></i>
        <a href="{{ route('point') }}">點數管理</a>
      </div>
      <div class="sidebar__link">
        <i class="fas fa-dollar-sign fa-2x fa-fw"></i>
        <a href="{{ route('revenue') }}">營業額</a>
      </div>
      <div class="sidebar__link">
      <i class="fas fa-user-cog fa-2x fa-fw"></i>
        <a href="{{ route('admin.index') }}">管理員帳號管理</a>
      </div>
    </div>
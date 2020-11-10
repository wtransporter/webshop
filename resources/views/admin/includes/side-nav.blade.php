<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview {{ url()->current() == url('/tp-admin/home') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ url()->current() == url('/tp-admin/home') ? 'active' : '' }}">
              <a href="{{ route('dashboard') }}"><i class="fa fa-circle-o"></i> Dashboard v1</a>
            </li>
          </ul>
        </li>
        <li class="{{ url()->current() == url('/tp-admin/articles') ? 'active' : '' }}
          treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Articles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ url()->current() == url('/tp-admin/articles') ? 'active' : '' }}"><a href="/tp-admin/articles"><i class="fa fa-circle-o"></i> Article list</a></li>
          </ul>
        </li>
        <li class="{{ url()->current() == url('/tp-admin/orders') ? 'active' : '' }} treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ url()->current() == url('/tp-admin/orders') ? 'active' : '' }}"><a href="/tp-admin/orders"><i class="fa fa-circle-o"></i> All orders</a></li>
          </ul>
        </li>
        <li>
          <a href="{{ route('users') }}">
            <i class="fa fa-user"></i> <span>Users</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
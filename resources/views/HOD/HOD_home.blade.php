@extends('layouts.main')
@section('content')

 <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ url('/')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <!-- <li><a href="{{ url('/userlist')}}"><i class="fa fa-users"></i> <span>User List</span></a></li>
        <li><a href="{{ url('/singlemsg')}}"><i class="fa fa-envelope"></i> <span>Single Message</span></a></li>
        <li><a href="{{ url('/bulkmsg')}}"><i class="fa fa-database"></i> <span>Bulk Message</span></a></li> -->
        <li><a href="#"><i class="fa fa-users"></i> <span>User Access</span></a></li>

        <!-- <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li> -->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <!-- @yield('content') -->
  <!-- /.content -->
  </div>

@endsection

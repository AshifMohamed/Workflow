@extends('layouts.main')
@section('content')

 <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ route('hod.index') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <!-- <li><a href="{{ url('/userlist')}}"><i class="fa fa-users"></i> <span>User List</span></a></li>
        <li><a href="{{ url('/singlemsg')}}"><i class="fa fa-envelope"></i> <span>Single Message</span></a></li>
        <li><a href="{{ url('/bulkmsg')}}"><i class="fa fa-database"></i> <span>Bulk Message</span></a></li> -->
        <li><a href="{{ route('hod.create') }}"><i class="fa fa-users"></i> <span>User Access</span></a></li>

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
  <section class="content-header">
    <h1>
        Page Header
        <small>Optional description</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol>
  </section>

    <section style="background-color:white" class="content container-fluid">


@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p>{{ $message }}</p>
    </div>
@endif
<div class="table-responsive no-padding">

<table id="SMS" class="table table-bordered table-hover " >
    <tbody>
    <tr>
        <th>Number</th>
        <th >Request Type</th>
        <th>Request Status</th>
        <th >Action</th>
    </tr>
    @foreach ($requests as $request)
    <tr>
        <td>{{ ++$i }}</td>
         <td>{{ $request->request_type}}</td> 
         @if( $request->request_status.equalToIgnoringCase("Processing"))
        <td><span class="label label-danger">{{ $request->request_status}}</span></td> 
         @else
         <td><span class="label label-success">{{ $request->request_status}}</span></td> 
          @endif
        <td>
            <a href="#" class="btn btn-sm btn-primary"  title="Edit" ><i class="glyphicon glyphicon-pencil"></i> Edit  </a>
            <a href="#" class="btn btn-sm btn-success"  title="View" ><i class="glyphicon glyphicon-pencil"></i> View  </a>
          
        </td>
    </tr>
    @endforeach

    </tbody>
</table>
{!! $requests->links() !!}
</div>

</section>
  </div>

@endsection

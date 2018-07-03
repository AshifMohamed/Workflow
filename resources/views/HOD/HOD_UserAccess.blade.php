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

  <section class="content-header">
    <h1>
    SECTION 01: Basic Information
        <small>To be filled by the HOD</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol>
</section>

 <section class="content container-fluid">
 <div class="row">
        <form>

            <!-- left column -->
            <div class="box box-primary">

                <!-- /.box-header -->
                <!-- <div style="background-color:white" class="col-md-6"> -->
                    <div class="box-header with-border" style="margin-bottom:2%">
                        <h3 class="box-title">User Details</h3>
                    </div>

    <div class="form-group col-md-6">
        <label >First Name</label>
        <input  class="form-control input-group-lg reg_name" type="text" name="Fname" id="Fname" disabled/>
    </div>

    <div class="form-group col-md-6">
        <label>Last Name</label>
        <input class="form-control pull-right" name="Lname" id="Lname" type="text" disabled>
    </div>
    <div class="form-group col-md-6">
        <label >Department</label>
        <select class="form-control" id="Department" name="Department" disabled>
            <option>Select</option>
            <option>Intern</option>
            <option>Trainee</option>
            <option>Associate</option>
            <option>Project Manager</option>
            <option>Department Head</option>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label >Designation</label>
        <input  name="designation" class="form-control input-group-lg reg_name" disabled type="text" id="designation "/>
    </div>
    
    <!-- </div> -->
    <div class="form-group col-md-6">
        <label >Working Hours</label>
        <input  class="form-control input-group-lg reg_name" type="text" name="WorkingHrs" id="WorkingHrs" disabled/>
    </div>
    <div class="form-group col-md-6">
        <label > Email</label>
        <input  name="email" class="form-control input-group-lg reg_name" disabled type="text" id="email "/>
    </div>
    <div class="form-group col-md-12">
        <br>
        <button type="submit" name="HODsubmit" class="btn btn-primary">Submit</button>
    </div>

            </div>
        </form>
    </div>
 </section>

  <!-- @yield('content') -->
  <!-- /.content -->
  </div>

@endsection
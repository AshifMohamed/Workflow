@extends('layouts.main')
@section('content')

 <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ route('ciso.index') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
       

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

            <!-- left column -->
            <div class="box box-primary">

                <!-- /.box-header -->
                <!-- <div style="background-color:white" class="col-md-6"> -->
                    <div class="box-header with-border" style="margin-bottom:2%">
                        <h3 class="box-title">User Details</h3>
                    </div>

    <div class="form-group col-md-6">
        <label >First Name</label>
        <input  class="form-control input-group-lg reg_name" type="text" name="fname" id="fname" value="{{$UserAccess->first_name}}" disabled/>
    </div>

    <div class="form-group col-md-6">
        <label>Last Name</label>
        <input class="form-control pull-right" name="lname" id="lname" type="text" value="{{$UserAccess->last_name}}" disabled>
    </div>
    <div class="form-group col-md-6">
        <label >Department</label>
        <input  class="form-control input-group-lg reg_name" type="text" name="department" id="department" value="{{$UserAccess->department}}" disabled/>
    </div>
    <div class="form-group col-md-6">
        <label >Designation</label>
        <input  name="designation" class="form-control input-group-lg reg_name" disabled type="text" id="designation " value="{{$UserAccess->designation}}"/>
    </div>
    
    <!-- </div> -->
    <div class="form-group col-md-6">
        <label >Working Hours</label>
        <input  class="form-control input-group-lg reg_name" type="text" name="workingHrs" id="workingHrs" value="{{$UserAccess->working_hours}}" disabled/>
    </div>
    <div class="form-group col-md-6">
        <label > Email</label>
        <input  name="email" class="form-control input-group-lg reg_name" disabled type="text" id="email" value="{{$UserAccess->email}}"/>
    </div>
    <!-- <div class="form-group col-md-12">
        <br>
        <button type="submit" name="HODsubmit" class="btn btn-primary">Submit</button>
    </div> -->
            </div>
]    </div>

    
    <div class="row">
    <section class="content-header">
    <h1>
        SECTION 02: HR Information
        <small>Should be filled by HR administrative</small>
    </h1>
    </section>

            <!-- left column -->
            <div class="box box-primary">

                <!-- /.box-header -->
                <!-- <div style="background-color:white" class="col-md-6"> -->
                    <div class="box-header with-border" style="margin-bottom:2%">
                        <h3 class="box-title"></h3>
                    </div>

                    <div class="form-group col-md-6">
        <label>NIC</label>
        <input class="form-control pull-right" name="nic" id="nic" type="text" value="{{$UserAccess->nic}}" disabled >
    </div>
    <div class="form-group col-md-6">
        <label >Gender</label>
        <input class="form-control pull-right" name="gender" id="gender" type="text" value="{{$UserAccess->gender}}" disabled >
    </div>

            </div>
    </div>

     <div class="row">
    <section class="content-header">
    <h1>
        SECTION 03: Approval
        <small>To be filled by HR CISO and Head of IT</small>
    </h1>
    </section>

            <!-- left column -->
            <div class="box box-primary">

                <!-- /.box-header -->
                <!-- <div style="background-color:white" class="col-md-6"> -->
                    <div class="box-header with-border" style="margin-bottom:2%">
                        <h3 class="box-title"></h3>
                    </div>
    <div class="form-group col-md-6">
        <label>CISO</label>
        <input class="form-control pull-right" name="ciso" id="ciso" type="text" value="{{$UserAccess->ciso}}" disabled>
    </div>
   
    
            </div>
    </div>
    
 </section>

  <!-- @yield('content') -->
  <!-- /.content -->
  </div>

@endsection

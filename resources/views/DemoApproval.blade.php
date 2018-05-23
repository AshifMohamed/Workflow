<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Text House</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/cerulean/bootstrap.min.css">-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/onsen/2.8.3/css/ionicons/css/ionicons.min.css" />
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.0.0-9/css/ionicons.min.css">--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionic/1.3.1/css/ionic.min.css" />--}}

    {{--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/css/bootstrap-colorpicker.min.css" />

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="  {{ URL::asset('css/AdminLTE.min.css') }}">

    <link rel="stylesheet" href="  {{ URL::asset('css/select2.min.css') }}">

    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
                                                          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="  {{ URL::asset('css/skin-blue.min.css') }}">

    <link rel="stylesheet" href="  {{ URL::asset('css/icheck-blue.css') }}">

   <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<h3 class="col-md-12">
    <b>Basic Infomation</b>
</h3>
<h4 class="col-md-12">
    <b>To be Filled By HOD</b>
    <hr class="box box-primary">
</h4>
<form method="post" class="form-group col-md-12">
    <div class="col-md-6">
        <label class="col-md-6">
            Add User &nbsp;
            <input type="radio" name="newusr" id="newusr" disabled>
        </label>
        <label class="col-md-6">
            Modfy User &nbsp;
            <input type="radio" name="newusr" id="oldusr" disabled>
        </label>
    </div>
    <hr>
    <br>
    <div class="form-group col-md-6">
        <label > Employee ID</label>
        <input  name="eid" class="form-control input-group-lg reg_name" disabled type="text" id="eid "/>
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
        <label >Date Joined</label>
        <input  class="form-control input-group-lg reg_name" type="date" id="JoinedDate" name="JoinedDate" disabled/>
    </div>
    <div class="form-group col-md-6">
        <label >Department</label>
        <select class="form-control" id="Department" name="Department" disabled>
            <option>Select</option>
            <option>Intern</option>
            <option>Trainee</option>
            <option>Asociate</option>
            <option>Project Manager</option>
            <option>Department Head</option>
        </select>
    </div>
    </div>
    <div class="form-group col-md-6">
        <label >Working Hours</label>
        <input  class="form-control input-group-lg reg_name" type="text" name="WorkingHrs" id="WorkingHrs" disabled/>
    </div>
</form>

<h3 class="col-md-12">
  <b> HR Infomation</b>
</h3>

<h4 class="col-md-12">
    <b>
        To be Filled By HR administration
    </b>
</h4>
<hr class="box box-primary">

<form method="post" class="form-group col-md-12">
    <div class="form-group col-md-6">
        <label>NIC Number/ PP Number</label>
        <input class="form-control pull-right" name="NIC" id="NIC" maxlength="10" type="text">
    </div>

    <div class="form-group col-md-6">
        <br>
        <label class="col-md-3">
            Gender
            <br>
        </label>
        <div class="form-group col-md-2">
            <label>
                Male
                <input type="radio" name="gender" id="male">
            </label>
        </div>
        <div class="form-group col-md-2">
            <label>
                Frmale
                <input type="radio" name="gender" id="female">
            </label>
        </div>
    </div>
    <div class="form-group col-md-6">
        <br>
        <label >Date Joined</label>
        <input  class="form-control input-group-lg reg_name" type="date" name="HRJoinDate" id="HRJoinDate" />
    </div>

    <div class="col-md-6">
        <label>
            Comments
        </label>
        <textarea name="HRComments" id="HRComments" class="form-control" rows="3" placeholder="Enter ..."></textarea>
        <hr>
    </div>
</form>

<div class="col-md-6">
    <h3>
        <b>Approval</b>
    </h3>
    <h4>
      <b>Should be filled by CISO & Head of IT</b>
    </h4>
</div>
<hr class="box box-primary">

<form class="form-group col-md-12" method="post">
    <div class="form-group col-md-6">
        <label >CISO</label>
        <input  class="form-control input-group-lg reg_name" type="text" name="age" />
    </div>
    <div class="form-group col-md-6">
         <label >Date</label>
        <input  class="form-control input-group-lg reg_name" type="date" name="age" />
    </div>

    <div class="col-md-12">
        <label>
            Comments
        </label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
        <hr>
    </div>

    <div class="col-md-12">
        <div class="col-md-2">
            <button type="submit" class="btn btn-facebook" name="HRsubmit"><b>Approve</b></button>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-danger" name="HRsubmit"><b>Decline</b></button>
        </div>

    </div>

</form>


</body>
</html>
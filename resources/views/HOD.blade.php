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
<br>
<h3>
    SECTION 01 - Basic Infomation
<hr class="box box-primary">
</h3>
<form method="POST" action="Empreq.php" >


    <label class="col-md-6">
            Add User &nbsp;
        <input type="radio" name="newusr" id="newusr">
    </label>
    <label class="col-md-6">
            Modfy User &nbsp;
            <input type="radio" name="newusr" id="oldusr">
        </label>
    <hr>
    <br>


        <div class="form-group col-md-6">
            <label > Date Required By</label>
            <input  name="Datereq" class="form-control input-group-lg reg_name" type="date" id="Datereq"/>
        </div>
        <div class="form-group col-xs-6">
            <label >Date Filled </label>
            <input class="form-control input-group-lg reg_name" type="date" name="datefiled" id="datefilled"/>
        </div>
        <div class="form-group col-md-6">
            <label >First Name</label>
            <input  class="form-control input-group-lg reg_name" type="text" name="Fname" placeholder="Last name"/>
        </div>

        <div class="form-group col-md-6">
            <label>Last Name</label>
            <input class="form-control pull-right" name="lname" type="text">
        </div>
        <div class="form-group col-md-6">
            <label >Department</label>
            <input  class="form-control input-group-lg reg_name" type="text" name="age"/>
        </div>
        <div class="form-group col-md-6">
            <label >Designation</label>
            <input  class="form-control input-group-lg reg_name" type="text" name="age"/>
        </div>
        <div class="form-group col-md-6">
            <label >Working Hours</label>
            <input  class="form-control input-group-lg reg_name" type="text" name="age"/>
        </div>
        <h2 class="col-md-12">
            Required Privilages
            <hr class="box box-primary">
        </h2>

    <label class="col-md-3">
        Internal Employee &nbsp;
        <input type="radio" name="nwusr" id="internal" value="Internal">
    </label>
    <label class="col-md-3">
        Temporary Employee &nbsp;
        <input type="radio" name="nwusr" id="temp" value="temp">
    </label>
    <label class="col-md-3">
        Third Party &nbsp;
        <input type="radio" name="nwusr" id="thirdprty" value="third">
    </label>
    <hr>
    <div class="form-group col-md-6">
        <br>
        <label >Expiration Date</label>
        <input  class="form-control input-group-lg reg_name" type="date" name="age" disabled/>
    </div>

    <h2 class="col-md-12">
        Access Types
        <hr class="box box-primary">
    </h2>

    <div class="form-group col-md-6">
        <br>
        <label >Active Directory &nbsp;</label>
        <input type="checkbox" value="Actie Dir" name="ActiveDirectory">
    </div>

    <div class="form-group col-md-6">
        <label >User ID</label>
        <input  class="form-control input-group-lg reg_name" type="text" name="UserId"/>
        <hr>
    </div>

    <div class="form-group col-md-6">
        <br>
        <label >Email &nbsp;</label>

        <input type="checkbox" value="Actie Dir" name="ActiveDirectory">
    </div>

        <div class="col-md-6">

            <label>
                Telida Email :
                <br>
                <label>
                    <input type="radio" name="empmail" id="empmailcom" value="com">
                    &nbsp; @telida.com
                </label>
                <br>
                <label>
                    <input type="radio" name="empmail" id="empmailbiz" value="biz">
                    &nbsp; @telida.biz
                </label>
                <br>
                <label>
                    <input type="radio" name="empmail" id="empmailemail" value="email">
                    &nbsp; @telida.email
                </label>


                <div class="input-group">
                        <span class="input-group-addon">
                          <input type="radio" id="empmailother" name="option2">
                        </span>
                    <input type="text" name="empmailother" class="form-control" placeholder="Other..    ">
                </div>
                <hr><!-- /input-group -->
            </label>
        </div>


    <dev class="col-md-6">
        <br>
        <label >Internet &nbsp;</label>
        <input type="checkbox" value="Actie Dir" name="ActiveDirectory">
    </dev>

    <dev class="col-md-6">
        <label>
            Details
        </label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
        <hr>

    </dev>
    <dev class="col-md-6">
        <br>
        <label >Shaired Folder &nbsp;</label>
        <input type="checkbox" value="Actie Dir" name="ActiveDirectory">
    </dev>

    <dev class="col-md-6">
        <label>
            Details
        </label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
        <hr>
    </dev>

    <dev class="col-md-6">
        <br>
        <label >Cloud Base File Sharing &nbsp;</label>
        <input type="checkbox" value="Actie Dir" name="ActiveDirectory">
    </dev>

    <dev class="col-md-6">
        <label>
            Details
        </label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
    </dev>
    <dev class="col-md-12">
        <hr class="box box-primary">
    </dev>


    <div class="col-md-12">
        <label>
            Required Software Details
        </label>
        <textarea name="softdetails" class="form-control" rows="3" placeholder="Enter ..."></textarea>
    </div>

    <div class="col-md-12">
        <hr class="box box-primary">
    </div>

    <div class="col-md-6">
        <label>
            Replacement Staff
        </label>
    </div>

<div class="col-md-6">
    <div class="radio">
        <label>
            <input name="Rplace" id="Rplaceyes" value="option1" checked="" type="radio">
Yes
        </label>
    </div>
    <div class="radio">
        <label>
            <input name="Rplace" id="Rplaceno" value="option2" type="radio">
   No
        </label>
    </div>

</div>
<div class="col-md-12">
    <hr class="box box-primary">
</div>

<div class="col-md-6">
    <label>
        Re-Allocate Exsisting Workstation
    </label>
</div>
        <div class="col-md-6">
            <div class="radio">
                <label>
                    <input name="Reallocate" id="Reallocateyes" value="option1" checked="" type="radio">
                    Yes
                </label>
            </div>
            <div class="radio">
                <label>
                    <input name="Reallocate" id="Reallocateno" value="option2" type="radio">
                    No
                </label>
            </div>
            <label>
                If Yes Of The Replaced Employee
            </label>
            <input class="form-control pull-right" name="ReplaceEmployee" type="text">
            <br>
        </div>
    <div class="col-md-12">
        <hr class="box box-primary">
    </div>

    <div class="col-md-6">
        <label>
            Allocate New Workstation
        </label>
    </div>
    <div class="col-md-6">
        <div class="radio">
            <label>
                <input name="AllocateWrkStation" id="AllocateWrkStationyes" value="option1" checked="" type="radio">
                Yes
            </label>
        </div>
        <div class="radio">
            <label>
                <input name="AllocateWrkStation" id="AllocateWrkStationno" value="option2" type="radio">
                No
            </label>
        </div>
    </div>
    <div class="col-md-12">
        <hr class="box box-primary">
    </div>

    <div class="col-md-6">
        <h2>
           Building Access
        </h2>
    </div>
    <div class="col-md-12">
        <hr class="box box-primary">
    </div>

    <div class="col-md-4">
    <label>
        Main Entrance
    </label>
    </div>

    <div class="col-md-1">
        <div class="radio">
            <label>
                <input name="MainEnt" id="MainEntyes" value="option1" checked="" type="radio">
                Yes
            </label>
        </div>
    </div>
        <div class="col-md-1">
            <div class="radio">
                <label>
                    <input name="MainEnt" id="MainEntno" value="option2" type="radio">
                    No
                </label>

            </div>
    </div>

    <div class="col-md-12">
        <div class="col-md-4">
            <label>Garage Entrance
            </label>
        </div>

    <div class="col-md-1">
        <div class="radio">
            <label>
                <input name="GarageEnt" id="GarageEntyes" value="option1" checked="" type="radio">
                Yes
            </label>
        </div>
    </div>
    <div class="col-md-1">
        <div class="radio">
            <label>
                <input name="GarageEnt" id="GarageEntno" value="option2" type="radio">
                No
            </label>

        </div>
    </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-4">
            <label>HTR
            </label>
        </div>

        <div class="col-md-1">
            <div class="radio">
                <label>
                    <input name="HTR" id="HTRyes" value="option1" checked="" type="radio">
                    Yes
                </label>
            </div>
        </div>
        <div class="col-md-1">
            <div class="radio">
                <label>
                    <input name="HTR" id="HTRno" value="option2" type="radio">
                    No
                </label>

            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-4">
            <label>FAO -1
            </label>
        </div>

        <div class="col-md-1">
            <div class="radio">
                <label>
                    <input name="FAO" id="FAOyes" value="option1" checked="" type="radio">
                    Yes
                </label>
            </div>
        </div>
        <div class="col-md-1">
            <div class="radio">
                <label>
                    <input name="FAO" id="FAOno" value="option2" type="radio">
                    No
                </label>

            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="col-md-4">
            <label>HR & FAO - 2
            </label>
        </div>

        <div class="col-md-1">
            <div class="radio">
                <label>
                    <input name="HrFao" id="HrFaoyes" value="option1" checked="" type="radio">
                    Yes
                </label>
            </div>
        </div>
        <div class="col-md-1">
            <div class="radio">
                <label>
                    <input name="HrFao" id="HrFaono" value="option2" type="radio">
                    No
                </label>

            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="col-md-4">
            <label> Server Room
            </label>
        </div>

        <div class="col-md-1">
            <div class="radio">
                <label>
                    <input name="Server" id="Serveryes" value="option1" checked="" type="radio">
                    Yes
                </label>
            </div>
        </div>
        <div class="col-md-1">
            <div class="radio">
                <label>
                    <input name="Server" id="Serverno" value="option2" type="radio">
                    No
                </label>

            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="col-md-4">
            <label> Vajira Road Office
            </label>
        </div>

        <div class="col-md-1">
            <div class="radio">
                <label>
                    <input name="Vajira" id="Vajirayes" value="option1" checked="" type="radio">
                    Yes
                </label>
            </div>
        </div>
        <div class="col-md-1">
            <div class="radio">
                <label>
                    <input name="Vajira" id="Vajirano" value="option2" type="radio">
                    No
                </label>

            </div>
        </div>
    </div>

    <hr>

    <div class="col-md-12">
        <label>
            Comments
        </label>
        </dev>
    </div>
    <div class="col-md-6">
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
        <hr>
    </div>

    <div class="form-group col-md-12">
        <div class="col-md-6">
            <label >HOD Name</label>
            <input  class="form-control input-group-lg reg_name" type="text" name="HodName" placeholder="Last name"/>
        </div>

        <div class="col-md-6">
            <label >Date</label>
            <input  class="form-control input-group-lg reg_name" type="date" name="SubDate" />
        </div>

        <div class="col-md-6">
            <br>
            <button type="submit" class="btn btn-primary" name="HodSubmit">Submit</button>
        </div>

    </div>


</form>
</body>
</html>
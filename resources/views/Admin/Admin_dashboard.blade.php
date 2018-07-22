@extends('Admin.Admin_home')
@section('content')

      <div class="content-wrapper" >

    <section class="content-header">
        <h1>
            Create User
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section style="background-color:white" class="content container-fluid">

        <div class="row">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p>{{ $message }}</p>
            </div>
        @endif
           
            <form  class="form-horizontal" method="POST" action="{{ route('admin.store') }}">
                {{ csrf_field() }}
                <div class="modal-body">

                    <div class="form-body">

                         <div class="form-group">
                         <label for="user_type" class="col-md-2 control-label">User Type</label>
                         <div class="col-md-6">
                                <select class="form-control" id="user_type" name="user_type" required>
                                @foreach ($roles as $role)

                                    <option value="{{$role->role_id}}">{{$role->role_name}}</option>

                                @endforeach
                                </select>
                                </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-2 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="name" placeholder="Username" class="form-control" name="name" value="{{ old('name') }}" type="text" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="Password" class="col-md-2 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif


                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation" class="col-md-2 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>


                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-offset-7">
                    <button type="submit"  class="btn btn-primary">Save</button>
                </div>
            </form>


        </div>


    </section>

    </div>


@endsection
@extends('HOD.HOD_home')
@section('content')

 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <!-- @yield('content') -->
  <!-- /.content -->
  <section class="content-header">
    <h1>
        HOD Dashboard
        <small></small>
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
         @if( $request->isProcessing())
        <td><span class="label label-warning">{{ $request->request_status}}</span></td> 
         @elseif( $request->isDeclined())
         <td><span class="label label-danger">{{ $request->request_status}}</span></td>
         @else
         <td><span class="label label-success">{{ $request->request_status}}</span></td>  
          @endif
        <td>
        @if( ! $request->isCompleted())
            <a href="{{ route('hod.edit',$request->request_id) }}" class="btn btn-sm btn-primary"  title="Edit" ><i class="glyphicon glyphicon-pencil"></i> Edit  </a>
        @endif

            <a href="{{ route('hod.show',$request->request_id) }}" class="btn btn-sm btn-success"  title="View" ><i class="glyphicon glyphicon-pencil"></i> View  </a>
          
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

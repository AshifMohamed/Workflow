<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Process_Request;
use App\User_Access;

class HOD_UserAccessController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkHOD');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $requests = Process_Request::where('hod_request', TRUE)->paginate(5);
        return view('HOD.HOD_dashboard',compact('requests',$requests))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('HOD.HOD_UserAccess');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $Process_Request = new Process_Request;

        $Process_Request->request_type = "User Access";
        $Process_Request->hod_request = TRUE;
        $Process_Request->hr_request = TRUE;
        $Process_Request->request_status = "Processing";

        $Process_Request->save();
        
        echo  $Process_Request;
        $UserAccess = new User_Access;
        $UserAccess->request_id = $Process_Request->request_id;
        $UserAccess->first_name = $request->fname;
        $UserAccess->last_name = $request->lname;
        $UserAccess->department = $request->department;
        $UserAccess->designation = $request->designation;
        $UserAccess->working_hours = $request->workingHrs;
        $UserAccess->email = $request->email;

        $UserAccess->save();
        return redirect()->route('hod.index')
            ->with('success', 'Request created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $UserAccess = User_Access::where('request_id',$id)->first();
        $Process_Request = Process_Request::find($id);

        if($Process_Request->isCompleted()){

            return view('HOD.HOD_View_UserAccess_Completed', compact('UserAccess', $UserAccess));

        }elseif ($Process_Request->it_request) {

            return view('HOD.HOD_View_UserAccess_CISO', compact('UserAccess', $UserAccess));

        }elseif ($Process_Request->ciso_request) {

            return view('HOD.HOD_View_UserAccess_HR', compact('UserAccess', $UserAccess));

        }else {
            
            return view('HOD.HOD_View_UserAccess', compact('UserAccess', $UserAccess));
        }

        

    }

    public function declineRequest()
    {
        //
        return view('HOD.HOD_View_UserAccess', compact('UserAccess', $UserAccess));

        // $UserAccess = User_Access::find($request->request_id);
        // echo "fsafsa";

        // $requestId = $_GET['request'];
       
        // $Process_Request = Process_Request::find($requestId);

        // $Process_Request->request_status = "Declined";

        // $Process_Request->save();
        // User_Access::find($id)->update($request->all());

        // return redirect()->route('hod.index')
        //     ->with('success', 'Request Declined');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $UserAccess = User_Access::where('request_id',$id)->first();

        return view('HOD.HOD_Edit_UserAccess', compact('UserAccess', $UserAccess));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $UserAccess = User_Access::find($id);
        $UserAccess->first_name = $request->fname;
        $UserAccess->last_name = $request->lname;
        $UserAccess->department = $request->department;
        $UserAccess->designation = $request->designation;
        $UserAccess->working_hours = $request->workingHrs;
        $UserAccess->email = $request->email;

        $UserAccess->save();
        // User_Access::find($id)->update($request->all());

        return redirect()->route('hod.index')
            ->with('success', 'Request updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

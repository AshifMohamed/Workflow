<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Process_Request;
use App\User_Access;

class HOD_UserAccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $requests = Process_Request::where('hod_request', TRUE)->paginate(5);
        return view('HOD.HOD_home',compact('requests'))
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
        $Process_Request->request_status = "Processing";

        $Process_Request->save();
        
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

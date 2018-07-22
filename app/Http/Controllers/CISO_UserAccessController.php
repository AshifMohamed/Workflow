<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Process_Request;
use App\User_Access;

class CISO_UserAccessController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkCISO');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $requests = Process_Request::where('ciso_request', TRUE)->paginate(5);
        return view('CISO.CISO_dashboard',compact('requests',$requests))
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

            return view('CISO.CISO_View_UserAccess_Completed', compact('UserAccess', $UserAccess));

        }else {

            return view('CISO.CISO_View_UserAccess', compact('UserAccess', $UserAccess));

        }

    }

    public function declineRequestCISO()
    {
        //
        // return view('HOD.HOD_View_UserAccess', compact('UserAccess', $UserAccess));

        // $UserAccess = User_Access::find($request->request_id);
        // echo "fsafsa";

        $requestId = $_GET['request'];
       
        $Process_Request = Process_Request::find($requestId);

        $Process_Request->request_status = "Declined";

        $Process_Request->save();
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

        return view('CISO.CISO_UserAccess', compact('UserAccess', $UserAccess));
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
        $UserAccess->ciso = $request->ciso;

        $UserAccess->save();

        $Process_Request = Process_Request::find($UserAccess->request_id);

        $Process_Request->it_request = TRUE;

        $Process_Request->save();
        // User_Access::find($id)->update($request->all());

        return redirect()->route('ciso.index')
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

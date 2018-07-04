<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Str;

class Process_Request extends Model
{
    //
    protected $primaryKey = 'request_id';

    protected $fillable = [
        'request_type', 'hod_request', 'hr_request',
        'ciso_request','it_request','request_status',
    ];

    public function user_access()
    {
        return $this->belongsTo('App\User_Access','request_id');
    }

    public function isProcessing()
   {
       if(strcmp($this->request_status, 'Processing')==0)
        return true;
        else
        return false;
    
   } 

   public function isDeclined()
   {
    if(strcmp($this->request_status, 'Declined')==0)
    return true;
    else
    return false;
} 

   public function isCompleted()
   {
    if(strcmp($this->request_status, 'Completed')==0)
    return true;
    else
    return false;
} 
}

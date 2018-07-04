<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process_Request extends Model
{
    //
    protected $fillable = [
        'request_type', 'hod_request', 'hr_request',
        'ciso_request','it_request','request_status',
    ];

    public function user_access()
    {
        return $this->belongsTo('App\User_Access','request_id');
    }
}

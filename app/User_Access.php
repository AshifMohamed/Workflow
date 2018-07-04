<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Access extends Model
{
    //
    protected $primaryKey = 'user_access_id';

    protected $fillable = [
        'request_id', 'first_name', 'last_name',
        'department','designation','working_hours',
        'email','nic','gender','ciso','display_name',
        'logon_id',
    ];

    public function request()
    {
        return $this->hasOne('App\Process_Request','request_id');
    }
}

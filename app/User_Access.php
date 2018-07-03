<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Access extends Model
{
    //
    protected $fillable = [
        'request_id', 'first_name', 'last_name',
        'department','designation','working_hours',
        'email','nic','gender','ciso','display_name',
        'logon_id',
    ];

    public function request()
    {
        return $this->hasOne('App\Request','request_id');
    }
}
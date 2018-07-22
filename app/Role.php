<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $primaryKey = 'role_id';


    protected $fillable = [
        'role_name',
    ];

    public function users()
    {
        return $this->hasMany('App\User','role_id');
    }

}

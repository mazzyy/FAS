<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userrole extends Model
{
    protected $primaryKey = 'userRoleId';
    function get_roles(){
        return $this->hasMany('App\User', 'userRole');
    }
}

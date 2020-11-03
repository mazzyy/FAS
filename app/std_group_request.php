<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class std_group_request extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'resquestID';


    function requestor_user(){
        return $this->belongsTo('App\User', 'resquestID');
    }
}

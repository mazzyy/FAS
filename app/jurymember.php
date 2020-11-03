<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurymember extends Model
{
    protected $primaryKey = 'juryID';
    protected $fillable = [
        'userId', 'juryTeamId',
    ];

    function juryTeam_Members(){
        return $this->hasMany('App\User', 'id');
    }
    
}

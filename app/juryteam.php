<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class juryteam extends Model
{ 
    protected $primaryKey = 'juryTeamId';
    
    function jury_member(){
        return $this->hasMany('App\jurymember', 'juryTeamId');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\juryteam;

class myjuryteam extends Controller
{
    //

    

    function findjuryteam(Request $req){
        $current_std = $req->user()->id;
        $team = new juryteam;
        
        $all_users = DB::select("SELECT *
        FROM `jurymembers` j, users u
        WHERE j .userid = u.id ");

        

    //   dd($all_users);

      $x=DB::table('jurymembers')->where(['userid' => auth()->user()->id])->get('juryTeamId');
     
      $currentuserteam =$x[0];
      
      //
      $myArray = json_decode(json_encode($currentuserteam), true);
      $currentteamid=$myArray["juryTeamId"];
    
       $username = array();
        $i=0;   
        foreach($all_users as $member){
            
            
            $userid[$i]=$member->juryTeamId;
            if($userid[$i]== $currentteamid){
            $username[$i]=$member->name;
       
            $i=$i+1;    
            }   
           
        }
        
        
        return view('user_screen.myjuryteam')->with("username",$username)->with('role', 'Advisor');

        
        
    }
}

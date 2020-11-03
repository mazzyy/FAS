<?php

namespace App\Http\Controllers;
use App\std_group_request;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Requests extends Controller
{
    function StudentSendREQ(Request $req){
        $requestee_ID = $req->id;
        $requestor_ID = $req->user()->id;

        $requestor_req = new std_group_request;
        $requestor_req->requestorID = $requestor_ID;
        $requestor_req->requesteeID = $requestee_ID;
        $requestor_req->save();


  
     return response()->json('done');
    }


    function StudentAllREQ(Request $req){
        $current_std = $req->user()->id;
        $std_req = new std_group_request;
        $received_req = $std_req->with('requestor_user')->where('requestorID', $current_std )->get();
        //$test = $std_req->with('requestor_user')->find($received_req->requesteeID)->requestor_user;
        $username = array();
        $userid = array();
        $i=0;

        $all_users = DB::select("SELECT s.resquestID, s.requestorID, s.requesteeID, s.status, u1.id, u1.name, u1.email
        FROM `std_group_requests` s, users u, users u1 
        WHERE s.requesteeID = u.id and s.requestorID = u1.id
        and u.id = ".$current_std);

        foreach($all_users as $test){
           
            //$user = User::find($test->requesteeID);
            $userid[$i]=$test->requestorID;
            $username[$i]=$test->name;
            $i=$i+1;
            //  dd ($test->resquestID)  ; 
           
        }
        $i=0;
        foreach($received_req as $test){

           
            
            $user = User::find($test->requesteeID);
 
            $usernames[$i]=$user->name;
            $i=$i+1;
            //  dd ($test->resquestID)  ;
            // dd($user->name);    
        }  
                  

       
        return view('user_screen.std_all_req',)->with('role', 'Student')->with('testing',$username)->with('userid',$userid)->with('usernames',$usernames);;
    }
}

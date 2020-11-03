<?php

namespace App\Http\Controllers;

use App\userrole;
use App\juryteam;
use Illuminate\Http\Request;

class getUser_By_Role extends Controller
{
    public function advisors(){
        $advisors = userrole::find(5)->get_roles()->get();
        $juryTeams = new juryteam;
        $allTeams = $juryTeams::all();
        
        return view('user_screen.creat-jury')->with('role', 'Committee Member')->with('advisors', $advisors)->with('teamNames', $allTeams);
    }
}

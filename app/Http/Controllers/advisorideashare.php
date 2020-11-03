<?php

namespace App\Http\Controllers;

use App\advisoridea;
use Auth;
use Illuminate\Http\Request;

class advisorideashare extends Controller
{
    //
    function ad_ideasshare(){
        $IdeaList = new advisoridea;
        $currentUser_ideas = $IdeaList->orderBy('ideaID', 'DESC')->get();
        return view('user_screen.AdvisorIdeashare')->with('role', '')->with('ideasList', $currentUser_ideas);
    }
}

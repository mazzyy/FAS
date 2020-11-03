<?php

namespace App\Http\Controllers;
Use Redirect;
use Validator;
use Illuminate\Http\Request;
use App\juryteam;
use App\User;

class creatingJuryGroup extends Controller
{

    function create_group(Request $request){

        

        $rules = [
            'juryTeamName' => 'required|regex:/^[a-zA-Z]+$/u|unique:juryteams|min:1',
            'userId' => 'array|min:1|required',
        ];

        $messages = array(
            'juryTeamName.unique' => 'This team name has has already been taken. Please enter other name !',
            'userId.required' => 'In a team, minimum one member is required !',
        );

        $validation = Validator::make($request->all(), $rules, $messages);
        
        if($validation->passes()){
            $teamName = $request->input('juryTeamName');
            $selectedUsers = $request->input('userId');
            $team = new juryteam;
            $team->juryTeamName = $teamName;
            $team->save();        

            foreach($selectedUsers as $selectUser){
            $team->jury_member()->juryTeamId = $team->id;
            $team->jury_member()->create(['userId' => (int)$selectUser]);

            }

            return back()->with('Success', 'Team is Successfully Created !');
        }
        else{
            return Redirect::back()
                ->withErrors($validation)
                ->withInput($request->all);
        }

        
        
    }


    function team_detail_page($teamID){
        $team = new juryteam;
        $currentTeam = $team->find($teamID);
        $members = $team->with('jury_member')->find($teamID)->jury_member;
        $memberNames = new User;
        $userName = array();
        $userEmail = array();
        foreach($members as $member){
            
            $juryMemberName = $memberNames->where('id', $member->userId)->get();
                $userName[] = $juryMemberName[0]->name;
                $userEmail[] = $juryMemberName[0]->email;

        }
        
        return view('user_screen.juryteam_detail')->with('userName', $userName)->with('userEmail', $userEmail)->with('teamName', $currentTeam->juryTeamName );

        
        
    }
}

<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\Response;
class UserLogin extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function admin_page (Request $req){
            return view("user_screen.superAdmin")->with('role', 'Admin');
    }

    public function CM_head_page(Request $req){
        
        return view('user_screen.committeeHead')->with('role', 'Committee Head');
        
    }
    
    public function CommitteeMember(Request $req){
        return view('user_screen.CommitteeMember')->with('role', 'Committee Member');
    }

    public function Jury(Request $req){
        return view('user_screen/Jury')->with('role', 'Jury');
    }


    public function Student(Request $req){
        $user = new User;
        $current_user_id = $req->user()->id;
        $check_user_in_group = $user->with('user_team')->find($current_user_id)->user_team;
        if($check_user_in_group == NULL){
            
            $user_std = $user->with('user_team')->where('userRole', '=', 4 )->get();
            $users_not_in_group = array();
            $sentReq = 0;
            foreach($user_std as $free){
                $check_users_in_group = $user->with('user_team')->find($free->id)->user_team;
                if($check_users_in_group == NULL  && $free->id != $current_user_id ){
                    $check_user_requested = $user->find($current_user_id)->requestor_user()->where( 'requesteeID', '=', $free->id)->first();
                    if($check_user_requested == NULL){
                        $users_not_in_group[] = $free;
                    }
                   
                    
                }
            }

            return view('user_screen.Student_not_grouped_home')
                        ->with('role', 'Student')
                        ->with('users_not_in_group', $users_not_in_group);
        }
        return view('user_screen.Student_home')->with('role', 'Student');
        
    }


    public function Advisor(Request $req){
        return view('user_screen/Advisor')->with('role', 'Advisor');
    }

}

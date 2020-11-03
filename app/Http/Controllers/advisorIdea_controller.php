<?php


namespace App\Http\Controllers;

use Redirect;
use Validator;
use Illuminate\Http\Request;
use App\advisoridea;

use DB;
use App\User;
use Illuminate\Support\Facades\Auth;


class advisorIdea_controller extends Controller
{

    function uploadIdeaForm(Request $request){
        
        
        
        $rules = [
            'IdeaName' => 'required|regex:/^[a-zA-Z]+$/u|unique:advisorideas|min:3|max:50',
            'IdeaPDF' => 'required|mimes:pdf|max:10000',
        ];

        $messages = array(
            'IdeaName.unique' => 'Idea Name Has Been Taken!',
            'IdeaPDF.required' => 'Upload PDF File Only !',
            'IdeaPDF.mimes' => 'Upload PDF File Only !',
        );

        $validation = Validator::make($request->all(), $rules, $messages);
        
        if($validation->passes()){
            $ideaName = $request->input('IdeaName');
            $file = $request->file('IdeaPDF');
            
            $destinationPath = 'ideaPDF/';
            $originalFile = $file->getClientOriginalName();
            $current_time = strtotime(date('Y-m-d-H'));
            
            $filename = $current_time.$originalFile;
            $file->move($destinationPath, $filename);
            
            $IdeasAssetDB = new advisoridea;
            
            $IdeasAssetDB->IdeaName = $ideaName;
            $IdeasAssetDB->IdeaPDF = $filename;
            $IdeasAssetDB->advisorID = $request->user()->id;
            $IdeasAssetDB->save();

     
            

        
            return redirect()->back()->with('success', 'Success Fully Uploaded');
        }
        else{
            return Redirect::back()
                ->withErrors($validation);
        }
    }

    function ad_ideas(Request $request){
        $IdeaList = new advisoridea;
        $currentUser_ideas = $IdeaList->where('advisorID', Auth::id())->orderBy('ideaID', 'DESC')->get();
       
        $advisorname = $request->user()->name;
       
        return view('user_screen.AdvisorIdea')->with('role', 'Advisor')->with('ideasList', $currentUser_ideas)->with("advisorname",$advisorname);
    }
    
    
    function ad_ideasshare(){
        $IdeaList = new advisoridea;
        $currentUser_ideas = $IdeaList->orderBy('ideaID', 'DESC')->get();
        return view('user_screen.AdvisorIdeashare')->with('role', '')->with('ideasList', $currentUser_ideas);
    }

}   

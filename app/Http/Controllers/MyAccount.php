<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DB;

class MyAccount extends Controller
{
    //change name from myaccount
    public function changeName(Request $request)
    {
        $name= $request->input('name');
        
        $user = new User;
        //    

        //users==$users from database and auth()->user()-id is current id
        DB::table('users')->where(['id' => auth()->user()->id])
        ->update(array('name' => $name));  //

        
        
        
        return back();
    }

   //change password
    public function changePassword(Request $request)
    {
    
        $password= $request->input('password');
        $pass=Hash::make($password);
 
        $user = new User;
 
    //    print_r($password);
        DB::table('users')->where(['id' => auth()->user()->id])
        ->update(array('password' => $pass));  

        return back()->with('userCreated', 'Success Password Changed')->with('role', 'Admin');

    }

    public function changeImage(Request $request)
    {
        //  dd($request->file('file'));       

       if( $file=$request->file('file'))
       {
        $name=$file->getClientOriginalName();
            
             $uuid= Str::uuid()->toString();
             $randomName= substr($uuid, 0, 8);
        
             if($file->move('images', $randomName.$name )){
                 
             $user = new User;

             

             DB::table('users')->where(['id' => auth()->user()->id])
             ->update(array('image' => $randomName.$name));
             return back();
             }
            //  $user->save();

            return view("user_screen.myaccount")->with('userCreated', 'Unsuccess')->with('role', 'Admin');
       
       };
        
        
        // print_r($name);


       
    }



}

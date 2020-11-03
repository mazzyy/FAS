<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class userCreation extends Controller
{

    //form send to database
    public function send_email_to_reg_user(Request $request){
        $email = $request->input('email');
        $userRole = 3;
        $name = $request->input('comMember-Name');
        
        $user = new User;

        //random string generator
        $uuid= Str::uuid()->toString();
        $pass= substr($uuid, 0, 8);
        //convert password to HASH 
        $password=Hash::make($pass);
 
        //send data to user database through $user 
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->userRole =$userRole;


        $user->save();

        //message
        switch ($user->userRole) {
            case '3':
                $rolee='committee Member';
                break;
            case '2':
                $rolee='committee Head';
                break;
        }


        //send mail
        Mail::send('file', ['Name' => $user->name,'Email'=> $user->email,'Password'=> $pass,'Role'=> $rolee], 
        function ($m) use ($user) {
            $m->from('admin@maju.edu.pk');

            $m->to($user->email, 'elbiheiry')->subject('Account Created on FAS');
        });

        


     
        return view("user_screen.superAdmin-createComm")->with('userCreated', 'Success')->with('role', 'Admin');
    }
}

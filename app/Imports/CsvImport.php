<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CsvImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function  __construct($role)
    {
        $this->role = $role;
    }
    public function model(array $row)
    {
        
//new object for sending info to Mail::send
        $user = new User;   

        $uuid= Str::uuid()->toString();
        $pass= substr($uuid, 0, 8);
        $password=Hash::make($pass);

        if($this->role == 4){
            $userRole = 'Student';
        }
        elseif($this->role == 5){
            $userRole = 'Advisor';
        }

        return new User([
            'name'      =>  $row["name"],
            'email'     =>  $row["email"],
            'password'  =>  Hash::make($pass),
            'userRole'  =>  $this->role,

            $user->name =   $row["name"],
            $user->email =  $row["email"],
            $user->password = Hash::make($pass),
            

            Mail::send('file', ['Name' => $user->name,'Email'=> $user->email,'Password'=> $pass,'Role'=> $userRole   ], 
            function ($m) use ($user) {
                $m->from('admin@maju.edu.pk');
    
                $m->to($user->email, 'elbiheiry')->subject('Account Created on FAS');
            })


            ]);   
    }



}

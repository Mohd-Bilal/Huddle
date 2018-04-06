<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserController extends Controller{

public function landing(){
    return redirect()->route('signup');
}    
public function go_to_signup(Request $request){
        return view('signup',["Error"=>""]);

}
public function signup(Request $request){
        
        if($request['password'] == $request['cpassword']){
        DB::table('users_table')->insert([
            'First_Name' => $request['fname'],
            'Last_Name' => $request['lname'],
            'Password' => $request['password'],
            'DOB' => $request['dob'],
            'Email' => $request['email'],
            'Mobile No' => $request['Mobile']
        ]);  
        return view('Home');    
        
    }
    else{    
        return view('signup',["Error"=>"Passwords do not match"]);    
        
    }
}
}
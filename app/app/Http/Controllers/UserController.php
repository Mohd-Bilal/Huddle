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
        return view('signup');

}
public function signup(Request $request){
        DB::table('users_table')->insert([
            'First_Name' => $request['fname'],
            'Last_Name' => $request['lname'],
            'Password' => $request['password'],
            'DOB' => $request['dob'],
            'Email' => $request['email'],
            'Mobile No' => $request['Mobile']
        ]);
        return view('signin');
    }

public function signin(Request $request){
      $password = DB::table('users_table')->where('Email',$request['email'])->value('Password');
      if( $password == $request['password']){
         return view('nextpage');
      }
      else {
         return view('signin',['Error'=>'Wrong password']);
      }
}
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller{

public function landing(){
    return redirect()->route('signup');
}    
public function go_to_signup(Request $request){
        return view('signup');

}
public function signup(Request $request){
    
}
}
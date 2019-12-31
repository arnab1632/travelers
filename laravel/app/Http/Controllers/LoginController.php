<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\user;

class LoginController extends Controller
{
    public function index(){


		return view('login.index');
	}


public function verify(Request $req){

		

		$user = user::where('email', $req->email)
					->where('password', $req->password)
					-> get();
				

		if(count($user) > 0 ){
	
			
			$req->session()->put('user', $user);

			return redirect()->route('home.index');
		}else{

			$req->session()->flash('msg', 'invalid username/password');

			return redirect('/login');
		}
	}




}

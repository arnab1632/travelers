<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\freak;
use App\travel_agencie;
use Validator;


class RegistrationController extends Controller
{
    public function index(){
		return view('registration.index');
	}

	public function freaks(){

		return view('registration.freaks');
	}


	public function insertFreaks(Request $req){



		  $validation = Validator::make($req->all(), [

		  	'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
            'gender'=>'required'
            
        ]);


		 if($validation->fails()){
            return redirect()->route('registration.freaks')
                            ->with('errors', $validation->errors())
                            ->withInput();
        }


        $freak= new freak();
        $freak->name = $req->name;
        $freak->email =$req->email;
        $freak->phone =$req->phone;
        $freak->gender =$req->gender;
        $freak->password =$req->password;
        $freak->profile_pic='/abc';


		$user = new user();
        $user->name = $req->name;
        $user->email =$req->email;
        $user->password =$req->password;
        $user->user_type ='freaks';
        $user->active_status ='1';
        

        if($user->save()&&$freak->save()){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('registration.freaks')
                                       ->withInput();                   
        }
		

	}



	public function agencies(){



		return view('registration.agencies');
	}


	public function insertAgencies(Request $req){

		 $validation = Validator::make($req->all(), [

		  	'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
            'gender'=>'required'
            
        ]);


		 if($validation->fails()){
            return redirect()->route('registration.agencies')
                            ->with('errors', $validation->errors())
                            ->withInput();
        }



        $agencies= new travel_agencie();
        $agencies->name = $req->name;
        $agencies->email =$req->email;
        $agencies->agency_name=$req->agencyname;
        $agencies->phone =$req->phone;
        $agencies->gender =$req->gender;
        $agencies->password =$req->password;
        $agencies->profile_pic='/abc';


        $user = new user();
        $user->name = $req->name;
        $user->email =$req->email;
        $user->password =$req->password;
        $user->user_type ='agencies';
        $user->active_status ='1';




         if($user->save() && $agencies->save()){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('registration.agencies')
                                       ->withInput();                   
        }


		
	}



}

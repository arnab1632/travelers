<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\blog;
use App\freak;

class FreaksController extends Controller
{
    public function index(Request $req){

    	$freak=freak::where('email',$req->session()->get('user')[0]['email'])
    				  ->get();

    	$req->session()->put('freak',$freak);

		return view('freaks.index');
	}

	public function edit_profile(){
		return view('freaks.edit_profile');
	}



	public function updateProfile(Request $req){


		//image 

		if($req->hasfile('inputImage')){
			$file=$req->file('inputImage');
			$filename= $file->getClientOriginalName();
			$path = $file->storeAs('images',$filename);
			$file->move('images', $file->getClientOriginalName());
		}
		else
		{
			$path =$req->session()->get('freak')[0]['profile_pic'];

		}

		

		//update both database
		$user = user::find($req->session()->get('user')[0]['id']);
		
        $user->name = $req->inputName;
        $user->password = $req->inputPassword;
        $freak = freak::find($req->session()->get('freak')[0]['id']);
      
        $freak->name = $req->inputName;
        $freak->password = $req->inputPassword;
        $freak->phone = $req->inputPhone;
        $freak->profile_pic=$path;


        
        if($user->save() && $freak->save()){

        	$user = user::where('email',$req->session()->get('user')[0]['email'])
        				->get();
        	$req->session()->put('user', $user);

            return redirect()->route('freaks.index');
        }else{
            return redirect()->route('freaks.edit_profile');
                                                    
        }
		
	}



	public function write_blog(){

		return view('freaks.write_blog');
	}


	public function insertBlog(Request $req){


		if($req->hasfile('inputImage')){
			$file=$req->file('inputImage');
			$filename= $file->getClientOriginalName();
			$path = $file->storeAs('images',$filename);
			$file->move('images', $file->getClientOriginalName());
		}

		$todayDate = date("Y-m-d");


		$blog= new blog();
		$blog->title=$req->inputTittle;
		$blog->location=$req->inputLocation;
		$blog->description=$req->description;
		$blog->date=$todayDate;
		$blog->image=$path;
		$blog->postby=$req->session()->get('user')[0]['email'];
		$blog->name=$req->session()->get('user')[0]['name'];
		$blog->catagory='blog';
		$blog->status='1';

		if($blog->save()){
            return redirect()->route('blogs.index');
        }else{
            return redirect()->route('freaks.write_blog')
                                       ->withInput();                   
        }

	
	
	}


	public function edit($id){


		$blog = blog::where('id',$id)
					  -> get();


		return view('freaks.edit')->with('blog',$blog);
	}


	public function updateBlog($id,Request $req)

	{	

		//image 

		if($req->hasfile('inputImage')){
			$file=$req->file('inputImage');
			$filename= $file->getClientOriginalName();
			$path = $file->storeAs('images',$filename);
			$file->move('images', $file->getClientOriginalName());
		}
		else
		{
			$blogImage = blog::where('id',$id)
					     -> get();

			
			$path =$blogImage[0]['image'];

		}


		$blog = blog::find($id);
		$blog->title=$req->inputTittle;
		$blog->location=$req->inputLocation;
		$blog->description=$req->description;
		$blog->image=$path;


		if($blog->save()){

            return redirect()->route('freaks.edit_blog');
        }else{
            return redirect()->route('freaks.edit');
                                                    
        }


	}



	public function edit_blog(Request $req){


		$blog = blog::where('postby',$req->session()->get('user')[0]['email'])
					  ->where('status',1)
					  -> get();

		//dd($blog);

		return view('freaks.edit_blog')->with('blog',$blog);
	}

	public function delete_blog($id){
		
		//dd($id);

		$blog = blog::find($id);

		//dd($blog);
		$blog->status='0';

        
        if($blog->save()){

            return redirect()->route('freaks.edit_blog');
        }else{
            return redirect()->route('freaks.edit_blog');
                                                    
        }

	}

	public function pin_post(){
		return view('freaks.pin_post');
	}

	public function book_events(){
		return view('freaks.book_events');
	}

	public function history(){
		return view('freaks.history');
	}

	public function messages(){
		return view('freaks.messages');
	}

	public function notifications(){
		return view('freaks.notifications');
	}
}

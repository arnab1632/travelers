<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;

class EventsController extends Controller
{
    public function index(){

    	$eventCount=event::all()
    			   ->count();

    	$event=event::all();


		return view('events.index')->with('count',$eventCount)
								  ->with('event',$event);


 }

	public function event_details($id){


		$event=event::where('id',$id)
					->get();

		return view('events.event_details')->with('event',$event);

	}

	public function book_now($id){

		$event=event::where('id',$id)
					->get();
		return view('events.book_now')->with('event',$event);
	}

	
}

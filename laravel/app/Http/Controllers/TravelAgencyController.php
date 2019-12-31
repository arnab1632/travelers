<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelAgencyController extends Controller
{
    public function index(){
		return view('travel_agency.index');
	}

	public function edit_profile(){
		return view('travel_agency.edit_profile');
	}

	public function offer_events(){
		return view('travel_agency.offer_events');
	}

	public function edit_events(){
		return view('travel_agency.edit_events');
	}

	public function delete_events(){
		return view('travel_agency.delete_events');
	}

	public function history(){
		return view('travel_agency.history');
	}

	public function booked_events(){
		return view('travel_agency.booked_events');
	}

	public function messages(){
		return view('travel_agency.messages');
	}

	public function notifications(){
		return view('travel_agency.notifications');
	}


}

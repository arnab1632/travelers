@extends('travel_agency.layout')
  @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>History</h1>
        </div>
      </div>

     

      <div class="alert alert-info"> 
        <strong><a href="/events/event_details/">""</a></strong>&nbsp event post is approved by admin.
      </div>
      

      

      <div class="alert alert-danger">
        <strong>""</strong>&nbsp event post is declined/deleted.
      </div>
      

    </main>
  @endsection

@section('title')
Notificatons
@endsection
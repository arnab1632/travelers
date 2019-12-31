@extends('travel_agency.layout')
  @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>Profile</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 mx-auto">
          <div class="card card-signin my-4">
            <div class="card-body">
                <div class="form-label-group my-4 text-center">
                  <img src="/images/freaks.png" alt="User Image" height="150px" width="150px" style=" border-radius: 50%;">
                </div>
                <div class="form-label-group my-4">
                  <p name="inputName">Name:   </p>
                </div>

                <div class="form-label-group my-4">
                  <p name="inputAgency">Agency Name:   </p>
                </div>

                <div class="form-label-group my-4">
                  <p name="inputName">Email Address:  </p>
                </div>

                <div class="form-label-group my-4">
                  <p name="inputName">Phone No: </p>
                </div>

                <div class="form-label-group my-4">
                  <p name="inputName">Gender: </p>
                </div>
            </div>
          </div>
        </div>
    </main>

@endsection

@section('title')
Profile
@endsection
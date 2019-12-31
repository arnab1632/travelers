@extends('travel_agency.layout')
  @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>Edit Profile</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card card-signin my-4">
            <div class="card-body">
              <form class="form-signin" method="post">
                  <div class="form-label-group my-4">
                    <input type="text" id="inputName" name="inputName" class="form-control" placeholder="Name" required value="">
                    <label for="inputName">Name</label>
                  </div>

                  <div class="form-label-group my-4">
                    <input type="text" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email" required value="" disabled>
                    <label for="inputEmail">Email</label>
                  </div>

                  <div class="form-label-group my-4">
                    <input type="text" id="inputAgencyname" name="inputAgencyname" class="form-control" placeholder="Agency name" required value="">
                    <label for="inputAgencyname">Agency name</label>
                  </div>
    
                  <div class="form-label-group my-4">
                    <input type="text" id="inputPhone" name="inputPhone" class="form-control" placeholder="Phone No" required value="">
                    <label for="inputPhone">Phone No</label>
                  </div>

                  <div class="form-label-group my-4">
                    <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required value="">
                    <label for="inputPassword">Password</label>
                  </div>
                    
                  <div class="form-label-group my-4">
                    <input type="password" id="inputConfirmPassword" name="inputConfirmPassword" class="form-control" placeholder="Password" required value="">
                    <label for="inputConfirmPassword">Confirm password</label>
                  </div>
    
                  <div class="form-label-group my-4">
                    <input id="inputImage" name="inputImage" value="" class="form-control" type="file">
                  </div>



                <button class="btn btn-lg btn-block my-4" type="submit">Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection

@section('title')
Edit Profile
@endsection
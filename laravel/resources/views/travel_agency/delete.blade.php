@extends('travel_agency.layout')
  @section('content')
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Edit Events</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card card-signin my-4">
            <div class="card-body">
              <form class="form-signin" method="post">
                <div class="form-label-group my-4">
                  <p name="inputTittle">Tittle: <%=event.title%></p>
                </div>

                <div class="form-label-group my-4">
                  <p name="inputAgencyname">Agency name: <%=event.agencyname%></p>
                </div>

                <div class="form-label-group my-4">
                  <p for="inputDate">Date: <%=event.date%></p>
                </div>

                <div class="form-label-group my-4">
                  <p for="inputDescription">Description: <%=event.description%></p>
                </div>

                <div class="form-label-group my-4">
                  <p for="inputPerson">Person Capacity: <%=event.person_capacity%></p>
                </div>
                
                <div class="form-label-group my-4">
                  <p for="inputPrice">Price Per Person: <%=event.cost_per_person%></p>
                </div>
                <div class="form-label-group my-4">
                   <p for="inputPrice">Image: <img src="<%=event.image%>" height="65px" width="100px"></p>
                </div>

                <div class="form-label-group my-4">
                  <p for="inputPerson">Are you want to delete it?</p>
                  <a href=""> <button class="btn btn-lg btn-block" type="submit">Confirm</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection

@section('title')
Delete
@endsection
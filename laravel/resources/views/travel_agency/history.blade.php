@extends('travel_agency.layout')
  @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>History</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <p>Approved Event</p>
                  <thead>
                    <tr>
                      <th>Tittle</th>
                      <th>Agency name</th>
                      <th>Place</th>
                      <th>Date</th>
                      <th>Duration</th>
                      <th>Description</th>
                      <th>Person Capacity</th>
                      <th>Price Per Person</th>
                      <th>Image</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><img src="" height="65px" width="100px"></td>
                    </tr>
                  </tbody>
                  
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <p>Declined/Deleted Event</p>
                  <thead>
                    <tr>
                      <th>Tittle</th>
                      <th>Agency name</th>
                      <th>Place</th>
                      <th>Date</th>
                      <th>Duration</th>
                      <th>Description</th>
                      <th>Person Capacity</th>
                      <th>Price Per Person</th>
                      <th>Image</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><img src="" height="65px" width="100px"></td>
                    </tr>
                  </tbody>
                 

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection

@section('title')
History
@endsection
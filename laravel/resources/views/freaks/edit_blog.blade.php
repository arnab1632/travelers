@extends('freaks.layout')
  @section('content')
  
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Edit Blog</h1>
        </div>
      </div>

    
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                  
                <table class="table table-hover table-bordered" id="sampleTable">
             
                  <thead> 
                   
                    <tr>
                      <th>Tittle</th>
                      <th>Location</th>
                      <th>Post Date</th>
                      <th>Image</th>
                      <th>Edit</th>
                      <th>Delete Blog</th>
                    </tr>
                  </thead>
                   
               @foreach($blog as $b)
                      
                  <tbody>    
                    
                      
                       
                      <tr>
                     
                      <td>{{$b->title}}</td>
                      <td>{{$b->location}}</td>
                      <td>{{$b->date}}</td>
                      <td><img  src="\{{$b->image}}" height="65px" width="100px"></td>
                      <td>
                        <a href="{{route('freaks.edit',$b->id)}}"> <button class="btn btn-lg btn-dark" type="submit">Edit</button></a>
                          
                      </td>
                          
                      <td>
                        <a href="{{route('freaks.delete_blog',$b->id)}}"> <button class="btn btn-lg btn-danger" type="submit" >Delete</button></a>
                      </td>
                        
                    </tr>
                      
                  </tbody>
                @endforeach
                </table>
                 
                  
              </div>
            </div>
          </div>
        </div>
      </div>



    </main>

@endsection

@section('title')
Edit Blog
@endsection
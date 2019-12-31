@extends('freaks.layout')
  @section('content')
  
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Message</h1>
        </div>
      </div>

   
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                   
                <table class="table table-hover table-bordered" id="sampleTable">
                      <form class="form-signin" method="post">  
                 
            <% for(var i=0 ; i < data.length; i++ ) { %>

              <div class="alert alert-info">
                <strong><a href="">"<%=data[i].sendername %>" </a> </strong>&nbsp  sent you:&nbsp;  <strong><%=data[i].text%></strong>    
           &nbsp; &nbsp;  &nbsp; at &nbsp;  <%=data[i].date %>
            </div>
            <% } %>
     
                          
                <thead> 
            
                    <tr>
                      <th>Send Message to</th>
                      <th> user type   </th>
                       <th> write message  </th>
                      <th>  </th>
                    </tr>
                  </thead>
                          
    
                   
                 <% for(var i=0 ; i < freaks.length; i++ ) { %>
                      
                  <tbody>    
                    
                      
                       
                      <tr>
                     
                      <td><%=freaks[i].name%></td>
                      <td> <%=freaks[i].user_type%></td>
                       <td> <input type="text" id="reciver" name="reciver"> </td> 
                      <td>
                        <input type="hidden" name="rmail" value="<%=freaks[i].email%>">
                        <a href="/freaks/messages/<%=freaks[i].email%>/name"> <button class="btn btn-lg btn-block" type="submit" value="submit">send message </button></a>
                          
                      </td>
                          
                     </from>
                        
                    </tr>
                      
                  </tbody>
                <% }%>
                    
                </table> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection

@section('title')
Messages
@endsection
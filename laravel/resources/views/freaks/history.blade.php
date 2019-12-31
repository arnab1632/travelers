@extends('freaks.layout')
  @section('content')
  
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>History </h1>
        </div>
      </div>

      
        <% for(var i=0 ; i < booking.length; i++ ) { %>

      <div class="alert alert-info">
        <strong><a href="/events/event_details/<%=booking[i].eventid%>">"THIS EVENT " </a> </strong>&nbsp you Have to Register at <%=booking[i].date %>
      </div>
    <% } %>
        
        
      <% for(var i=0 ; i < data.length; i++ ) { %>

      <div class="alert alert-danger">
        <strong><a href="/blog/blog_details/<%=data[i].postid%>">"COMMENT" </a> </strong>&nbsp  you posted a Comment..<%=data[i].date %>
      </div>
    <% } %>
        
           <% for(var i=0 ; i < notification.length; i++ ) { %>

      <div class="alert alert-sucess">
        <strong><a href="/events/event_details/<%=notification[i].eventid%>">"REPORT" </a> </strong>&nbsp to Admin on  <%=notification[i].date %>
      </div>
    <% } %>
        

    </main>

@endsection

@section('title')
History
@endsection
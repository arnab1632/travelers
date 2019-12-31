<?php


	Route::get('/login', 'LoginController@index')->name('login.index');
    Route::post('/login', 'LoginController@verify');

    Route::get('/logout', 'LogoutController@index');


	Route::get('/registration/index', 'RegistrationController@index')->name('registration.index');
	Route::get('/registration/freaks', 'RegistrationController@freaks')->name('registration.freaks');
    Route::post('/registration/freaks', 'RegistrationController@insertFreaks');
	Route::get('/registration/agencies', 'RegistrationController@agencies')->name('registration.agencies');
    Route::post('/registration/agencies', 'RegistrationController@insertAgencies');

	
    Route::get('/home', 'HomeController@index')->name('home.index');


	Route::get('/blogs', 'BlogsController@index')->name('blogs.index');
	Route::get('/blogs/blog_details/{id}', 'BlogsController@blog_details')->name('blogs.blog_details');

	Route::get('/events', 'EventsController@index')->name('events.index');
	Route::get('/events/event_details/{id}', 'EventsController@event_details')->name('events.event_details');
	Route::get('/events/book_now/{id}', 'EventsController@book_now')->name('events.book_now');


 

    Route::group(['middleware'=>['sess']], function(){


    Route::post('/blog/comment/{id}','BlogsController@insertComment')->name('blogs.comment');

    Route::get('/profile', 'ProfileController@index');

    Route::get('/freaks/index', 'FreaksController@index')->name('freaks.index');
    
	Route::get('/freaks/index', 'FreaksController@index')->name('freaks.index');
    Route::get('/freaks/edit_profile', 'FreaksController@edit_profile')->name('freaks.edit_profile');
    Route::post('/freaks/edit_profile', 'FreaksController@updateProfile');

    Route::get('/freaks/write_blog', 'FreaksController@write_blog')->name('freaks.write_blog');
    Route::post('/freaks/write_blog', 'FreaksController@insertBlog');

    Route::get('/freaks/edit/{id}', 'FreaksController@edit')->name('freaks.edit');
    Route::post('/freaks/edit/{id}', 'FreaksController@updateBlog');

    Route::get('/freaks/edit_blog', 'FreaksController@edit_blog')->name('freaks.edit_blog');
    Route::get('/freaks/delete_blog/{id}', 'FreaksController@delete_blog')->name('freaks.delete_blog');
    Route::get('/freaks/pin_post', 'FreaksController@pin_post')->name('freaks.pin_post');
    Route::get('/freaks/book_events', 'FreaksController@book_events')->name('freaks.book_events');
    Route::get('/freaks/history', 'FreaksController@history')->name('freaks.history');
    Route::get('/freaks/messages', 'FreaksController@messages')->name('freaks.messages');
    Route::get('/freaks/notifications', 'FreaksController@notifications')->name('freaks.notifications');


    Route::get('/travel_agency/index', 'TravelAgencyController@index')->name('travel_agency.index');
    Route::get('/travel_agency/edit_profile', 'TravelAgencyController@edit_profile')->name('travel_agency.edit_profile');
    Route::get('/travel_agency/offer_events', 'TravelAgencyController@offer_events')->name('travel_agency.offer_events');
    Route::get('/travel_agency/edit_events', 'TravelAgencyController@edit_events')->name('travel_agency.edit_events');
    Route::get('/travel_agency/delete_events', 'TravelAgencyController@delete_events')->name('travel_agency.delete_events');
    Route::get('/travel_agency/history', 'TravelAgencyController@history')->name('travel_agency.history');
    Route::get('/travel_agency/booked_events', 'TravelAgencyController@booked_events')->name('travel_agency.booked_events');
    Route::get('/travel_agency/messages', 'TravelAgencyController@messages')->name('travel_agency.messages');
    Route::get('/travel_agency/notifications', 'TravelAgencyController@notifications')->name('travel_agency.notifications');


});
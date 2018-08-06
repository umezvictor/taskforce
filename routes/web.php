<?php

/*
|--------------------------------------------------------------------------
| Web Routes
 Here is where you can register web routes for your application. These
routes are loaded by the RouteServiceProvider within a group which
 contains the "web" middleware group. Now create something great!

*/
//single / without anything else means the home page
Route::get('/', 'PagesController@index');
Route::get('contact', 'PagesController@getContact');//display contact form
Route::post('contact', 'PagesController@postContact');//process contact form
Route::get('/signup', 'UserController@getSignup');

Route::post('/signup', 'UserController@postSignup');
//signout
Route::get('/logout', 'UserController@signout');

Route::get('/signin', 'UserController@getSignin');//display login form
Route::post('/signin', 'UserController@postSignin');//process login form

//redirect to this page after successful login
Route::get('/profile', function(){
    return view('users.profile');
});

//after email has been sent
Route::get('verify/{email}/{verify_token}', 'UserController@sendEmailDone')->name('sendEmailDone');


//admin page
Route::get('/admin', 'AdminController@getAdminPage')->middleware('myauth');

Route::resource('category', 'CategoryController'); //faster way of acccesing routes within a controller

//display page to create ticket
Route::get('/tickets', 'TicketsController@index');

//submit ticket
Route::post('/sendticket', 'TicketsController@store')->name('tickets.store');
Route::get('/show', 'TicketsController@show');//display tickets

Route::get('/deleteTicket/{id}', 'TicketsController@delete');
Route::get('/download/{myfilename}', 'TicketsController@downloadFile');


//display services page
Route::get('/booking', 'ServicesController@index');
Route::resource('booknow', 'ServicesController');

//display booking in backend
Route::get('/bookings', 'ServicesController@displayBookings')->middleware('myauth');

//submit booking form
Route::post('savebooking', 'ServicesController@storeBooking');

//search for services
Route::get('/search', 'ServicesController@search');
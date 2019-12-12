<?php

// Home page route
Route::get('/','HomeController@index');

// About page route
route::get('/Aboutus','AboutusController@index');

// Contact Us page route
route::get('/ContactUs','ContactusController@index');

//SignIn page route
route::get('/SignIn','SigninController@index');

//Signup Page route
route::get('/SignUp','SignupController@index');

//Events page route
route::get('/Event','EventController@index');

//donations page route
route::get('/donation','DonationController@index')->name('donation.index');         // name: is to name the route instead of rewriting the route every where if you choose to change the route;

//product insert page and submit to database route
route::get('/donation/create','DonationController@create');              //product insert page
route::post('/createaction','DonationController@productstore')->name('actionstore');          //submit button action to save into database

// Gallery page route
route::get('/Gallery','GalleryController@index');

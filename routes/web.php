<?php

// Home page route
Route::get('/','HomeController@index');

// About page route
route::get('/Aboutus','AboutusController@index');

// Contact Us page route
route::get('/Contactus','ContactusController@index');
route::post('/Contactus','ContactusController@create');
//SignIn page route
route::get('/Signin','SigninController@index');

//Signup Page route
route::get('/Signup','SignupController@index');

//Events page route
route::get('/event','EventController@index')->name('event.index');  

route::get('/event/create','EventController@create');   
route::post('/createevent','EventController@eventstore')->name('action');

//donations page route
route::get('/donation','DonationController@index')->name('donation.index');         // name: is to name the route instead of rewriting the route every where;

//product insert page and submit to database route
route::get('/donation/create','DonationController@create');              //product insert page
route::post('/createaction','DonationController@productstore')->name('actymionstore');    //submit button action to save into database

// Gallery page route
route::get('/Gallery','GalleryController@index');

route::get('/Organization','OrganizationController@index');
route::post('/Organization/createOrg','OrganizationController@orgstore')->name('storeInDB');
route::get('/Organization/create','OrganizationController@create'); 



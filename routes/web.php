<?php

// Home page route
Route::get('/','HomeController@index');
// Route::get('/view',);
// About page route
route::get('/aboutus','AboutusController@index');

// Contact Us page route
route::get('/contactus','ContactusController@index');

//SignIn page route
// route::get('/signin','HomeController@signin');

// //Signup Page route
// route::get('/signup','HomeController@signup');

//Events page route
route::get('/event','EventController@index')->name('event.index');


route::get('/event/create','EventController@create');
route::post('/createevent','EventController@eventstore')->name('action');

//donations page route
route::get('/donation','DonationController@index')->name('donation.index');         // name: is to name the route instead of rewriting the route every where if you choose to change the route;

//product insert page and submit to database route
route::get('/donation/create','DonationController@create');              //product insert page
<<<<<<< HEAD
route::post('/createaction','DonationController@productstore')->name('actionstore');          //submit button action to save product

route::get('/category/create','CategoryController@create');
route::post('/newcategory','CategoryController@store')->name('newcategory');
=======
route::post('/createaction','DonationController@productstore')->name('actionstore');    //submit button action to save into database

// Gallery page route
route::get('/gallery','GalleryController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 4839849b3d5e5f8a07fc8fd0c1aff6b3f09b9a04

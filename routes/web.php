<?php
use Carbon\Carbon;// باش تتعرب التواريخ
Carbon::setLocale('ar_LY'); // باش تتعرب التواريخ
// Home page route
Route::get('/','HomeController@index');
Route::get('/view/{id}','HomeController@view');
Route::get('/viewe/{id}','HomeController@viewe');
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
route::post('/createaction','DonationController@productstore')->name('actionstore');          //submit button action to save product

route::get('/category/create','CategoryController@create');
route::post('/newcategory','CategoryController@store')->name('newcategory');

// Gallery page route
route::get('/gallery','GalleryController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

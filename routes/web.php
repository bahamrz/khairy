<?php
use Carbon\Carbon;// باش تتعرب التواريخ
Carbon::setLocale('ar_LY'); // باش تتعرب التواريخ

// Home page route
Route::get('/','HomeController@index');
Route::get('/view/{id}','HomeController@view')->middleware('auth');
Route::get('/viewe/{id}','HomeController@viewe')->middleware('auth');
Route::post('/reserve/{id}','HomeController@store');

// About page route
route::get('/aboutus','AboutusController@index');

// Contact Us page route
route::get('/contactus','ContactusController@index');
route::post('/contactus','ContactusController@create');
//SignIn page route
// route::get('/signin','HomeController@signin');

// //Signup Page route
// route::get('/signup','HomeController@signup');

//Events page route
route::get('/event','EventController@index')->name('event.index');

route::get('/event/create','EventController@create');
route::post('/createevent','EventController@eventstore')->name('newevent');

//donations page route
route::get('/donation','DonationController@index')->name('donation.index');         // name: is to name the route instead of rewriting the route every where;

//product insert page and submit to database route
route::get('/donation/create','DonationController@create');              //product insert page
route::post('/createaction','DonationController@productstore')->name('actionstore');          //submit button action to save product

route::get('/category/create','CategoryController@create');
route::post('/newcategory','CategoryController@store')->name('newcategory');

route::get('/productstatus/create','StatusController@create');
route::post('/newstatus','StatusController@store')->name('newstatus');

route::get('/donation/{id}/edit','DonationController@edit');   //product edit (page)
route::patch('/donation/{id}','DonationController@update');     //product update (action_button)
Route::delete('/donation/{id}','DonationController@destroy'); // delete a product



// Gallery page route
route::get('/gallery','GalleryController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// organization page route
route::get('/organization','OrganizationController@index');
route::get('/organization/create','OrganizationController@create');
route::post('/createorganization','OrganizationController@organizationstore')->name('neworganization');



route::get('/user','UserProfileController@index');

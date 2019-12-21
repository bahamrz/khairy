<?php
use Carbon\Carbon;// باش تتعرب التواريخ
Carbon::setLocale('ar_LY'); // باش تتعرب التواريخ

// Home page route
Route::get('/','HomeController@index');
Route::get('/view/{id}','HomeController@view');
Route::get('/viewe/{id}','HomeController@viewe');

// About page route
route::get('/Aboutus','AboutusController@index');

// Contact Us page route
route::get('/Contactus','ContactusController@index');
route::post('/Contactus','ContactusController@create');
//SignIn page route
// route::get('/signin','HomeController@signin');

// //Signup Page route
// route::get('/signup','HomeController@signup');

//Events page route
route::get('/event','EventController@index')->name('event.index');

route::get('/event/create','EventController@create');
route::post('/createevent','EventController@eventstore')->name('action');

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
<<<<<<< HEAD
route::get('/Gallery','GalleryController@index');

route::get('/Organization','OrganizationController@index');
route::post('/Organization/createOrg','OrganizationController@orgstore')->name('storeInDB');
route::get('/Organization/create','OrganizationController@create'); 


=======
route::get('/gallery','GalleryController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> cf0dff0b7a131d1f41102796cff15e08252a44d7

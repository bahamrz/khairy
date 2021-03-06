<?php
use Carbon\Carbon;// باش تتعرب التواريخ
Carbon::setLocale('ar_LY'); // باش تتعرب التواريخ

// Home page route
Route::get('/','HomeController@index');
Route::get('/view/{id}','HomeController@view')->middleware('auth');
Route::get('/viewe/{id}','HomeController@viewe')->middleware('auth');
Route::get('/reserve/{id}','HomeController@store')->middleware('auth');

// About page route
route::get('/aboutus','AboutusController@index');

// Contact Us page route
route::get('/contactus','ContactusController@index');
route::post('/contactus','ContactusController@create');
route::post('/contactus/send','ContactusController@send')->name('sendMessage');
//SignIn page route
// route::get('/signin','HomeController@signin');

// //Signup Page route
// route::get('/signup','HomeController@signup');

//Events page route
route::get('/event','EventController@index')->name('event.index');

route::get('/event/create','EventController@create')->middleware('auth');
route::post('/createevent','EventController@eventstore')->name('newevent');
//participation test
route::get('/createpart/{id}','PartController@partstore')->name('store');

//donations page route
route::get('/donation','DonationController@index')->name('donation.index');         // name: is to name the route instead of rewriting the route every where;

//product insert page and submit to database route
route::get('/donation/create','DonationController@create');              //product insert page
route::post('/createaction','DonationController@productstore')->name('actionstore');          //submit button action to save product

route::get('/category/create','CategoryController@create');
route::post('/newcategory','CategoryController@store')->name('newcategory');

route::get('/productstatus/create','StatusController@create')->middleware('auth');
route::post('/newstatus','StatusController@store')->name('newstatus');

route::get('/donation/{id}/edit','DonationController@edit')->middleware('checkuser');   //Only Creator + Admin can edit (page)
route::patch('/donation/{id}','DonationController@update');     //product update (action_button)
Route::delete('/donation/{id}','DonationController@destroy'); // delete a product


// Gallery page route
route::get('/gallery','GalleryController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// organization page route
route::get('/organization','OrganizationController@index');
route::get('/organization/create','OrganizationController@create')->middleware('auth');
route::post('/createorganization','OrganizationController@organizationstore')->name('neworganization');

//User Profile Page route
route::get('/user','UserProfileController@show')->name('user');
route::get('/user/{id}/edit','UserProfileController@edit');
route::patch('/user/update/{id}','UserProfileController@update');
//Yousra Routes
// route::get('/user','UserProfileController@index')->name('user');
// route::post('/user/update/{id}','UserProfileController@update')->name('user.update');

route::get('/Baha', function(){return view('welcome');}); //Baha Is Testing
Route::resource('/admin/users','Admin\UsersController')->middleware('can:manage-users'); //Baha is Here
Route::get('/admin/listall','Admin\UsersController@donationlist')->middleware('can:manage-users'); // delete a product
Route::get('/admin/listalle','Admin\UsersController@eventlist')->middleware('can:manage-users'); // delete a product

//event edit & update & delete & participation

route::get('/event/{id}/edit','EventController@edit')->middleware('auth');
route::patch('/event/{id}','EventController@update')->middleware('auth');
Route::delete('/event/{id}','EventController@destroy')->middleware('auth');
route::post('/event/participation/{id}','EventController@ParticipationEvent')->middleware('auth');
Route::delete('/event/participation/{id}','EventController@DeleteParticipationEvent')->middleware('auth');


// product_resarvation & DELETE IT
ROUTE::post('/product/resarvation/{id}','DonationController@RsarvationProduct')->middleware('auth');
Route::delete('/product/resarvation/{id}','DonationController@DeleteRsarvationProduct')->middleware('auth');

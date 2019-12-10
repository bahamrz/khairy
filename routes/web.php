<?php
Route::get('/', function () {
    return view('Home');
});
route::get('/AboutUs', function(){
    return view('AboutUs');
});
route::get('/ContactUs', function(){
return view('ContactUs');
});
route::get('/SignIn',function(){
    return view('SignIn');
});
route::get('/SignUp',function(){
    return view('SignUp');
});
route::get('/Events','EventController@index');

route::get('/donations','DonationsController@index');

route::get('/Gallery',function(){
    return view('Gallery');
});

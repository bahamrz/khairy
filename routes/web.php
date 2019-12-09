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
route::get('Events',function(){
    return view('Events');
});
route::get('Donations',function(){
    return view('Donations');
});
route::get('Gallery',function(){
    return view('Gallery');
});
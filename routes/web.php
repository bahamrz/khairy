<?php

Route::get('/','HomeController@index');

route::get('/Aboutus','AboutusController@index');

route::get('/ContactUs','ContactusController@index');

route::get('/SignIn','SigninController@index');

route::get('/SignUp','SignupController@index');

route::get('/Event','EventController@index');

route::get('/donation','DonationController@index');

route::get('/Gallery','GalleryController@index');

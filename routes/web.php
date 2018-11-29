<?php

use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('login');
});

Route::post('/home', 'LoginController@login');
Route::get('/home', 'LoginController@index');
Route::get('/logout', 'LoginController@logout');


Route::group(['middleware' => 'koneksi'], function(){
  //PPP Route
  Route::get('/ppp', 'PPPController@showSecret');
  Route::post('/ppp/secret/add', 'PPPController@addSecret');
  Route::get('/ppp/secret/disable/{id}', 'PPPController@disable_Secret');
  Route::get('/ppp/secret/enable/{id}', 'PPPController@enable_Secret');
  Route::get('/ppp/secret/remove/{id}', 'PPPController@remove_Secret');


  //Route Hotspot
  Route::get('/hotspot/add-user', 'HotspotController@index');
  Route::post('/hotspot/create-user', 'HotspotController@hotspot_create_user');
  Route::get('/hotspot/all-user', 'HotspotController@hotspot_all_user');


});












View::composer('*', function ($view) {
    $data = new LoginController();

    $user = session()->get('username');
    $username = strtoupper($user);
    $view->with('user', $username);

});

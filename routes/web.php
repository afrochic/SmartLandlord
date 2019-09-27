<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});
=======
Route::get('/', function () { // the slash means homePage
    return view('');
});

//bett's  edit
Route::get('/main', 'Controller@index');// route to login page
Route::post('/main/checklogin', 'Controller@checklogin');
Route::get('/main/logout', 'Controller@logout');  // to logout
//end of bett's edit

/*Route::get('/welcome',function(){
	return view('welcome');
}); */

>>>>>>> 536063ca2aa1cd12ad3bc18c1bf0354cbaff6c87
Route::get('/home',function(){
	return view('home');
});
Route::get('/profits',function(){
	return view('profits');
});
Route::get('/buildings',function(){
	return view('buildings');
});
<<<<<<< HEAD

Route::get('/payments',function(){
	return view('payments');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
>>>>>>> 536063ca2aa1cd12ad3bc18c1bf0354cbaff6c87

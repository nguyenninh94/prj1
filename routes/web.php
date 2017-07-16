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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['middleware' => ['api', 'cors'], 'prefix' => 'api'], function() {
	Route::post('register', 'APIController@register');
	Route::post('login', 'APIController@login');
	Route::group(['middleware' => 'jwt-auth'], function() {
		Route::post('get_user_details', 'APIController@get_user_details');
	});
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('resizeImage', 'APIController@resizeImage');
Route::post('resizeImagePost', [
   'as' => 'resizeImagePost',
   'uses' => 'APIController@resizeImagePost'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('dropzone', 'APIController@dropzone');
Route::post('dropzone/store', ['as'=>'dropzone.store','uses'=>'APIController@dropzoneStore']);

Route::resource('/post', 'Posts1Controller');
Route::resource('/video', 'VideoController');
Route::resource('/post2', 'Post2Controller');


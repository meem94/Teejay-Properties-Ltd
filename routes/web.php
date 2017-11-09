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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home',['as'=>'property1','uses'=>'AdminController@index2']);
Route::get('/test',['as'=>'12fdg','uses'=>'Test@index']);

Route::view('/our_properties', 'our_properties');
Route::get('/property_1',['as'=>'property1','uses'=>'PropertyController@index1']);
Route::get('/property_2',['as'=>'property2','uses'=>'PropertyController@index2']);
Route::get('/property_3',['as'=>'property3','uses'=>'PropertyController@index3']);

Route::group(['middleware' => ['auth']], function() {
	Route::get('/admin',['as'=>'admin','uses'=>'AdminController@index1']);
	Route::get('/admincontrol.property1',['as'=>'property1','uses'=>'AdminController@index2']);
	Route::get('/admincontrol.property2',['as'=>'property2','uses'=>'AdminController@index3']);
	Route::get('/admincontrol.property3',['as'=>'property3','uses'=>'AdminController@index4']);
	Route::POST('/admin/insert/{id}', ['as'=>'InsertProperyImage','uses'=>'AdminController@save']);
	Route::POST('/admin/delete/{id}', ['as'=>'DeleteProperyImage','uses'=>'AdminController@delete']);
	Route::POST('/admin/edit/{id}', ['as'=>'EditProperyImage','uses'=>'AdminController@update']);
});

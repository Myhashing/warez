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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    Route::resource('/permission','PermissionController');
    Route::resource('/role','RoleController');
    Route::post('/role/permission/{role}','RoleController@updatePermission')->name('role.permission');
    Route::resource('/user','UserController');

});

Route::get('/test',function(){
   // Auth::loginUsingId(1);


    return view('test');
});
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
    Route::resource('/admin/permission','AdminPermissionController');
    Route::resource('/admin/role', 'AdminRoleController');
    Route::post('/admin/role/permission/{role}','AdminRoleController@updatePermission')->name('admin.role.permission');
    Route::resource('/admin/user','AdminUserController');
    Route::post('/admin/user/role/{user}','AdminUserController@updateUserRoles')->name('admin.user.role');

});


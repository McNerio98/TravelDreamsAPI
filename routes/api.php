<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::resource('packages','Api\PackageController');
Route::get('/packages','Api\PackageController@index');
Route::get('/packages/populars','Api\PackageController@populars');
Route::get('/packages/{id}','Api\PackageController@show');
Route::get('/packages/category/{id}','Api\PackageController@getByCategory');

//Route::resource('comercial','Api\ComercialController');

<?php

use Illuminate\Http\Request;

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

Route::group(['middleware' => ['cors']], function () {
    Route::get('foo', function () {
        return 'Hello World++++';
    });

    //广告轮播图
    Route::get('ad/getById', 'API\ADController@getById');
    Route::get('ad/getListByCon', 'API\ADController@getListByCon');
});


//Route::middleware('auth:api')->get('/user', function (Request $request) {
////    return $request->user();
//    return $request;
//});

//Route::get('/user', 'UsersController@index');
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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//Route::resource('balls', 'Ball\BallController', ['only' => ['index', 'show']]);
//Route::resource('balls', 'Ball\BallController', ['except' => ['index', 'show']]);
Route::prefix('api')->group(function () {
    Route::resource('balls', 'Ball\BallController');
    Route::resource('users', 'User\UserController');

    //Route::post('auth/register', 'Auth\AuthController@register');    
    Route::post('register', 'Auth\AuthController@register');
    Route::post('login', 'Auth\AuthController@authenticate');
    Route::post('recover', 'Auth\AuthController@recover');
    Route::group(['middleware' => ['jwt.auth']], function () {
        Route::get('logout', 'Auth\AuthController@logout');
    });
});

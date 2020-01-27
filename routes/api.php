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

// https://www.youtube.com/watch?v=OJtGeqgXwfo
// https://www.youtube.com/watch?v=isTZTfJV0-I&t=211s

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'Api\AuthTokenController@register');
Route::post('/login', 'Api\AuthTokenController@login');

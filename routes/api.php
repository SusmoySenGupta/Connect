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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('post/{post_id}', 'Api\ProfileApiController@hide');
Route::get('follow/{following_id}/{user_id}', 'Api\ProfileApiController@follow');

// function () {
//     return response()->json([
//         'hide' => true
//     ]);
// }

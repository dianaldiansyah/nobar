<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/upload', 'App\Http\Controllers\VideoController@formUploadVideo');
Route::post('/upload', 'App\Http\Controllers\VideoController@uploadVideo');
Route::get('/', 'App\Http\Controllers\VideoController@getVideos');
Route::get('/video/{id}', 'App\Http\Controllers\VideoController@formEditVideo');
Route::patch('/video/{id}', 'App\Http\Controllers\VideoController@editVideo');
Route::delete('/video/{id}', 'App\Http\Controllers\VideoController@deleteVideo');

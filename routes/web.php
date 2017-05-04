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
Route::get('/show-colums', function () {
    return view('show-colums');
});
Route::get('/keywords', function () {
    return view('keywords');
});
Route::post('/uploaded',   ['as'=>'post.uploaded' , 'uses' => 'UploadController@getHeaders']);

Route::get('/column',['as'=>'post.column', 'uses'=>'UploadController@getKeywords']);

Route::post('/keys', ['as'=>'post.keys', 'uses'=>'UploadController@deleteRows']);
Route::get('downloadExcel/csv', 'UploadController@download');
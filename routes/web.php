<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

Route::get('/ff', function() {
    return view('final');
});

Route::post('/uploaded',   ['as'=>'post.uploaded' , 'uses' => 'UploadController@uploadCsv']);

Route::post('/keys', ['as'=>'post.keys', 'uses'=>'UploadController@keys']);
Route::get('/column',['as'=>'post.column', 'uses'=>'UploadController@storeColumn']);

Route::get('downloadExcel/csv', 'UploadController@download');
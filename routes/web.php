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
/*
Route::get('show-colums', function(Request $request) {
    $uploaded_csv = $request->file('file');
     
       $header = NULL;
	$data = array();
	if (($handle = fopen($uploaded_csv,'r')) !== FALSE)
	{
            while (($row = fgetcsv($handle, 1000)) !== FALSE)
            {
                if(!$header)
                    $header = $row;
		else
                    $data[] = array_combine($header, $row);
            }
		fclose($handle);
	}
	return redirect('/show-colums')->with($data);
        
    }
);
*/
Route::post('/uploaded',   ['as'=>'post.uploaded' , 'uses' => 'uploadController@uploadCsv']);

Route::post('/keys', ['as'=>'post.keys', 'uses'=>'uploadController@keys']);
Route::get('/column',['as'=>'post.column', 'uses'=>'uploadController@storeColumn']);

Route::get('downloadExcel/csv', 'UploadController@download');
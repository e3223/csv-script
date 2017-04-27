<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadCsv(Request $request){
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
	return view('result')->with('data',$data);
        
    }
}

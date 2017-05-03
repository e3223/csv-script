<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;

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
        \Session::put('data', $data);
            return view('result')->with('data',$data);       
    }
    
    public function storeColumn(Request $request){
        $column = $request->column; 
        \Session::put('column', $column);
        
            return view('keywords');
    }
 
    public function keys(Request $request){
        $row_value = explode("\r\n", $request->row_value);
        $col_value = \Session::get('column');
        $data = \Session::get('data');
	$resulted = array();
        
        foreach ( $data as $key => $value )
        {
            if ( !in_array($value[$col_value], $row_value) )
            {
                $resulted[] = $data[$key];
            }
        }
        \Session::put('parsed', $resulted);
            
            return view('final');     
    }
       
    public function download() {
        $data = \Session::get('parsed');
            return Excel::create('result_file', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
	        {
                    $sheet->fromArray($data);
	        });
		})->download('csv');
        
    }
} 


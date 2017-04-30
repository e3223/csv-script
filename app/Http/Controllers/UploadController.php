<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
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
    
   /* public function deleteRow(Request $request){
       	$col_value = $request->column;
	$row_value = $request->row_value;
        $data = $request->data; 
	foreach ( $data as $key => $value )
    {
        if ( $value[$col_value] == $row_value )
        {
            unset( $data[$key] );
        }
    }
	
	return $data; 
    }*/
    
    //get csv-data and send colmn value to next view(/keywords)
    public function storeColumn(Request $request){
        $data = $request->get('data');
        $column = $request->column;
        
        return view('keywords')
                ->with('column',$column)
                ->with('data',$data);
    }
    //get keys and values to delete row
    public function keys(Request $request){
        $row_value = $request->row_value;
        $col_value = $request->column;
        $data = $request->get('data');
	
        foreach ( $data as $key => $value )
    {
        if ( $value[$col_value] == $row_value )
        {
            unset( $data[$key] );
        }
    }
	 $fp = fopen('new.csv', w);
            foreach($data as $fields){
                fputcsv($fp, $fields);
            }
                fclose($fp);
        //return $data;
	//return view('final')->with($data); 
    } 
}

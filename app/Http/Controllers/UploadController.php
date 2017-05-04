<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;

class UploadController extends Controller
{
    /*opens csv-file and store it as array in session*/
    public function getHeaders(Request $request)
    {
        $uploaded_csv = $request->file('file');
        $header       = NULL;
        $data         = array();
        if (($handle       = fopen($uploaded_csv, 'r')) !== FALSE) {
            while (($row = fgetcsv($handle, 1000)) !== FALSE) {
                if (!$header) {
                    $header = $row;
                } else {
                    $data[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }
        \Session::put('data', $data);

        return view('result')->with('data', $data);
    }

    /* getting keywords from input and storing it in session */
    public function getKeywords(Request $request)
    {
        $column = $request->column;
        \Session::put('column', $column);

        return view('keywords');
    }

    /* getting all needed values from session and input,
    *  processing and exporting it to cvs-file('result_file') via "laravel excel",
    *  downloads reslut file*/
    public function deleteRows(Request $request)
    {
        $row_value = explode("\r\n", $request->row_value);
        $col_value = \Session::get('column');
        $data      = \Session::get('data');
        $resulted  = array();

        foreach ($data as $key => $value) {
            if (!preg_match('/'.implode('|', $row_value).'/i',
                    $value[$col_value], $matches)) {
                $resulted[] = $data[$key];
            }
        }
        \Session::put('parsed', $resulted);

        return Excel::create('result_file',
                function($excel) use ($resulted) {
                $excel->sheet('mySheet',
                    function($sheet) use ($resulted) {
                    $sheet->fromArray($resulted);
                });
            })->download('csv');
    }
}
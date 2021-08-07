<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use App\Imports\DbImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\XlsExport;

class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
        $data=[];

        // Retriving Models
        $tbls=ImportController::getModels(app_path() . "/Model");

        // Retriving name and fields of Models as key=>value
        foreach ($tbls as $key => $value) {
            $fn=last(explode("\\",$value)); // Retriving fully qualified name of model
            $fn=Str::replace('app', 'App', $fn);
            $fn=Str::replace('/', '\\', $fn);
            $n= Str::snake(last(explode("/",$value))); // Retriving last element of array as snake_case
            $data[$n] = [$fn.":".$n]; // Retriving columns of tables from db schema
        }
        /*
        Model file name must be in PascalCase
        and the model class name inside the file must be in snake_case inorder to work
        dd($data) if you see any import mistakes to verify the correct name and fields are retrived
        */
        return view('import')->with('models', $data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('file')->getRealPath();
        $import = new DbImport($request->models);
        $import->import($path);
        
        // Collecting error or sucess message
        $msg=(count($err=$import->errors()))?$err[0]->getMessage():$request->models.' File imported '.$import->track.' fields successfully';
        return back()->withStatus($msg);
    }

    // For form sample download
    public function export(Request $request) 
    {
        $export = new XlsExport($request->models);
        return Excel::download($export, $export->modelName.'.xlsx');
    }

    // Scan given path and return the name of file without extension
    protected static function getModels($path)
    {
        $out = [];
        $results = scandir($path);
        foreach ($results as $result) {
            if ($result === '.' or $result === '..') continue; // Avoiding . and .. folders
            $filename = $path . '/' . $result;
            if (is_dir($filename)) {
                $out = array_merge($out, ImportController::getModels($filename)); // Recurssion if path is dir
            }else{
                $out[] = substr($filename,0,-4); // Removing .php extension from name
            }
        }
        return $out;
    }

    public function test()
    {
        $data=[];

        // Retriving Models
        $tbls= ImportController::getModels(app_path() . "/Model");

        // Retriving name and fields of Models as key=>value
        foreach ($tbls as $key => $value) {
            $fn=last(explode("\\",$value)); // Retriving fully qualified name of model
            $fn=Str::replace('app', 'App', $fn);
            $fn=Str::replace('/', '\\', $fn);
            $n= Str::snake(last(explode("/",$value))); // Retriving last element of array as snake_case
            $data[$n] = [$fn, Schema::getColumnListing($n)]; // Retriving columns of tables from db schema
        }
        
        // Output dump
        dd($data); 
    }
}

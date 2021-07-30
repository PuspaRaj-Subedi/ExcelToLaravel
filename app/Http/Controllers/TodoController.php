<?php

namespace App\Http\Controllers;

use App\Imports\TodosImport;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;


class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // Scan given path and return the name of file without extension
        function getModels($path)
        {
            $out = [];
            $results = scandir($path);
            foreach ($results as $result) {
                if ($result === '.' or $result === '..') continue; // Avoiding . and .. folders
                $filename = $path . '/' . $result;
                if (is_dir($filename)) {
                    $out = array_merge($out, getModels($filename)); // Recurssion if path is dir
                }else{
                    $out[] = substr($filename,0,-4); // Removing .php extension from name
                }
            }
            return $out;
        }

        $data=[];

        // Retriving Models
        $tbls=getModels(app_path() . "/Models");

        // Retriving name and fields of Models as key=>value
        foreach ($tbls as $key => $value) {
            $n= \Str::snake(last(explode("/",$value))); // Retriving last element of array as snake_case
            $data[$n] = \Schema::getColumnListing($n); // Retriving columns of tables from db schema
        }

        /*
        Model file name must be in PascalCase
        and the model class name inside the file must be in snake_case inorder to work
        dd($data) if you see any import mistakes to verify the correct name and fields are retrived
        */

        // dd($data); 

        return view('todo')->with('models', $data );
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // $path1 = $request->file('file')->store('temp');
        // $path=public_path('app').'/'.$path1;

        $import = new TodosImport;
        $import->import($path);
       // dd($import->errors());
        // Excel::import(new TodosImport, $file);
        return back()->withStatus('Excel File imported successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
      */
    // public function show(Todo $todo)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        //
    }
}

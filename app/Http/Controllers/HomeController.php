<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function test()
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
        $tbls=getModels(app_path() . "/Model");

        // Retriving name and fields of Models as key=>value
        foreach ($tbls as $key => $value) {
            $fn=last(explode("\\",$value)); // Retriving fully qualified name of model
            $fn=\Str::replace('app', 'App', $fn);
            $fn=\Str::replace('/', '\\', $fn);
            $n= \Str::snake(last(explode("/",$value))); // Retriving last element of array as snake_case
            $data[$n] = [$fn, \Schema::getColumnListing($n)]; // Retriving columns of tables from db schema
        }

        /*
        Model file name must be in PascalCase
        and the model class name inside the file must be in snake_case inorder to work
        dd($data) if you see any import mistakes to verify the correct name and fields are retrived
        */

        dd($data); 
    }

    
}

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
        // $path = app_path() . "/Models";

        // function getModels($path){
        //     $out = [];
        //     $results = scandir($path);
        //     foreach ($results as $result) {
        //         if ($result === '.' or $result === '..') continue;
        //         $filename = $path . '/' . $result;
        //         if (is_dir($filename)) {
        //             $out = array_merge($out, getModels($filename));
        //         }else{
        //             $out[] = substr($filename,0,-4);
        //         }
        //     }
        //     return $out;
        // }

        // dd(getModels($path));
        function getModels($path, $namespace){
            $out = [];

            $iterator = new \RecursiveIteratorIterator(
                new \RecursiveDirectoryIterator(
                    $path
                ), \RecursiveIteratorIterator::SELF_FIRST
            );
            foreach ($iterator as $item) {
                /**
                 * @var \SplFileInfo $item
                 */
                if($item->isReadable() && $item->isFile() && mb_strtolower($item->getExtension()) === 'php'){
                    $out[] =
                        str_replace("/", "\\", mb_substr($item->getRealPath(), mb_strlen($path), -4));
                }
            }
            return $out;
    }
    $models = getModels(app_path("Models/"), "App\\Models\\");

    return view('todo')->with('models', $models );
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

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/todo/imports/test', [App\Http\Controllers\ImportController::class, 'test'])->name('test');
Route::get('/todo/imports',[App\Http\Controllers\ImportController::class,'show']);
Route::post('/todo/imports',[App\Http\Controllers\ImportController::class,'store'])->name('import.store');
Route::post('/todo/download/sample',[App\Http\Controllers\ImportController::class,'export'])->name('export');

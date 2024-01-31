<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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
 Route::get('/about',[\App\Http\Controllers\AboutController::class,'index']);
 Route::get('/contact',[\App\Http\Controllers\Contact::class,'index']);

 //view route

 Route::view('register','register');

 //post route

 Route::post('register/save',[\App\Http\Controllers\RegisterContriller::class,'save']);

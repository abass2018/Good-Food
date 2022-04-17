<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\IndexController;

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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::post('insert-contact',[ContactController::class,'insert']);
Route::get('index-contact',[ContactController::class,'index']);
//Route::resource('order', OrderController::class);
Route::get('admin-index',[IndexController::class,'index']);
Route::get('delete-contact/{id}',[ContactController::class,'destroy']);

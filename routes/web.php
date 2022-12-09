<?php

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

Route::get('/password', function () {
    return \Hash::make('123');
});


Route::get('/image', function () {
    return view('image');
});

Route::post('/image', [App\Http\Controllers\ImageController::class,'index'])->name('image');


Route::get('/show', [App\Http\Controllers\ShowController::class,'index'])->name('show');
Route::post('/localityManageAjax', [App\Http\Controllers\ShowController::class,'showPagination'])->name('localityManageAjax');

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/testevent', function () {
    // return view('welcome');
    // event(new \App\Events\TestEvent());
    event(new \App\Events\MessageEvent('dsfvsdgdfsgr fyf'));
});

Route::post('channelmessage',[App\Http\Controllers\API\ChannelController::class,'index']);
Route::get('serverdatatable',[App\Http\Controllers\ShowController::class,'showPaginate']);


Route::middleware(['ipcheck'])->group(function () {
    Route::prefix('v1')->group(function () {
        Route::get('getip',[App\Http\Controllers\ShowController::class,'ShowIp']);
        Route::get('index1',[App\Http\Controllers\ShowController::class,'index1']);
    });
});
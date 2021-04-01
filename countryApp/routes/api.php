<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\CountriesController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'cities'], function(){
    Route::get('/', [CitiesController::class, 'index']);
    Route::get('/{id}', [CitiesController::class, 'getCity']);
});
Route::group(['prefix'=>'countries'], function(){
    Route::get('/', [CountriesController::class, 'index']);
    Route::get('/{id}', [CountriesController::class, 'getCountry']);
});

Route::group(['prefix'=>'states'], function(){
    Route::get('/', [StatesController::class, 'index']);
    Route::get('/{id}', [StatesController::class, 'getState']);
    Route::get('/{id}/cities', [StatesController::class, 'getStateCities']);
});
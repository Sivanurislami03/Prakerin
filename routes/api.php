<?php

use App\Models\Kasus;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;


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

// API Provinsi
Route::get('provinsi', [ProvinsiController::class, 'index']);
Route::post('provinsi', [ProvinsiController::class, 'store']);
Route::get('provinsi/{id?}', [ProvinsiController::class, 'show']);
Route::post('provinsi/update/{id?}', [ProvinsiController::class, 'update']);
Route::post('provinsi/{id?}', [ProvinsiController::class, 'destroy']);

// API Kasus
Route::get('kasus', [ApiController::class, 'index']);
Route::get('provinsii/{id?}', [ApiController::class, 'provinsi']);

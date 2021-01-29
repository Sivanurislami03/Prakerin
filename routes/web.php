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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');

use App\Http\Controllers\ProvinsiController;
Route::resource('provinsi', ProvinsiController::class);

use App\Http\Controllers\KotaController;
Route::resource('kota', KotaController::class);

use App\Http\Controllers\KecamatanController;
Route::resource('kecamatan', KecamatanController::class);

use App\Http\Controllers\KelurahanController;
Route::resource('kelurahan', KelurahanController::class);

use App\Http\Controllers\RwController;
Route::resource('rw', RwController::class);

use App\Http\Controllers\KasusController;
ROute::resource('kasus', KasusController::class);

Route::view('states-city','livewire.home');
    
//  Route::group(['prefik' => 'backed','middleware' => 'auth'], function() {
//     Route::get('test', function() {
//         return view('halo'); });
    
//     Route::get('helo', function() {
//         return view('helo'); }); 
// });
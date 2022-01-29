<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ZonesController;
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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
    Route::get('/zones/{id}', [ZonesController::class, 'show'])->name('zones');
    Route::post('/zones/update/{id}', [ZonesController::class, 'update'])->name('zone_file.update');
    Route::get('/sketr', function () {
        return view('sketr');
    });
    Route::get('/zone-A', function () {
        return view('zone-A');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

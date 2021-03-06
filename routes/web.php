<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ZonesController;
use App\Http\Controllers\Admin\SketrController;
use App\Http\Controllers\Admin\UsersController;
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
    //zone
    Route::get('/zones/{id}', [ZonesController::class, 'show'])->name('zones');
    Route::post('/zones/update/{id}', [ZonesController::class, 'update'])->name('zone_file.update');
    Route::post('/zones/update_progress/{id}', [ZonesController::class, 'update_progress'])->name('zone.update_progress');
   //sketr
    Route::get('/sketrs/{id}', [SketrController::class, 'show'])->name('sketrs');
    Route::post('/sketr/update/{id}', [SketrController::class, 'update'])->name('sketr_file.update');
    //users
    Route::get('users', [UsersController::class,'index']);
    Route::get('users/create', [UsersController::class,'create']);
    Route::post('users/store', [UsersController::class,'store'])->name('users.store');
    Route::get('users/{id}/edit', [UsersController::class,'edit'])->name('users.edit');
    Route::post('users/{id}/update', [UsersController::class,'update'])->name('users.update');
    Route::get('users/{id}/delete', [UsersController::class,'destroy']);

    //front
    Route::get('/sketr', function () {
        return view('sketr');
    });
    Route::get('/zone-A', function () {
        return view('zone-A');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

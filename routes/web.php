<?php

use App\Http\Controllers\RolesController;
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
    return view('welcomeabc');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', function() {
    return view('dashboard/dashboard');
})->name('dashboard');

//Route::get('/dashboard/roles', [App\Http\Controllers\RolesController::class, 'index'])->name('roles');


Route::group(['prefix' => 'dashboard'], function() {
    Route::resource('roles', RolesController::class);
});


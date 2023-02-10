<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/aboutMe', [App\Http\Controllers\aboutController::class, 'aboutM'])->name('aboutMe');
Route::get('/findMe', [App\Http\Controllers\findController::class, 'findM'])->name('findMe');
Route::get('/catalog', [App\Http\Controllers\findController::class, 'catalogMe'])->name('catalog');

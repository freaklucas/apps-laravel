<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControlller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeControlller;
//use App\Http\Controllers\Auth;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])
    ->name('admin.dashboard');

Route::get('/admin/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'index'])
    ->name('admin.login');

Route::post('/admin/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])
    ->name('admin.login.submit');
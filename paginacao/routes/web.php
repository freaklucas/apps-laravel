<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

//Route::get('/', [App\Http\Controllers\ClienteControlador::class, 'index']);
Route::get('/', [App\Http\Controllers\ClienteControlador::class, 'indexjs']);
Route::get('/json', [App\Http\Controllers\ClienteControlador::class, 'indexjson']);

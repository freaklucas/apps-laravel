<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access;
use Illuminate\Validation\Rule;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\AutenticadorControlador;
use App\Http\Controllers\ProdutosControlador;


use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;

// Route::middleware('auth:api')->get('/usuario', function (Request $request) {
    
//     return $request->user();
// });

// Route::post('/cadastro', function(Request $request){
//     $data = $request->all();

//     $validacao = Validator::make($data, [
//         'name' => 'required|string|max:255',
//         'email' => 'required|string|email|max:255|unique:users',
//         'password' => 'required|string|min:6|confirmed'
//     ]);

//     if($validacao->fails()) {
        
//         return $validacao->errors();
//     } 

//     $user = User::create([
//         'name'=> $data['name'],
//         'email'=> $data['email'],
//         'password'=> bcrypt($data['password']),
//     ]);
    
//     $user->token = $user->createToken($user->email)->accessToken;
    
//     return $user;
// });

// Route::post('/login', function(Request $request) {
//     $data = $request->all();

// });

/*
Route::prefix('auth')->group(function () {
    Route::post('registro', [AutenticadorControlador::class, 'registro']);
    Route::middleware('auth:api')->group(function () {
        Route::post('logout', [AutenticadorControlador::class, 'logout']);
    });
});
Route::post('login', [AutenticadorControlador::class, 'login'])->middleware('auth');

Route::get('produtos', [ProdutosControlador::class, 'index'])->middleware('auth:api');
*/

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
     
Route::middleware('auth:api')->group( function () {
    Route::resource('products', ProductController::class);
});
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontApi\AuthController;
use App\Http\Controllers\FrontApi\ProductsController;
use App\Http\Controllers\FrontApi\UserController;




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




Route::get('/home'    ,[ProductsController::class,'index']);
Route::post('/cart'    ,[ProductsController::class,'cart']);

Route::post('/search'    ,[ProductsController::class,'search']);

Route::post('register',[AuthController::class,'RegisterUser']);
Route::post('login'   ,[AuthController::class,'LoginToken']);





Route::group(['middleware' => 'auth:sanctum'], function () {
	Route::get('user'   ,[AuthController::class,'getUser']);
	
	Route::post('intent'   ,[UserController::class,'get_intent']);

    Route::post('logout'   ,[AuthController::class,'LogoutUser']);
});



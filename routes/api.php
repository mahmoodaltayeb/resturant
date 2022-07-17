<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\UserController;
use App\Http\Controllers\API\V1\CityController;
use App\Http\Controllers\API\V1\DistrictController;
use App\Http\Controllers\API\V1\LoginController;
use App\Http\Controllers\API\V1\AccountController;
use App\Http\Controllers\API\V1\CategoryController;
use App\Http\Controllers\API\V1\MealController;
use App\Http\Controllers\API\V1\OrderController;
use App\Http\Controllers\API\V1\CartController;


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



#users
Route::get('/show-users', [UserController::class, 'showUsers']);
Route::post('/register', [UserController::class, 'doRegister']);


Route::get('/cities', [CityController::class,'index']);
Route::post('/districts', [DistrictController::class, 'index']);

# Login Routes
Route::post('/login', [LoginController::class, 'doLogin']);


Route::group(['middleware' => 'auth:api'], function(){

# Account rout
    Route::get('/account', [AccountController::class, 'account']);
# cart rout
    Route::post('/cart', [CartController::class, 'index']);

});

Route::get('/categories',[CategoryController::class,'index']);
Route::post('/meals',[MealController::class,'index']);
Route::post('/orders', [OrderController::class, 'index']);




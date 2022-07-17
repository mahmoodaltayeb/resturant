<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MealController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\MealImageController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\MenuController;
use App\Http\Controllers\Web\WebReservationController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\AjaxController;
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

# Auth routes
Route::get('/sign-in', [AuthController::class , 'index'])->name('login');
Route::post('/login', [AuthController::class , 'doLogin']);
Route::get('/logout', [AuthController::class , 'logout']);

Route::get('/', function () { return view('admin.home.index');});

// middleware group
// Route::group(['middleware' => 'auth'], function() {

// users 
Route::prefix('users')->group(function () {
	Route::get('/', [UserController::class , 'index']);
	Route::get('/create', [UserController::class , 'create']);
	Route::post('/store', [UserController::class , 'store']);
	Route::get('/edit/{id}', [UserController::class , 'edit']);
	Route::post('/update/{id}', [UserController::class , 'update']);
	Route::get('/destroy/{id}', [UserController::class , 'destroy']);
});
# user roles 
Route::resource('roles',RoleController::class);
# categories
Route::resource('categories',CategoryController::class);
# meals
Route::resource('meals',MealController::class);
# orders
Route::resource('orders',OrderController::class);
# reservations
Route::resource('reservations',ReservationController::class);
# tables
Route::resource('tables',TableController::class);
# cities
Route::resource('cities',CityController::class);
# districts
Route::resource('districts',DistrictController::class);
# Meal images
Route::resource('mealimages',MealImageController::class);
# discricts by city
Route::post('districts-by-city',[DistrictController::class , 'districtsByCity']);
//});
Route::get('/admin-layout', function () {return view('layout');});


// Web routes
# Home 
Route::get('/home',[HomeController::class ,'index']);
# Menu routes
Route::get('/menu',[MenuController::class ,'index']);
# Auth route
Route::prefix('web')->group(function () {
	Route::get('/login', 	         [App\Http\Controllers\Web\AuthController::class,'index']);
	Route::post('/do-login',         [App\Http\Controllers\Web\AuthController::class,'doLogin']);
	Route::get('/logout',    		 [App\Http\Controllers\Web\AuthController::class,'logout']);
	Route::get('/registration-page', [App\Http\Controllers\Web\AuthController::class,'registration']);
});

# Booking 
Route::get('/web-reservation',  [App\Http\Controllers\Web\ReservationController::class,'index']);
Route::post('/store',		    [App\Http\Controllers\Web\ReservationController::class,'store']);
Route::get('/user-reservations',[App\Http\Controllers\Web\ReservationController::class,'show']);
# Cart 
Route::get('/cart', [CartController::class ,'index']);
Route::get('/store',[CartController::class ,'store']);
Route::get('/clear',[CartController::class ,'clearAll']);
# orders 
Route::get('/orders', [App\Http\Controllers\Web\OrderController::class,'index']);





Route::get('/web-layout', function () { return view('web.layouts.master');});





























/****** Ajax Cart ******/
Route::post('add-to-cart',[AjaxController::class ,'addToCart'])->name('add.to.cart'); //get and post
Route::post('delete-from-cart',[AjaxController::class ,'deleteFromCart'])->name('delete.from.cart');
Route::post('cart-update',[AjaxController::class ,'update'])->name('cart.update');













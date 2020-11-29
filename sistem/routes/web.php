<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\UserController;

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

Route::get('Home', [HomeController::class, 'showHome']);
Route::get('Blog', [HomeController::class, 'showBlog']);

Route::prefix('Client')->group(function(){
	Route::get('Artikel/{artikel}', [HomeController::class, 'show']);
	Route::post('Artikel/{artikel}', [HomeController::class, 'createKomen']);
});

Route::prefix('Admin')->middleware('auth')->group(function(){
	Route::get('Dashboard', [HomeController::class, 'showDashboard']);
	
	Route::get('Artikel', [ArtikelController::class, 'index']);
	Route::get('Artikel/Create', [ArtikelController::class, 'create']);
	Route::post('Artikel', [ArtikelController::class, 'store']);
	Route::get('Artikel/{artikel}', [ArtikelController::class, 'show']);
	Route::get('Artikel/{artikel}/edit', [ArtikelController::class, 'edit']);
	Route::put('Artikel/{artikel}', [ArtikelController::class, 'update']);
	Route::delete('Artikel/{artikel}', [ArtikelController::class, 'destroy']);

	Route::get('User', [UserController::class, 'index']);
	Route::get('User/Create', [UserController::class, 'create']);
	Route::post('User', [UserController::class, 'store']);
	Route::get('User/{user}', [UserController::class, 'show']);
	Route::get('User/{user}/edit', [UserController::class, 'edit']);
	Route::put('User/{user}', [UserController::class, 'update']);
	Route::delete('User/{user}', [UserController::class, 'destroy']);

});

Route::get('Login', [AuthController::class, 'showLogin'])->name('login');
Route::post('Login', [AuthController::class, 'loginProcess']);
Route::get('Logout', [AuthController::class, 'logout']);

Route::get('Register', [AuthController::class, 'showRegister']);
Route::post('Register', [AuthController::class, 'registerProcess']);









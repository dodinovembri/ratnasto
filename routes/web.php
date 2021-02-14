<?php

use Illuminate\Support\Facades\Route;

// frontend
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TechnologyController;

// backend
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\IndexPublicController;

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
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [DashboardController::class, 'index']);

Route::name('frontend.')->group(function () {
	Route::name('home.')->group(function () {
		Route::get('frontend/home/index', [HomeController::class, 'index']);
		Route::get('frontend/home/create', [HomeController::class, 'create']);
		Route::post('frontend/home/store', [HomeController::class, 'store']);
		Route::get('frontend/home/show/{id}', [HomeController::class, 'show']);
		Route::get('frontend/home/edit/{id}', [HomeController::class, 'edit']);
		Route::post('frontend/home/update/{id}', [HomeController::class, 'update']);
		Route::get('frontend/home/destroy/{id}', [HomeController::class, 'destroy']);
	});		
});

Route::get('technology', [TechnologyController::class, 'index']);
Route::name('technology.')->group(function () {
	Route::name('home.')->group(function () {
		Route::get('frontend/home/create', [HomeController::class, 'create']);
		Route::post('frontend/home/store', [HomeController::class, 'store']);
		Route::get('frontend/home/show/{id}', [HomeController::class, 'show']);
		Route::get('frontend/home/edit/{id}', [HomeController::class, 'edit']);
		Route::post('frontend/home/update/{id}', [HomeController::class, 'update']);
		Route::get('frontend/home/destroy/{id}', [HomeController::class, 'destroy']);
	});		
});

Route::get('wedding', [WeddingController::class, 'index']);
Route::name('technology.')->group(function () {
	Route::name('home.')->group(function () {
		Route::get('frontend/home/create', [HomeController::class, 'create']);
		Route::post('frontend/home/store', [HomeController::class, 'store']);
		Route::get('frontend/home/show/{id}', [HomeController::class, 'show']);
		Route::get('frontend/home/edit/{id}', [HomeController::class, 'edit']);
		Route::post('frontend/home/update/{id}', [HomeController::class, 'update']);
		Route::get('frontend/home/destroy/{id}', [HomeController::class, 'destroy']);
	});		
});

Route::get('home-index', [IndexPublicController::class, 'index']);
Route::name('technology.')->group(function () {
	Route::name('home.')->group(function () {
		Route::get('frontend/home/create', [HomeController::class, 'create']);
		Route::post('frontend/home/store', [HomeController::class, 'store']);
		Route::get('frontend/home/show/{id}', [HomeController::class, 'show']);
		Route::get('frontend/home/edit/{id}', [HomeController::class, 'edit']);
		Route::post('frontend/home/update/{id}', [HomeController::class, 'update']);
		Route::get('frontend/home/destroy/{id}', [HomeController::class, 'destroy']);
	});		
});
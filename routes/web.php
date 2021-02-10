<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

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
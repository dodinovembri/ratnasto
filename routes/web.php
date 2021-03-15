<?php

use Illuminate\Support\Facades\Route;

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

/**
| ===============
| frontend routes
| ===============
*/
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index']);
Route::prefix('fe')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});


/**
| ==============
| backend routes
| ==============
*/
Route::prefix('admin')->group(function () {
	Route::get('', [App\Http\Controllers\Backend\HomeController::class, 'index']);
});
Route::prefix('product_category')->group(function () {
	Route::get('', [App\Http\Controllers\Backend\ProductCategoryController::class, 'index']);
	Route::get('create', [App\Http\Controllers\Backend\ProductCategoryController::class, 'create']);
	Route::post('store', [App\Http\Controllers\Backend\ProductCategoryController::class, 'store']);
	Route::get('show/{id}', [App\Http\Controllers\Backend\ProductCategoryController::class, 'show']);
	Route::get('edit/{id}', [App\Http\Controllers\Backend\ProductCategoryController::class, 'edit']);
	Route::post('update{id}', [App\Http\Controllers\Backend\ProductCategoryController::class, 'update']);
	Route::get('destroy/{id}', [App\Http\Controllers\Backend\ProductCategoryController::class, 'destroy']);
});
Route::prefix('product')->group(function () {
	Route::get('', [App\Http\Controllers\Backend\ProductController::class, 'index']);
	Route::get('create', [App\Http\Controllers\Backend\ProductController::class, 'create']);
	Route::post('store', [App\Http\Controllers\Backend\ProductController::class, 'store']);
	Route::get('show/{id}', [App\Http\Controllers\Backend\ProductController::class, 'show']);
	Route::get('edit/{id}', [App\Http\Controllers\Backend\ProductController::class, 'edit']);
	Route::post('update{id}', [App\Http\Controllers\Backend\ProductController::class, 'update']);
	Route::get('destroy/{id}', [App\Http\Controllers\Backend\ProductController::class, 'destroy']);
});
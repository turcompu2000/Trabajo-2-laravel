<?php

use App\Http\Controllers\api\categoriesController;
use App\Http\Controllers\api\customersController;
use App\Http\Controllers\api\pay_modeController;
use App\Http\Controllers\api\productController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categories', [categoriesController::class, 'index'])->name('categories');
Route::post('/categories',[categoriesController::class, 'store'])->name('categories.store');
Route::delete('/categories/{categorie}',[categoriesController::class, 'destroy'])->name('categories.destroy');
Route::get('/categories/{categorie}',[categoriesController::class, 'show'])->name('categories.show');
Route::put('/categories/{categorie}',[categoriesController::class, 'update'])->name('categories.update');


Route::get('/customers', [customersController::class, 'index'])->name('customers');
Route::post('/customers',[customersController::class, 'store'])->name('customers.store');
Route::delete('/customers/{customer}',[customersController::class, 'destroy'])->name('customers.destroy');
Route::get('/customers/{customer}',[customersController::class, 'show'])->name('customers.show');
Route::put('/customers/{customer}',[customersController::class, 'update'])->name('customers.update');


Route::get('/pay_mode', [pay_modeController::class, 'index'])->name('pay_mode');
Route::post('/pay_mode',[pay_modeController::class, 'store'])->name('pay_mode.store');
Route::delete('/pay_mode/{pay_modes}',[pay_modeController::class, 'destroy'])->name('pay_mode.destroy');
Route::get('/pay_mode/{pay_modes}',[pay_modeController::class, 'show'])->name('pay_mode.show');
Route::put('/pay_mode/{pay_modes}',[pay_modeController::class, 'update'])->name('pay_mode.update');


Route::get('/products', [productController::class, 'index'])->name('products');
Route::post('/products',[productController::class, 'store'])->name('products.store');
Route::delete('/products/{product}',[productController::class, 'destroy'])->name('products.destroy');
Route::get('/products/{product}',[productController::class, 'show'])->name('products.show');
Route::put('/products/{product}',[productController::class, 'update'])->name('products.update');




<?php

use App\Http\Controllers\api\categoriesController;
use App\Http\Controllers\api\customersController;
use App\Http\Controllers\api\detailsController;
use App\Http\Controllers\api\invoicesController;
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
Route::get('/details', [detailsController::class, 'index'])->name('details');
Route::get('/invoices', [invoicesController::class, 'index'])->name('invoices');
Route::get('/pay_mode', [pay_modeController::class, 'index'])->name('pay_mode');
Route::get('/products', [productController::class, 'index'])->name('products');




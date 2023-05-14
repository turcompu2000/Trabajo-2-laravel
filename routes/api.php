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
Route::get('/customer', [customersController::class, 'index'])->name('customer');
Route::get('/details', [detailsController::class, 'index'])->name('details');
Route::get('/invoice', [invoicesController::class, 'index'])->name('invoice');
Route::get('/pay', [pay_modeController::class, 'index'])->name('pay');
Route::get('/product', [productController::class, 'index'])->name('product');




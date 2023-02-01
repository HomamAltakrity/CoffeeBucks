<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

// All Products
Route::get('/', [ProductController::class, 'index']);

// Create
Route::get('coffeebucks/public/products/create', [ProductController::class, 'create']);

// Store
Route::post('coffeebucks/public/products', [ProductController::class, 'store']);

// Edit
Route::get('coffeebucks/public/products/{product}/edit', [ProductController::class, 'edit']);

// Update
Route::put('coffeebucks/public/products/{product}', [ProductController::class, 'update']);

// Delete
Route::delete('coffeebucks/public/products/{product}', [ProductController::class, 'delete']);


// Single Product
Route::get('coffeebucks/public/products/{product}', [ProductController::class, 'show']);
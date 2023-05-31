<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes
Route::middleware(['auth:api'])->group(function () {
    // Products
    Route::resource('products',ProductController::class);
    // Route::get('/products', [ProductController::class, 'index']);
    // Route::post('/products', [ProductController::class, 'store']);
    // Route::get('/products/{product}', [ProductController::class, 'show']);
    // Route::put('/products/{product}', [ProductController::class, 'update']);
    // Route::delete('/products/{product}', [ProductController::class, 'destroy']);

    // Suppliers
    Route::resource('suppliers',SupplierController::class);

    // Route::get('/suppliers', [SupplierController::class, 'index']);
    // Route::post('/suppliers', [SupplierController::class, 'store']);
    // Route::get('/suppliers/{supplier}', [SupplierController::class, 'show']);
    // Route::put('/suppliers/{supplier}', [SupplierController::class, 'update']);
    // Route::delete('/suppliers/{supplier}', [SupplierController::class, 'destroy']);

    // Warehouses
    Route::resource('warehouses',WarehouseController::class);

    // Route::get('/warehouses', [WarehouseController::class, 'index']);
    // Route::post('/warehouses', [WarehouseController::class, 'store']);
    // Route::get('/warehouses/{warehouse}', [WarehouseController::class, 'show']);
    // Route::put('/warehouses/{warehouse}', [WarehouseController::class, 'update']);
    // Route::delete('/warehouses/{warehouse}', [WarehouseController::class, 'destroy']);
});

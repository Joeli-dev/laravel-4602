<?php


namespace App\Http\Controllers; //Jangan lupa ditambahin yak
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrderController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/orders', [OrderController::class, 'index']);
Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/', [ArtikelController::class, 'index']);
Route::get('/artikel/tambah', [ArtikelController::class, 'create']);
Route::get('/artikel', [ArtikelController::class, 'store']);
Route::get('/artikel/{id}', [ArtikelController::class, 'show']);
Route::get('/artikel/{id}/edit', [ArtikelController::class, 'edit']);
Route::put('/artikel/{id}', [ArtikelController::class, 'update']);
Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy']);






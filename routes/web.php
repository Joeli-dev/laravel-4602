<?php


namespace App\Http\Controllers; //Jangan lupa ditambahin yak
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShippingController;

Route::get('/ship', [ShippingController::class, 'index']);

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

Route::get('artikel', 'ArtikelController@index');
Route::get('artikel/tambah', 'ArtikelController@create' );
Route::get('artikel', 'ArtikelController@store');
Route::get('artikel/{id}', 'ArtikelController@show');
Route::get('artikel/{id}/edit', 'ArtikelController@edit');
Route::put('artikel/{id}', 'ArtikelController@update');
Route::delete('artikel/{id}', 'ArtikelController@destroy');

Route::get('/', function () {
    return view('welcome');
});




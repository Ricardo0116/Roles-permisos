<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    // AQUI VAN LAS RUTAS PROTEGIDAS
    // EJEMPLO DEL PROFESOR
    

    // Admin Rutas
    Route::middleware('role:admin')->group(function(){

    Route::get('admin', [AdminController::class, 'index']);
    });


    // Cliente Rutas
    Route::middleware('role:client')->group(function(){

    Route::get('client', [ClientController::class, 'index']);

    });

    Route::middleware('role:admin|client')->group(function(){
    Route::get('products', [ProductController::class, 'index'])->name('products.index');
    Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('products', [ProductController::class, 'store'])->name('products.store');
    Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');

    });

});

// Route::resource('products', [ProductController::class]);
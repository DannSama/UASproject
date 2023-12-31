<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/products/create', [ProductController::class, 'create'])->name('create');
// Route::post('/products/store', [ProductController::class, 'store']);
// Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
// Route::put('/products/{id}', [ProductController::class, 'update']);
// Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::resource('products', ProductController::class);

Route::get('', function () {
    return view('authentication/register');
});
Route::get('login', function(){
    return view('authentication/login');
});

Route::get('dashboard', function(){
    return view('dashboard');
});

Route::get('nav', function(){
    return view('layout/navbar');
});
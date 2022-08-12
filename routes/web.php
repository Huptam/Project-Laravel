<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dash.index');
    })->name('dashboard');

    //Profile
    Route::get('/showProfile', function () {
        return view('profile.show');
    });

    //CRUD Categorías
    Route::get('/indexCategories', [CategoriesController::class, 'index'])->name('indexCategory');
    Route::get('/addCategory', [CategoriesController::class, 'create'])->name('addCategory');
    Route::post('/storeCategory', [CategoriesController::class, 'store'])->name('storeCategory');
    Route::get('/editCategory/{id}', [CategoriesController::class, 'edit'])->name('editCategory');
    Route::put('/updateCategory/{id}', [CategoriesController::class, 'update'])->name('updateCategory');
    Route::delete('/deleteCategory/{id}', [CategoriesController::class, 'destroy'])->name('deleteCategory');

    //CRUD Productos
    Route::get('/indexProducts', [ProductsController::class, 'index'])->name('indexProduct');
    Route::get('/addProduct', [ProductsController::class, 'create'])->name('addProduct');
    Route::post('/storeProduct', [ProductsController::class, 'store'])->name('storeProduct');
    //Route::post('/showProduct/{id}', [ProductsController::class, 'show'])->name('showProduct');
    Route::get('/editProduct/{id}', [ProductsController::class, 'edit'])->name('editProduct');
    Route::put('/updateProduct/{id}', [ProductsController::class, 'update'])->name('updateProduct');
    Route::delete('/deleteProduct/{id}', [ProductsController::class, 'destroy'])->name('deleteProduct');
});

<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// ------ ADMIN ROUTING ------  
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [AdminController::class, 'index']);

Route::controller(CategoryController::class)->group(function(){
    Route::get('/category', 'category');
    Route::post('/addCat', 'addCat');
    Route::get('/editCat/{id}', 'editCat');
    Route::post('/updateCat/{id}', 'updateCat');
    Route::get('/deleteCat/{id}', 'deleteCat');
});

Route::controller(BookController::class)->group(function(){
    Route::get('/addBook', 'addBook');
    Route::post('/storeBook', 'storeBook');
    Route::get('/editBook/{id}', 'editBook');
    Route::post('/updateBook/{id}', 'updateBook');
    Route::get('/deleteBook/{id}', 'deleteBook');
});




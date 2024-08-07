<?php

use App\Http\Controllers\AdminController;
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


Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [AdminController::class, 'index']);
Route::get('/category', [AdminController::class, 'category']);
Route::post('/addCat', [AdminController::class, 'addCat']);
// Route::get('/deleteCat/{$id}', [AdminController::class, 'deleteCat'])->name('deleteCat');
Route::get('/deleteCat/{id}', [AdminController::class, 'deleteCat']);

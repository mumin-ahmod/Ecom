<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorysController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/admin', function () {
    return view('backend.dashboard');
});


Route::get('/categories', [CategorysController::class, 'index'])->name('categories.index');
Route::get('/create', [CategorysController::class, 'create'])->name('categories.create');
Route::put('/store', [CategorysController::class, 'store'])->name('categories.store');
Route::get('/edit/{id}', [CategorysController::class, 'edit'])->name('categories.edit');
Route::post('/update/{id}', [CategorysController::class, 'update'])->name('categories.update');
Route::post('/delete/{id}', [CategorysController::class, 'delete'])->name('categories.delete');
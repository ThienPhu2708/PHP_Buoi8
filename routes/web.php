<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('products.index'));

Route::resource('products', ProductController::class)->except('show');

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
Route::get('/queries', [QueryController::class, 'index'])->name('queries.index');

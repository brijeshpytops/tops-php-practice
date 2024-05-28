<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

Route::get('/', [CrudController::class, 'index'])->name('index');
Route::post('/store', [CrudController::class, 'store'])->name('store');
Route::get('/students/{student}/edit', [CrudController::class, 'edit'])->name('students.edit');
Route::put('/students/{student}', [CrudController::class, 'update'])->name('students.update');
Route::delete('/students/{student}', [CrudController::class, 'destroy'])->name('students.destroy');




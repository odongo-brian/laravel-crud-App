<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee', [EmployeeController::class,'index'])->name('employee.index');

Route::get('/employee/create', [EmployeeController::class,'create'])->name('employee.create');

Route::post('/employee', [EmployeeController::class,'store'])->name('employee.store');

Route::get('/employee/{id}/edit', [EmployeeController::class,'edit'])->name('employee.edit');
Route::put('/employee/{id}/update', [EmployeeController::class,'update'])->name('employee.update');
Route::delete('/employee/{id}/destroy', [EmployeeController::class,'destroy'])->name('employee.destroy');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

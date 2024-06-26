<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TitleController;


Route::get('/', [App\Http\Controllers\PropertyController::class, 'index']);



Route::get('admin/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::get('admin/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);





Route::get('/display-properties', [AdminController::class, 'displayProperties'])->name('admin.display-properties');

Route::get('admin/property-data', [AdminController::class, 'propertyData'])->name('property.data');



Route::get('admin/create-properties', [AdminController::class, 'create'])->name('create');

Route::post('admin/create-properties', [AdminController::class, 'store'])->name('store');

Route::get('/edit/{property}', [AdminController::class, 'edit'])->name('admin.edit');

Route::delete('/destroy/{property}', [AdminController::class, 'destroy'])->name('admin.destroy');

Route::put('/update/{property}', [AdminController::class, 'update'])->name('admin.update');



Route::get('admin/titles', [TitleController::class, 'index'])->name('titles.index');
Route::get('admin/titles/create', [TitleController::class, 'create'])->name('titles.create');
Route::post('admin/titles', [TitleController::class, 'store'])->name('titles.store');
Route::get('admin/titles/{id}/edit', [TitleController::class, 'edit'])->name('titles.edit');
Route::put('admin/titles/{id}', [TitleController::class, 'update'])->name('titles.update');
Route::delete('admin/titles/{id}', [TitleController::class, 'destroy'])->name('titles.destroy');








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TitleController;


Route::get('/', [App\Http\Controllers\PropertyController::class, 'index']);



Route::get('admin/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::get('admin/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);



Route::prefix('admin')->group(function () {
    Route::get('/display-properties', [AdminController::class, 'displayProperties'])->name('admin.display-properties');
    Route::get('/property-data', [AdminController::class, 'propertyData'])->name('property.data');
    Route::get('/create-properties', [AdminController::class, 'create'])->name('create');
    Route::post('/create-properties', [AdminController::class, 'store'])->name('store');
    Route::get('/edit/{property}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::delete('/destroy/{property}', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::put('/update/{property}', [AdminController::class, 'update'])->name('admin.update');

    Route::get('/display-titles', [TitleController::class, 'displayTitles'])->name('admin.display-titles');
    Route::get('/title-data', [TitleController::class, 'index'])->name('title.data');
    Route::get('/create-titles', [TitleController::class, 'create'])->name('title.create');
    Route::post('/create-titles', [TitleController::class, 'store'])->name('title.store');
    Route::get('/edit-title/{title}', [TitleController::class, 'edit'])->name('admin.title.edit');
    Route::delete('/destroy-title/{title}', [TitleController::class, 'destroy'])->name('admin.title.destroy');
    Route::put('/update-title/{title}', [TitleController::class, 'update'])->name('admin.title.update');
});







// Route::get('admin/titles', [TitleController::class, 'index'])->name('titles.index');
// Route::get('/titles/create', [TitleController::class, 'create'])->name('titles.create');
// Route::post('/titles', [TitleController::class, 'store'])->name('titles.store');
// Route::get('admin/titles/{id}/edit', [TitleController::class, 'edit'])->name('titles.edit');
// Route::post('admin/titles/{id}', [TitleController::class, 'update'])->name('titles.update');
// Route::delete('admin/titles/{id}', [TitleController::class, 'destroy'])->name('titles.destroy');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

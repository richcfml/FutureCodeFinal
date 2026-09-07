<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');

Route::get('/proyectos', [AdminController::class, 'index'])->name('admin.index');
Route::post('/proyectos', [AdminController::class, 'store'])->name('admin.store');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::delete('/logout', [AdminController::class, 'destroy'])->name('admin.destroy');



<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaterialsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Pages
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Materials endpoint
Route::resource('/materials', MaterialsController::class);

// 1st mode -> Users endpoint
Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/create', [UsersController::class, 'create']);
Route::post('/users', [UsersController::class, 'store']);
Route::get('/users/{id}/edit', [UsersController::class, 'edit']);
Route::patch('/users/{id}', [UsersController::class, 'update']);
Route::delete('/users/{id}', [UsersController::class, 'destroy']);
// Custom Route for password
Route::get('/users/{id}/password', [UsersController::class, 'password_edit']);
Route::patch('/users/{id}/password', [UsersController::class, 'password_update']);

// Authentication
Auth::routes();

// SuperAdmin and Admin Routes
Route::prefix('admin')->middleware(['auth', 'auth.isAdmin'])->name('admin.')->group(function () {
    // 2nd mode -> Users endpoint
    Route::get('/users', [UsersController::class, 'index']);
});

// SuperAdmin and Admin Routes
Route::prefix('superadmin')->middleware(['auth', 'auth.isSuperAdmin'])->name('superadmin.')->group(function () {
    // 2nd mode -> Users endpoint
    Route::get('/users', [UsersController::class, 'index']);
});

<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\Auth\SigninController;
use App\Http\Controllers\Auth\VerifyAccountController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\User\Role\UserRoleController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

// Route::middleware(['guest'])->group(function () {
	Route::get('/login', [SigninController::class, 'render'])->name('login');
	Route::get('/verify-account', [VerifyAccountController::class, 'render'])->name('login');
// });

// Route::middleware(['auth'])->group(function () {
	Route::get('/', [AppController::class, 'render'])->name('dashboard');	
	Route::get('/projects',[ProjectController::class, 'render'])->name('projects');
	Route::get('/inventory', [InventoryController::class, 'render'])->name('inventory');
	Route::get('/users', [UserController::class, 'render'])->name('user');
	Route::get('/user-roles', [UserRoleController::class, 'render'])->name('userrole');
// });

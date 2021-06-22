<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;



Route::get('',[HomeController::class, 'index'])->name('admin.home');
Route::resource('users', UserController::class)->names('admin.users');
Route::get('roles/{user}', [RoleController::class, 'edit'])->name('admin.role');
Route::put('roles/{user}', [RoleController::class, 'update'])->name('admin.role.update');





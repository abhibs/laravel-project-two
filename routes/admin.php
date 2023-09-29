<?php

use App\Http\Controllers\Admin\NameController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::get('/test', function () {
    echo "Abhiram";
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin-login');
    Route::post('/login', [AdminController::class, 'loginPost'])->name('admin-login-post');

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');
        Route::get('/logout', [Admincontroller::class, 'adminLogout'])->name('admin-logout');
        Route::get('/profile', [Admincontroller::class, 'adminProfile'])->name('admin-profile');
        Route::post('/profile/update', [AdminController::class, 'adminProfileUpdate'])->name('admin-profile-update');
        Route::get('/change/password', [Admincontroller::class, 'changePassword'])->name('admin-change-password');

        Route::post('/update/password', [AdminController::class, 'updatePassword'])->name('admin-password-update');

        Route::get('/name', [NameController::class, 'index'])->name('name');
        Route::post('/name/update', [NameController::class, 'update'])->name('name-update');


        Route::get('/profile/photo', [PhotoController::class, 'index'])->name('photo');
        Route::post('/profile/photo/update', [PhotoController::class, 'update'])->name('photo-update');

        Route::get('/role/create', [RoleController::class, 'create'])->name('role-create');
        Route::post('/role/store', [RoleController::class, 'store'])->name('role-store');
        Route::get('/role', [RoleController::class, 'index'])->name('role');
        Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role-edit');
        Route::post('/role/update', [RoleController::class, 'update'])->name('role-update');
        Route::get('/role/delete/{id}', [RoleController::class, 'delete'])->name('role-delete');
        Route::get('/role/inactive/{id}', [RoleController::class, 'inactive'])->name('role-inactive');
        Route::get('/role/active/{id}', [RoleController::class, 'active'])->name('role-active');

    });
});

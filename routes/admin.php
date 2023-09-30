<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\FactController;
use App\Http\Controllers\Admin\NameController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\SocialController;
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


        Route::get('/social/media/create', [SocialController::class, 'create'])->name('social-create');
        Route::post('/social/media/store', [SocialController::class, 'store'])->name('social-store');
        Route::get('/social/media', [SocialController::class, 'index'])->name('social');
        Route::get('/social/media/edit/{id}', [SocialController::class, 'edit'])->name('social-edit');
        Route::post('/social/media/update', [SocialController::class, 'update'])->name('social-update');
        Route::get('/social/media/delete/{id}', [SocialController::class, 'delete'])->name('social-delete');
        Route::get('/social/media/inactive/{id}', [SocialController::class, 'inactive'])->name('social-inactive');
        Route::get('/social/media/active/{id}', [SocialController::class, 'active'])->name('social-active');


        Route::get('/about', [AboutController::class, 'index'])->name('about');
        Route::post('/about/update', [AboutController::class, 'update'])->name('about-update');


        Route::get('/fact', [FactController::class, 'index'])->name('fact');
        Route::post('/fact/update', [FactController::class, 'update'])->name('fact-update');


        Route::get('/skill/create', [SkillController::class, 'create'])->name('skill-create');
        Route::post('/skill/store', [SkillController::class, 'store'])->name('skill-store');
        Route::get('/skill', [SkillController::class, 'index'])->name('skill');
        Route::get('/skill/edit/{id}', [SkillController::class, 'edit'])->name('skill-edit');
        Route::post('/skill/update', [SkillController::class, 'update'])->name('skill-update');
        Route::get('/skill/delete/{id}', [SkillController::class, 'delete'])->name('skill-delete');
        Route::get('/skill/inactive/{id}', [SkillController::class, 'inactive'])->name('skill-inactive');
        Route::get('/skill/active/{id}', [SkillController::class, 'active'])->name('skill-active');


        Route::get('/education/create', [EducationController::class, 'create'])->name('education-create');
        Route::post('/education/store', [EducationController::class, 'store'])->name('education-store');
        Route::get('/education', [EducationController::class, 'index'])->name('education');
        Route::get('/education/edit/{id}', [EducationController::class, 'edit'])->name('education-edit');
        Route::post('/education/update', [EducationController::class, 'update'])->name('education-update');
        Route::get('/education/delete/{id}', [EducationController::class, 'delete'])->name('education-delete');
        Route::get('/education/inactive/{id}', [EducationController::class, 'inactive'])->name('education-inactive');
        Route::get('/education/active/{id}', [EducationController::class, 'active'])->name('education-active');


        Route::get('/experience/create', [ExperienceController::class, 'create'])->name('experience-create');
        Route::post('/experience/store', [ExperienceController::class, 'store'])->name('experience-store');
        Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
        Route::get('/experience/edit/{id}', [ExperienceController::class, 'edit'])->name('experience-edit');
        Route::post('/experience/update', [ExperienceController::class, 'update'])->name('experience-update');
        Route::get('/experience/delete/{id}', [ExperienceController::class, 'delete'])->name('experience-delete');
        Route::get('/experience/inactive/{id}', [ExperienceController::class, 'inactive'])->name('experience-inactive');
        Route::get('/experience/active/{id}', [ExperienceController::class, 'active'])->name('experience-active');

    });
});

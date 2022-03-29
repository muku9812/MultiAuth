<?php

use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\PackageController;
use App\Http\Controllers\backend\ManpowerController;
use App\Http\Controllers\backend\JobCategoryController;
use App\Http\Controllers\backend\JobController;
use App\Http\Controllers\backend\JtypeController;
use App\Http\Controllers\backend\QualificationController;
use App\Http\Controllers\backend\CountryController;


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

Route::get('/', function () {
    return view('welcome');
});


Route::get('users/profile', [UserController::class, 'profiles'])->name('users.profile');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Auth::routes([]);
Route::middleware(['web','is_admin','auth'])->group(function() {
        Route::get('manpower/create', [ManpowerController::class, 'create'])->name('manpower.create');
        Route::post('manpower', [ManpowerController::class, 'store'])->name('manpower.store');
        Route::get('manpower', [ManpowerController::class, 'index'])->name('manpower.index');
        Route::get('manpower/{id}', [ManpowerController::class, 'show'])->name('manpower.show');
        Route::get('manpower/{id}/edit', [ManpowerController::class, 'edit'])->name('manpower.edit');
        Route::put('manpower/{id}/edit', [ManpowerController::class, 'update'])->name('manpower.update');
        Route::delete('manpower/{id}', [ManpowerController::class, 'destroy'])->name('manpower.destroy');


        Route::get('packages/create', [PackageController::class, 'create'])->name('packages.create');
        Route::post('packages', [PackageController::class, 'store'])->name('package.store');
        Route::get('packages', [PackageController::class, 'index'])->name('packages.index');
        Route::get('packages/{id}', [PackageController::class, 'show'])->name('packages.show');
        Route::get('packages/{id}/edit', [PackageController::class, 'edit'])->name('packages.edit');
        Route::put('packages/{id}/edit', [PackageController::class, 'update'])->name('packages.update');
        Route::delete('packages/{id}', [PackageController::class, 'destroy'])->name('packages.destroy');


    Route::get('qualification/create', [QualificationController::class, 'create'])->name('qualification.create');
    Route::post('qualification', [QualificationController::class, 'store'])->name('qualification.store');
    Route::get('qualification', [QualificationController::class, 'index'])->name('qualification.index');
    Route::get('qualification/{id}', [QualificationController::class, 'show'])->name('qualification.show');
    Route::get('qualification/{id}/edit', [QualificationController::class, 'edit'])->name('qualification.edit');
    Route::put('qualification/{id}/edit', [QualificationController::class, 'update'])->name('qualification.update');
    Route::delete('qualification/{id}', [QualificationController::class, 'destroy'])->name('qualification.destroy');


    Route::get('country/create', [CountryController::class, 'create'])->name('country.create');
    Route::post('country', [CountryController::class, 'store'])->name('country.store');
    Route::get('country', [CountryController::class, 'index'])->name('country.index');
    Route::get('country/{id}', [CountryController::class, 'show'])->name('country.show');
    Route::get('country/{id}/edit', [CountryController::class, 'edit'])->name('country.edit');
    Route::put('country/{id}/edit', [CountryController::class, 'update'])->name('country.update');
    Route::delete('country/{id}', [CountryController::class, 'destroy'])->name('country.destroy');

        Route::get('user/profile', [UserController::class, 'profile'])->name('user.profile');
        Route::get('user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('user', [UserController::class, 'store'])->name('user.store');
        Route::get('user/{id}', [UserController::class, 'show'])->name('user.show');
        Route::get('index', [UserController::class, 'index'])->name('user.index');

    Route::get('/Admin-Password-Changes', [HomeController::class, 'showChangePasswordGetAdmin'])->name('showChangePasswordGetAdmin');



    });


    Route::get('/changePassword', [HomeController::class, 'showChangePasswordGet'])->name('changePasswordGet');
    Route::post('/changePassword', [HomeController::class, 'changePasswordPost'])->name('changePasswordPost');


    Route::get('category/create', [JobCategoryController::class, 'create'])->name('category.create');
    Route::post('category', [JobCategoryController::class, 'store'])->name('category.store');
    Route::get('category', [JobCategoryController::class, 'index'])->name('category.index');
    Route::get('category/{id}', [JobCategoryController::class, 'show'])->name('category.show');
    Route::get('category/{id}/edit', [JobCategoryController::class, 'edit'])->name('category.edit');
    Route::put('category/{id}/edit', [JobCategoryController::class, 'update'])->name('category.update');
    Route::delete('category/{id}', [JobCategoryController::class, 'destroy'])->name('category.destroy');



    Route::get('job/create', [JobController::class, 'create'])->name('job.create');
    Route::post('job', [JobController::class, 'store'])->name('job.store');
    Route::get('job', [JobController::class, 'index'])->name('job.index');
    Route::get('job/{id}', [JobController::class, 'show'])->name('job.show');
    Route::get('job/{id}/edit', [JobController::class, 'edit'])->name('job.edit');
    Route::put('job/{id}/edit', [JobController::class, 'update'])->name('job.update');
    Route::delete('job/{id}', [JobController::class, 'destroy'])->name('job.destroy');

    Route::get('jtype/create', [JtypeController::class, 'create'])->name('jtype.create');
    Route::post('jtype', [JtypeController::class, 'store'])->name('jtype.store');
    Route::get('jtype', [JtypeController::class, 'index'])->name('jtype.index');
    Route::get('jtype/{id}', [JtypeController::class, 'show'])->name('jtype.show');
    Route::get('jtype/{id}/edit', [JtypeController::class, 'edit'])->name('jtype.edit');
    Route::put('jtype/{id}/edit', [JtypeController::class, 'update'])->name('jtype.update');
    Route::delete('jtype/{id}', [JtypeController::class, 'destroy'])->name('jtype.destroy');


    Route::get('user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('user/{id}/edit', [UserController::class, 'update'])->name('user.update');





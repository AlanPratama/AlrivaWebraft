<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [UserPageController::class, 'homepage']);


Route::get('/wish-list', [UserPageController::class, 'wishList']);
Route::get('/service', [UserPageController::class, 'service']);
Route::get('/service/detail', [UserPageController::class, 'serviceDetail']);

// AUTHENTICATION

Route::get('/auth/login', [AuthController::class, 'loginIndex'])->name('login');
Route::post('/auth/login', [AuthController::class, 'loginProcess'])->name('loginProcess');

Route::get('/auth/register', [AuthController::class, 'registerIndex'])->name('register');
Route::post('/auth/register', [AuthController::class, 'registerProcess'])->name('registerProcess');

// END AUTHENTICATION



Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



    Route::middleware('onlyAdmin')->prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');






        Route::get('/other', [AdminController::class, 'other'])->name('other');

        Route::post('other.type.add', [AdminController::class, 'typeAdd'])->name('typeAdd');
        Route::post('other.type.edit.{slug}', [AdminController::class, 'typeEdit'])->name('typeEdit');
        Route::delete('other.type.delete.{slug}', [AdminController::class, 'typeDelete'])->name('typeDelete');

        Route::post('other.category.add', [AdminController::class, 'categoryAdd'])->name('categoryAdd');
        Route::post('other.category.edit.{slug}', [AdminController::class, 'categoryEdit'])->name('categoryEdit');
        Route::delete('other.category.delete.{slug}', [AdminController::class, 'categoryDelete'])->name('categoryDelete');


        Route::get('/service', [AdminController::class, 'service'])->name('service');
        Route::post('service.create', [AdminController::class, 'serviceCreate'])->name('serviceCreate');
        Route::put('service.edit.{slug}', [AdminController::class, 'serviceEdit'])->name('serviceEdit');

    });


});

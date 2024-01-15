<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPageController;
use App\Models\Transaction;
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
Route::get('/service/detail/{slug}', [UserPageController::class, 'serviceDetail']);

Route::get('/category/{slug}', [UserPageController::class, 'categoryWebsite']);

// AUTHENTICATION

Route::get('/auth/login', [AuthController::class, 'loginIndex'])->name('login');
Route::post('/auth/login', [AuthController::class, 'loginProcess'])->name('loginProcess');

Route::get('/auth/register', [AuthController::class, 'registerIndex'])->name('register');
Route::post('/auth/register', [AuthController::class, 'registerProcess'])->name('registerProcess');

// END AUTHENTICATION



Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/addToWishlist', [UserPageController::class, 'addToWishlist']);


    Route::get('/transaksi', [TransactionController::class, 'allTransaction']);

    Route::post('transaction.checkout.{slug}', [TransactionController::class, 'transactionCheckout'])->name('transaction.checkout');
    Route::get('/transaction-detail', [TransactionController::class, 'transactionDetail'])->name('transaction.detail');

    Route::post('transaction.start.{slug}', [TransactionController::class, 'transactionStart'])->name('transaction.start');
    Route::delete('/cancelTransaction/{code}', [TransactionController::class, 'cancelTransaction']);


    // INDEX BELUM BAYAR
    Route::get('/transaksi/belum-bayar/{code}', [TransactionController::class, 'transactionIndexBelum']);




    Route::middleware('onlyAdmin')->prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');



        Route::get('/transaction/belum-bayar', [AdminController::class, 'transactionBelum'])->name('adminTransactionBelum');

        Route::post('admin.transaction.to.proses.{code}', [AdminController::class, 'transactionToProses'])->name('transactionToProses');

        Route::get('/transaction/diproses', [AdminController::class, 'transactionDiproses'])->name('adminTransactionDiproses');
        Route::get('/transaction/selesai', [AdminController::class, 'transactionSelesai'])->name('adminTransactionSelesai');



        Route::get('/other', [AdminController::class, 'other'])->name('other');

        Route::post('other.type.add', [AdminController::class, 'typeAdd'])->name('typeAdd');
        Route::post('other.type.edit.{slug}', [AdminController::class, 'typeEdit'])->name('typeEdit');
        Route::delete('other.type.delete.{slug}', [AdminController::class, 'typeDelete'])->name('typeDelete');

        Route::post('other.category.add', [AdminController::class, 'categoryAdd'])->name('categoryAdd');
        Route::post('other.category.edit.{slug}', [AdminController::class, 'categoryEdit'])->name('categoryEdit');
        Route::delete('other.category.delete.{slug}', [AdminController::class, 'categoryDelete'])->name('categoryDelete');


        Route::get('/service', [AdminController::class, 'service'])->name('service');

        Route::get('/create-service', [AdminController::class, 'serviceCreateIndex']);
        Route::post('service.create', [AdminController::class, 'serviceCreate'])->name('serviceCreate');

        Route::get('/service/edit/{slug}', [AdminController::class, 'serviceEditIndex']);
        Route::put('service.edit.{slug}', [AdminController::class, 'serviceEdit'])->name('serviceEdit');
        Route::put('service.status.update.{slug}', [AdminController::class, 'statusUpdateService'])->name('statusUpdateService');
    });


});

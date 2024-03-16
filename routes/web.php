<?php

use App\Http\Controllers\CurrentAccountController;
use App\Http\Controllers\DashboradController;
use App\Http\Controllers\StockController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/cms', [DashboradController::class, 'index'])->name('home');
    Route::get('/cms/accounts', [DashboradController::class, 'accounts'])->name('accounts');
    Route::get('/cms/stocks', [DashboradController::class, 'stocks'])->name('stocks');
    Route::get('/cms/offers', [DashboradController::class, 'offers'])->name('offers');
    Route::post('/cms/offers/store', [DashboradController::class, 'storeOffer'])->name('store_offer');
    Route::get('/cms/offer/view', [DashboradController::class, 'viewOffer'])->name('view_offer');

    Route::prefix('current_accounts')->group(function () {
        Route::get('/', [CurrentAccountController::class, 'index'])->name('current_accounts.index');
        Route::get('/store', [CurrentAccountController::class, 'store'])->name('current_accounts.store');
    });

    Route::prefix('stocks')->group(function () {
        Route::get('/', [StockController::class, 'index'])->name('stocks.index');
        Route::get('/store', [StockController::class, 'store'])->name('stocks.store');
    });

    /**
     * Ajax URL's
     */
    Route::post('/get-accounts', [DashboradController::class, 'getAccounts'])->name('getAccounts');
    Route::post('/get-stocks', [DashboradController::class, 'getStocks'])->name('getStocks');
});

require __DIR__.'/auth.php';

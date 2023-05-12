<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Product\AdminProductController;

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
    return view('admin.dashboard.index');
});
//Route::get('abcd',[AdminProductController::class,'abcd']);
Route::prefix('/adminn')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard.index');
    })->name('dashboard');
//    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('/product')->name('product.')->group(function () {
        Route::get('/list',[AdminProductController::class,'List'])->name('list');
        Route::get('/add',[AdminProductController::class,'Add'])->name('add');
    });
});

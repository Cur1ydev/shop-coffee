<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Product\AdminProductController;
use App\Http\Controllers\Admin\Attribute\AdminAttributeController;

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
        Route::post('/add',[AdminProductController::class,'AddPost'])->name('addPost');
        Route::get('/update-{id}',[AdminProductController::class,'Update'])->name('update');
        Route::post('/update-{id}',[AdminProductController::class,'UpdatePost'])->name('updatePost');
        Route::get('/delete-{id}',[AdminProductController::class,'Delete'])->name('delete');
    });
    Route::prefix('/attribute')->name('attribute.')->group(function (){
       Route::get('/list',[AdminAttributeController::class,'List'])->name('list');
    });
});

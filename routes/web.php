<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Product\AdminProductController;
use App\Http\Controllers\Admin\Attribute\AdminAttributeController;
use App\Http\Controllers\Admin\Category\AdminCategoryController;
use App\Http\Controllers\Client\Home\ClientHomeController;
use App\Http\Controllers\Client\Menu\ClientMenuController;
use App\Http\Controllers\Client\ProductDetail\ClientProductDetailController;
use App\Http\Controllers\Client\Cart\ClientCartController;
use App\Http\Controllers\Client\Shop\ClientShopController;
use App\Http\Controllers\Client\Checkout\ClientCheckoutController;
use App\Http\Controllers\Client\Checkout\PaymentController;

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
Route::get('/about',function (){
    return view('client.about.index');
})->name('client.about');
Route::get('/contact',function (){
    return view('client.contact.index');
})->name('client.contact');
Route::get('/faq',function (){
    return view('client.faq.index');
})->name('client.faq');
Route::get('/story',function (){
    return view('client.story.index');
})->name('client.story');
Route::get('/blog',function (){
    return view('client.blog.index');
})->name('client.blog');
Route::get('abcd',function (){
    dd(session()->get('allPrice'));
});
Route::get('/pushPrice',function (\Illuminate\Http\Request $request){
    session()->put('allPrice',$request->total);
    return response()->json(['success' => 'Thành công']);
})->name('client.pushPrice');
Route::get('/saveAddress',function (\Illuminate\Http\Request $request){
//    session()->put('');
//    dd($request->address);
    $rule = [
        'province' => 'required',
        'address' => 'required'
    ];
    $mess=[
        'province.required' => 'Tỉnh thành phải được chọn',
        'address.required' => 'Địa chỉ phải được chọn'
    ];
    $request->validate($rule,$mess);
    session()->put('address',$request->address);
    return back()->with('addressSuccess','Thêm địa chỉ đặt hàng thành công');
})->name('client.saveAddress');
Route::get('/checkout',[ClientCheckoutController::class,'index'])->name('client.checkout');
Route::get('/', [ClientHomeController::class, 'index'])->name('client.home');
Route::get('/menu', [ClientMenuController::class, 'Menu'])->name('client.menu');
Route::get('/product/{slug}', [ClientProductDetailController::class, 'ProductDetail'])->name('client.product');
Route::get('/cart', [ClientCartController::class, 'index'])->name('client.cart');
Route::post('/cart', [ClientCartController::class, 'handleAddtocart'])->name('client.addtocart');
Route::get('/selectAddress',[ClientCartController::class,'selectAddress'])->name('client.address');
Route::get('/increaseQuantity',[ClientCartController::class,'increaseQuantity'])->name('client.increaseQuantity');
Route::get('/deleteItemCart-{id}',[ClientCartController::class,'deleteItemCart'])->name('client.deleteItemCart');
Route::get('/delSs' , [ClientCartController::class, 'DeleteAllSession'])->name('client.deleteSS');
Route::get('/shop',[ClientShopController::class,'index'])->name('client.shop');
Route::post('payment',[PaymentController::class,'handleApiVnpay'])->name('client.payment');
Route::prefix('/adminn')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard.index');
    })->name('dashboard');
//    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('/product')->name('product.')->group(function () {
        Route::get('/list', [AdminProductController::class, 'List'])->name('list');
        Route::get('/add', [AdminProductController::class, 'Add'])->name('add');
        Route::post('/add', [AdminProductController::class, 'AddPost'])->name('addPost');
        Route::get('/update-{id}', [AdminProductController::class, 'Update'])->name('update');
        Route::post('/update-{id}', [AdminProductController::class, 'UpdatePost'])->name('updatePost');
        Route::get('/delete-{id}', [AdminProductController::class, 'Delete'])->name('delete');
    });
    Route::prefix('/attribute')->name('attribute.')->group(function () {
        Route::get('/list', [AdminAttributeController::class, 'List'])->name('list');
        Route::get('/add', [AdminAttributeController::class, 'Add'])->name('add');
        Route::post('/add', [AdminAttributeController::class, 'AddPost'])->name('addPost');
        Route::get('/update-{id}', [AdminAttributeController::class, 'Update'])->name('update');
        Route::post('/update-{id}', [AdminAttributeController::class, 'UpdatePost'])->name('updatePost');
        Route::get('/delete-{id}', [AdminAttributeController::class, 'Delete'])->name('delete');
    });
    Route::prefix('/category')->name('category.')->group(function () {
        Route::get('/list', [AdminCategoryController::class, 'List'])->name('list');
        Route::get('/add', [AdminCategoryController::class, 'Add'])->name('add');
        Route::post('/add', [AdminCategoryController::class, 'AddPost'])->name('addPost');
        Route::get('/update-{id}', [AdminCategoryController::class, 'Update'])->name('update');
        Route::post('/update-{id}', [AdminCategoryController::class, 'UpdatePost'])->name('updatePost');
        Route::get('/delete-{id}', [AdminCategoryController::class, 'Delete'])->name('delete');
    });
});

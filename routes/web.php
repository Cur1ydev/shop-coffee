<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard\AdminDashboardController;
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
use App\Http\Controllers\Admin\ProductAttribute\AdminProductAttributeController;
use App\Http\Controllers\Admin\Coupon\AdminCouponController;
use App\Http\Controllers\Admin\Province\AdminProvinceController;
use App\Http\Controllers\Admin\Address\AdminAddressController;
use App\Http\Controllers\Admin\OrderItem\AdminOrderItemController;
use App\Http\Controllers\MailController;
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

Route::get('/abcd',function (){

})->middleware('auth');
Route::get('/test-mail',[MailController::class,'index']);
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
Route::get('/order-success',[PaymentController::class,'handleVNpayReturn'])->name('client.handlePayment');
Route::prefix('/adminn')->name('admin.')->group(function () {
    Route::get('/notification',function (){
        return view('admin.notification.index');
    })->name('noti');
    Route::get('/deleteNoti',function (){
        \App\Models\Notification::truncate();
        return redirect()->route('admin.noti');
    })->name('deleteNoti');
    Route::get('/',[AdminDashboardController::class,'index'])->name('dashboard');
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
    Route::prefix('/product-attribute')->name('productattribute.')->group(function () {
        Route::get('/list', [AdminProductAttributeController::class, 'List'])->name('list');
        Route::get('/add', [AdminProductAttributeController::class, 'Add'])->name('add');
        Route::post('/add', [AdminProductAttributeController::class, 'AddPost'])->name('addPost');
        Route::get('/update-{product_id}-{attribute_id}', [AdminProductAttributeController::class, 'Update'])->name('update');
        Route::post('/update-{product_id}-{attribute_id}', [AdminProductAttributeController::class, 'UpdatePost'])->name('updatePost');
        Route::get('/delete-{product_id}-{attribute_id}', [AdminProductAttributeController::class, 'Delete'])->name('delete');
    });
    Route::prefix('/coupon')->name('coupon.')->group(function () {
        Route::get('/list', [AdminCouponController::class, 'List'])->name('list');
        Route::get('/add', [AdminCouponController::class, 'Add'])->name('add');
        Route::post('/add', [AdminCouponController::class, 'AddPost'])->name('addPost');
        Route::get('/update-{id}', [AdminCouponController::class, 'Update'])->name('update');
        Route::post('/update-{id}', [AdminCouponController::class, 'UpdatePost'])->name('updatePost');
        Route::get('/delete-{id}', [AdminCouponController::class, 'Delete'])->name('delete');
    });
    Route::prefix('/province')->name('province.')->group(function () {
        Route::get('/list', [AdminProvinceController::class, 'List'])->name('list');
        Route::get('/add', [AdminProvinceController::class, 'Add'])->name('add');
        Route::post('/add', [AdminProvinceController::class, 'AddPost'])->name('addPost');
        Route::get('/update-{id}', [AdminProvinceController::class, 'Update'])->name('update');
        Route::post('/update-{id}', [AdminProvinceController::class, 'UpdatePost'])->name('updatePost');
        Route::get('/delete-{id}', [AdminProvinceController::class, 'Delete'])->name('delete');
    });
    Route::prefix('/address')->name('address.')->group(function () {
        Route::get('/list', [AdminAddressController::class, 'List'])->name('list');
        Route::get('/add', [AdminAddressController::class, 'Add'])->name('add');
        Route::post('/add', [AdminAddressController::class, 'AddPost'])->name('addPost');
        Route::get('/update-{id}', [AdminAddressController::class, 'Update'])->name('update');
        Route::post('/update-{id}', [AdminAddressController::class, 'UpdatePost'])->name('updatePost');
        Route::get('/delete-{id}', [AdminAddressController::class, 'Delete'])->name('delete');
    });
    Route::prefix('/order-item')->name('orderitem.')->group(function () {
        Route::get('/list', [AdminOrderItemController::class, 'List'])->name('list');
        Route::get('/delete-{id}', [AdminOrderItemController::class, 'Delete'])->name('delete');
    });
});

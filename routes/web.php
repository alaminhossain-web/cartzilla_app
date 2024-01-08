<?php

use App\Http\Controllers\CartzillaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Checkout\CheckoutController;
use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\Wishlist\WishlistController;
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

Route::get('/',[ CartzillaController::class,'home'])->name('home');
Route::get('/product-category/{id}',[ CartzillaController::class,'category'])->name('product-category');
Route::get('/product-detail/{id}',[ CartzillaController::class,'product'])->name('product-detail');
Route::get('/about-us',[ CartzillaController::class,'about'])->name('about');
Route::get('/contact',[ CartzillaController::class,'contact'])->name('contact');
Route::resources(['cart'=>CartController::class]);
Route::post('/cart/update-product', [CartController::class, 'updateProduct'])->name('cart.update-product');
Route::get('/cart/delete-product/{rowId}', [CartController::class, 'delete'])->name('cart.delete');
Route::get('/checkout-detail', [CheckoutController::class, 'detail'])->name('checkout-detail');
Route::get('/checkout-shipping', [CheckoutController::class, 'shipping'])->name('checkout-shipping');
Route::get('/checkout-payment', [CheckoutController::class, 'payment'])->name('checkout-payment');
Route::get('/checkout-review', [CheckoutController::class, 'review'])->name('checkout-review');
Route::post('/new-order', [CheckoutController::class, 'newOrder'])->name('new-order');
Route::get('/checkout-complete', [CheckoutController::class, 'complete'])->name('checkout-complete');

Route::get('/login-register', [CustomerAuthController::class, 'login'])->name('login-register');
Route::post('/login-check', [CustomerAuthController::class, 'loginCheck'])->name('login-check');
Route::post('/new-customer', [CustomerAuthController::class, 'newCustomer'])->name('new-customer');
Route::get('/customer-logout', [CustomerAuthController::class, 'logout'])->name('customer-logout');
Route::get('/my-dashboard', [CustomerAuthController::class, 'dashboard'])->name('customer.dashboard');
Route::resource('wishlist',WishlistController::class);
Route::get('/add-wishlist/{id}',[WishlistController::class,'add'])->name('add.wishlist');






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[ DashboardController::class,'dashboard'])->name('dashboard');
    // Category Controller
    Route::resource('category',CategoryController::class);
    // Sub Category Controller
    Route::resource('sub-category',SubCategoryController::class);
    //Brand Controller
    Route::resource('brand',BrandController::class);
    //Unit Controller
    Route::resource('unit',UnitController::class);
    //Color Controller
    Route::resource('color',ColorController::class);
    //Size Controller
    Route::resource('size',SizeController::class);
    //Product  Controller
    Route::resource('product',ProductController::class);
    Route::get('/get-sub-category-by-category',[ ProductController::class,'getSubCategoryByCategory' ])->name('get-sub-category-by-category');
    Route::resource('offer',OfferController::class);

});

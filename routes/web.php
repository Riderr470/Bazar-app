<?php

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
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\HomeController;


//backend
// admin

Route::get('/admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'doAdminLogin']);

Route::group(['middleware' => 'admin'], function () {


    Route::name('admin.')->prefix('admin')->group(function () {

        Route::get('/', [WelcomeController::class, 'index']);



        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/order', [AdminController::class, 'orders'])->name('orders');

        Route::get('/banner', [AdminController::class, 'createBanner'])->name('banner');
        Route::post('/banner', [AdminController::class, 'storeBanner']);
        Route::get('/home/banner/{id}', [AdminController::class, 'editbannerForm'])->name('edit.banner');
        Route::put('/home/banner/edit{id}', [AdminController::class, 'updateBanner'])->name('home.banner.edit');

        Route::get('/logout', [AdminController::class, 'doLogout'])->name('logout');
    });


    //product
    Route::name('product.')->prefix('products')->group(function () {

        Route::get('/create', [ProductController::class, 'createProduct'])->name('create');
        Route::post('/create', [ProductController::class, 'storeProduct']);
        Route::get('/list', [ProductController::class, 'showProductList'])->name('list');
    });


    //user
    Route::name('user.')->prefix('User')->group(function () {

        Route::get('/create', [UserController::class, 'createUser'])->name('create');
        Route::post('/create', [UserController::class, 'storeUser']);

        Route::get('/list', [UserController::class, 'showUserDetails'])->name('details');
    });


    //order
    Route::name('order.')->prefix('Order')->group(function () {

        Route::get('/create', [OrderController::class, 'createOrder'])->name('create');
        Route::post('/create', [OrderController::class, 'storeOrder']);

        Route::get('/list', [OrderController::class, 'showOrders'])->name('details');
    });

    //category
    Route::name('category.')->prefix('Category')->group(function () {

        Route::get('/create', [CategoryController::class, 'createCategory'])->name('create');
        Route::post('/create', [CategoryController::class, 'storeCategory']);

        Route::get('/list', [CategoryController::class, 'listCategory'])->name('lists');
        Route::get('/details/{id}', [CategoryController::class, 'show'])->name('details');

        Route::get('/edit/{id}', [CategoryController::class, 'editCategory'])->name('edit');
        Route::put('/update/{id}', [CategoryController::class, 'updateCategory'])->name('update');
    });

    //wishlist
    Route::name('banner.')->prefix('banner')->group(function () {
        Route::get('/create', [BannerController::class, 'create'])->name('create');
        Route::post('/create', [BannerController::class, 'store']);

        Route::get('/list', [BannerController::class, 'list'])->name('list');
    });

    //wishlist
    Route::name('wishlist.')->prefix('wishlist')->group(function () {
    });


    //review or rating
    Route::name('review.')->prefix('review')->group(function () {
    });
});





//frontend

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'processLogin']);

Route::get('/', [HomeController::class, 'viewHome'])->name('home');

Route::get('/Sign-up', [UserController::class, 'showRegisterPage'])->name('register');
Route::post('/Sign-up', [UserController::class, 'storeUser']);

//cart
Route::get('/cart', [HomeController::class, 'cartView'])->name('cart.view');
Route::get('/cart/add/{id}', [HomeController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/remove/{id}', [HomeController::class, 'cartRemoveItem'])->name('cart.remove');
Route::get('/cart/clear', [HomeController::class, 'cartClear'])->name('cart.clear');



// Route::group(['middleware' => 'role:user'], function () {

Route::get('/product/details/{id}', [ProductController::class, 'showProductDetails'])->name('product.details');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/user/profile/{id}', [UserController::class, 'userProfile'])->name('user.profile');
    Route::put('/user/profile/edit{id}', [UserController::class, 'editUserProfile'])->name('user.profile.edit');

    Route::get('/logout', [UserController::class, 'doLogout'])->name('logout');
});

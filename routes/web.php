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
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\HomeController;

Route::get('/', [WelcomeController::class, 'index']);


//backend
// admin


Route::name('admin.')->prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/order', [AdminController::class, 'orders'])->name('orders');
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



//frontend

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'processLogin']);

Route::get('/Sign-up', [UserController::class, 'showRegisterPage'])->name('register');
Route::post('/Sign-up', [UserController::class, 'storeUser']);

Route::get('/home', [HomeController::class, 'viewHome'])->name('home');
Route::get('/product/details/{id}', [ProductController::class, 'showProductDetails'])->name('product.details');

Route::get('/user/profile', [UserController::class, 'userProfile'])->name('user.profile');

Route::get('/logout', [UserController::class, 'doLogout'])->name('logout');



// Route::get('/Users', [UserController::class, 'users']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CstmInvcController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\InventoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

// Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::resource('member', MemberController::class);

Route::resource('product', ProductController::class);

Route::resource('category', CategoryController::class);

Route::resource('sell', CartController::class);

Route::resource('report', ReportController::class);

Route::get('/shows', function(){
    return view('partials.show');
})->name('show');

Route::resource('customerinv', CstmInvcController::class);

Route::resource('payment', PaymentController::class);

Route::get('/adjustment', function(){
    return view('adjustment');
})->name('adjustment');

Route::get('/logistic', function(){
    return view('logistic');
})->name('logistics');

Route::get('/fullfillment', function(){
    return view('fullfill');
})->name('fullfill');

Route::get('/shift', function(){
    return view('shift');
})->name('shift');

Route::get('/promotion', function(){
    return view('promotion');
})->name('promotion');

Route::get('/debt', function(){
    return view('debt');
})->name('debt');

Route::resource('inventory', InventoryController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])->name('login')->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('register', RegisterController::class)->only(['index', 'store']);

// Route::post('register', [RegisterController::class, 'store'])->name('register');

Route::get('/form', function(){
    return view('create');
})->name('form');
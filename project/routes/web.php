<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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


$product = [
    1 => [
        'name' => 'baju',
        'image' => '....'
    ],
    2 => [
        'name' => 'baju',
        'image' => '....'
    ],
    3 => [
        'name' => 'baju',
        'image' => '....'
    ]
    ];

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/customers', MemberController::class);

Route::get('/test', function(){
    return view('partials.form');
});

Route::get('/shows', function(){
    return view('partials.show');
})->name('show');

Route::get('/orders', function(){
    return view('order');
})->name('orders');

Route::get('/sell', function(){
    return view('sells');
})->name('sell');

Route::get('/payment', function(){
    return view('payment');
})->name('payment');

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

Route::get('/reports',function(){
    return view('report');
})->name('report');

Route::get('/inventory', function(){
    return view('inventory');
})->name('invent');

Route::get('/product', function(){
    return view('product');
})->name('product');

Route::get('/hahalol', function(){
    return view('auth.login');
});

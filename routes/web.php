<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home_page');
});
Route::get('/add_food', function () {
    return view('add_food');
});

Route::get('/thankyou', function () {
    return view('thank_you');
});

Route::get('/food_list', function () {
    return view('food_list');
});

Route::get('/forgot_password', function () {
    return view('forgot_password');
});

Route::get('/reset_password', function () {
    return view('reset_password');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

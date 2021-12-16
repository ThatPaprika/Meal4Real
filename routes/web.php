<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddFoodController;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\UserController;

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
// Test Email
Route::get("email", [MailerController::class, "email"])->name("email");
Route::post("send-email", [MailerController::class, "composeEmail"])->name("send-email");

// Routes for guests
Route::get('/home', function () {
    return view('home_page');
});

Route::get('/about', function () {
    return view('about_us');
});

// Only for logged in users

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/thankyou', function () {
    return view('thank_you');
});
Route::get('/edit-food', function () {
    return view('edit_food');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__ . '/auth.php';

// Food routes

// Show the form :
Route::get('/add-food', [AddFoodController::class, 'create'])->name('add-food');
// Submit the form :
Route::post('/add-food', [AddFoodController::class, 'store']);
// Food list
Route::get('/food_list', [AddFoodController::class, 'index']);
// Meal detail page
Route::get('/detail_page', function () {
    return view('detail_page');
});

Route::get('/detail_page/{id}', [AddFoodController::class, 'show']);

Route::get('/detail_page/{id}/reserve', [AddFoodController::class, 'reservation']);

// User Controller

// Show the form :
Route::get('/edit-user', [UserController::class, 'edit'])->name('edit-user');
// Submit the form :
Route::post('/edit-user', [UserController::class, 'update']);





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

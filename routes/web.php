<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddFoodController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SendMailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for‚ your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    return view('welcome');
});

//Email verification Working dont touch
Route::get('/home', function () {
    return view('home_page');
})->middleware(['auth', 'verified'])->name('home');
require __DIR__ . '/auth.php';

// Routes for guests
Route::get('/about', function () {
    return view('about_us');
});

//Contact(Test)
Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');


Route::get('/thank_you', function () {
    return view('thank_you');
})->name('thank_you');
Route::get('/edit-food', function () {
    return view('edit_food');
});

Route::get('/edit-user', function () {
    return view('edit-user');
})->name('edit-user');


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


// Email routes
Route::get('/send_mail', [SendMailController::class, 'showemail'])->name('contactMail');
Route::post('/send_mail', [SendMailController::class, 'sendmail']);


// User routes
Route::get('/profile', [UserController::class, 'showUserInformation']);

// Show the form :
Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('edit-user');
// Submit the form :
Route::post('/edit-user', [UserController::class, 'update'])->name('edit-user');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

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
//Email verification Working dont touch
Route::get('/home', function () {
    return view('home_page');
})->middleware(['auth','verified'])->name('home');
require __DIR__ . '/auth.php';

// Routes for guests
Route::get('/about', function () {
    return view('about_us');
});



Route::get('/thankyou', function () {
    return view('thank_you');
});
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


<<<<<<< HEAD
// User Controller
=======
Route::get('/profile', [UserController::class, 'showUserInformation']);
>>>>>>> 7f01c705a6de4ac2151f9b197b4e3746b0df53b2

// Show the form :
Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('edit-user');
// Submit the form :
<<<<<<< HEAD
Route::post('/edit-user/{id}', [UserController::class, 'update']);
=======
Route::post('/edit-user', [UserController::class, 'update'])->name('edit-user');

>>>>>>> 7f01c705a6de4ac2151f9b197b4e3746b0df53b2




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

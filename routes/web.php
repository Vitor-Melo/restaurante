<?php

use App\Http\Controllers\Admin\RestaurantController;
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


Route::prefix('admin')->group(function () {
    Route::get('restaurants', [RestaurantController::class, 'index'])->name('restaurant.index');
    Route::get('restaurants/new', [RestaurantController::class, 'new'])->name('restaurant.new');
    Route::post('restaurants/store', [RestaurantController::class, 'store'])->name('restaurant.store');
});

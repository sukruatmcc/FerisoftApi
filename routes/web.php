<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/api_login",[ApiController::class,"login"])->name("login");
Route::get("/api_products",[ApiController::class,"products"])->name("products");
Route::get("/api_categories",[ApiController::class,"categories"])->name("categories");

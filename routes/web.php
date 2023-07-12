<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class, 'index']);
Route::get('contact',[HomeController::class, 'contact']);
Route::get('about', [HomeController::class, 'about']);
Route::get('blog-grid-left-sidebar', [HomeController::class,'blog-grid-left-sidebar']);
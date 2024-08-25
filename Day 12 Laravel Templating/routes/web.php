<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;

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

Route::get('/', [HomeController::class, 'home']);

Route::get('/daftar', [AuthController::class, 'daftar']);

Route::post('/welcome', [AuthController::class, 'welcome']);

Route::get('/table', function () {
    return view('page.table');
});

Route::get('/data-tables', function () {
    return view('page.data-tables');
});

Route::resource('category', CategoriesController::class);

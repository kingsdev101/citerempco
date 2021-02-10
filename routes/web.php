<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OutsidePageController;
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
    return view('welcomepage.aboutus');
});

Auth::routes();

Route::get('/homes', [HomeController::class, 'index'])->name('homes');
Route::get('/aboutus', [OutsidePageController::class, 'aboutus'])->name('aboutus');
Route::get('/home', [OutsidePageController::class, 'home'])->name('home');


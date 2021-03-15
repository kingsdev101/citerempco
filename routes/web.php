<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OutsidePageController;
use App\Http\Controllers\InsidePageController;
use \App\Http\Controllers\Auth\LoginController
;
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
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logoutfirst', [InsidePageController::class, 'logoutfirst'])->name('logoutfirst');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/citerempco/aboutus', [OutsidePageController::class, 'aboutus'])->name('citerempco.aboutus');
Route::get('/citerempco/register', [OutsidePageController::class, 'home'])->name('citerempco.register');

Route::get('/citerempco/home', [InsidePageController::class, 'applicationform'])->name('citerempco.loanapplication.form');
Route::post('/citerempco/loanapplication/register', [InsidePageController::class, 'store'])->name('citerempco.loanappllication.store');

Route::get('/citerempco/loanapplication/rigistercomplete', [InsidePageController::class, 'complete'])->name('citerempco.loanapplication.complete');
Route::get('/citerempco/deedofassigment', [InsidePageController::class, 'deedofassigment'])->name('citerempco.deedofassigment.index');

Route::get('/citerempco/promissorynote', [InsidePageController::class, 'promissory'])->name('citerempco.promissory.index');

Route::get('/citerempco/applicationforcredit', [InsidePageController::class, 'credit'])->name('citerempco.credit.index');
Route::get('/citerempco/certification', [InsidePageController::class, 'certication'])->name('citerempco.certication.index');
Route::get('/citerempco/creditlifeinsurance', [InsidePageController::class, 'creditlifeinsurance'])->name('citerempco.creditlifeinsurance.index');
Route::post('/citerempco/creditlifeinsurance', [InsidePageController::class, 'creditlifeinsurancestore'])->name('citerempco.creditlifeinsurancestore.index');
Route::get('/citerempco/emergencyloan', [InsidePageController::class, 'emergencyloan'])->name('citerempco.emergencyloan.index');
Route::get('/citerempco/applicationfadds', [InsidePageController::class, 'appifadds'])->name('citerempco.applicationfadds.index');
Route::post('/citerempco/applicationfadds/apply', [InsidePageController::class, 'addsapply'])->name('citerempco.applicationfadds.apply');
Route::get('/citerempco/loanapplicationagreement', [InsidePageController::class, 'loanagreement'])->name('citerempco.loanagreement.index');
Route::post('/citerempco/loanapplicationagreement/apply', [InsidePageController::class, 'loanagreementapply'])->name('citerempco.loanagreement.apply');


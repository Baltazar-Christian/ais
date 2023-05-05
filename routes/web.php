<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AccountTypeController;
use App\Http\Controllers\FinancialYearController;
use App\Http\Controllers\AccountProcessController;
use App\Http\Controllers\AccountSubTypeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Fincial Year Routes
Route::get('/financial_years',[FinancialYearController::class,'index'])->name('financial_years.index');
Route::get('/financial_years/create',[FinancialYearController::class,'create'])->name('financial_years.create');
Route::any('/financial_years/store',[FinancialYearController::class,'store'])->name('financial_years.store');
Route::any('/financial_years/edit/{id}',[FinancialYearController::class,'edit'])->name('financial-years.edit');
Route::any('/financial_years/destroy/{id}',[FinancialYearController::class,'destroy'])->name('financial-years.destroy');


// AccountTypes Route
Route::get('/account-types',[AccountTypeController::class,'index'])->name('account-types.index');
Route::get('/account-types/create',[AccountTypeController::class,'create'])->name('account-types.create');
Route::any('/account-types/store',[AccountTypeController::class,'store'])->name('account-types.store');
Route::any('/account-types/edit/{id}',[AccountTypeController::class,'edit'])->name('account-types.edit');
Route::any('/account-types/destroy/{id}',[AccountTypeController::class,'destroy'])->name('account-types.destroy');
Route::any('/account-types/show/{id}',[AccountTypeController::class,'show'])->name('account-types.show');
Route::any('/account-types/update',[AccountTypeController::class,'update'])->name('account-types.update');

// For AccountSubTypes Route
Route::get('/account-subtypes/create/{id}',[AccountSubTypeController::class,'create'])->name('account-subtypes.create');
Route::any('/account-subtypes/store',[AccountSubTypeController::class,'store'])->name('account-subtypes.store');
Route::any('/account-subtypes/edit/{id}',[AccountSubTypeController::class,'edit'])->name('account-subtypes.edit');
Route::any('/account-subtypes/destroy/{id}',[AccountSubTypeController::class,'destroy'])->name('account-subtypes.destroy');
Route::any('/account-subtypes/show/{id}',[AccountSubTypeController::class,'show'])->name('account-subtypes.show');
Route::any('/account-subtypes/update',[AccountSubTypeController::class,'update'])->name('account-subtypes.update');


// For Accounts Routes
Route::get('/accounts/index',[AccountController::class,'index'])->name('accounts.index');
Route::get('/accounts/create',[AccountController::class,'create'])->name('accounts.create');
Route::any('/accounts/store',[AccountController::class,'store'])->name('accounts.store');
Route::any('/accounts/edit/{id}',[AccountController::class,'edit'])->name('accounts.edit');
Route::any('/accounts/destroy/{id}',[AccountController::class,'destroy'])->name('accounts.destroy');
Route::any('/accounts/show/{id}',[AccountController::class,'show'])->name('accounts.show');
Route::any('/accounts/update',[AccountController::class,'update'])->name('accounts.update');

// For Account Process Routes
Route::get('/accounts-process/index',[AccountProcessController::class,'index'])->name('accounts-process.index');
Route::get('/accounts-process/create',[AccountProcessController::class,'create'])->name('accounts-process.create');
Route::any('/accounts-process/store',[AccountProcessController::class,'store'])->name('accounts-process.store');
Route::any('/accounts-process/edit/{id}',[AccountProcessController::class,'edit'])->name('accounts-process.edit');
Route::any('/accounts-process/destroy/{id}',[AccountProcessController::class,'destroy'])->name('accounts-process.destroy');
Route::any('/accounts-process/show/{id}',[AccountProcessController::class,'show'])->name('accounts-process.show');
Route::any('/accounts-process/update',[AccountProcessController::class,'update'])->name('accounts-process.update');



Route::resources(
    [
        '/financial_years' => App\Http\Controllers\FinancialYearController::class,
    ]
    );

// End of Financial Year Routes

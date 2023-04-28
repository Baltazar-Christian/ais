<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountTypeController;
use App\Http\Controllers\FinancialYearController;

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






Route::resources(
    [
        '/financial_years' => App\Http\Controllers\FinancialYearController::class,
    ]
    );

// End of Financial Year Routes

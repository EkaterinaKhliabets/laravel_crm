<?php

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

/*Route::get('/', function () {
    return 111;
});*/

Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');



Route::get('/organization', [\App\Http\Controllers\OrganizationController::class, 'index'])
    ->name('organization.index');

Route::put('/organization', [\App\Http\Controllers\OrganizationController::class, 'update'])
    ->name('organization.update');

Route::resource('banks', \App\Http\Controllers\BankController::class)->names([
    'edit' => 'banks.edit',
    'create' => 'banks.create',
    'show' => 'banks.show',
    'index' => 'banks.index',
    'store' => 'banks.store',
    'update' => 'banks.update',
    'destroy' => 'banks.delete'
]);

Route::resource('currencies', \App\Http\Controllers\CurrencyController::class )->names([
    'edit' => 'currencies.edit',
    'create' => 'currencies.create',
    'show' => 'currencies.show',
    'index' => 'currencies.index',
    'store' => 'currencies.store',
    'update' => 'currencies.update',
    'destroy' => 'currencies.delete'
]);

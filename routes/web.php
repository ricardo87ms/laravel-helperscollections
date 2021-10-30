<?php

use App\Http\Controllers\Helpers\ArrayController;
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

Route::prefix('helpers')->name('helpers.')->group(function () {

    Route::prefix('arrays')->name('arrays.')->group(function () {

        Route::get('accessible', [ArrayController::class, 'accessible'])->name('accessible');
        Route::get('add', [ArrayController::class, 'add'])->name('add');
    });
});

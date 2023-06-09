<?php
namespace App\Http\Controllers;

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

Route::get('/', [XmformController::class, 'index']);
Route::post('/submit-form', [XmformController::class, 'submitForm'])->name('submitForm');
Route::post('/historical-data', [XmformController::class, 'symbol_historical_data'])->name('historicalChart');
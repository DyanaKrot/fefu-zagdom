<?php

use App\Http\Controllers\FormWebController;
use App\Http\Controllers\WebController;
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

Route::get('/', WebController::class . '@home')->name('home');
Route::get('/news', WebController::class . '@news')->name('news');

Route::any('/form-ajax', FormWebController::class . '@formAjax')->name('form-ajax');
Route::any('/form-native', FormWebController::class . '@formNative')->name('form-native');


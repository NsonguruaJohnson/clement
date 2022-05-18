<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CssController;
use App\Http\Controllers\ContentController;

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

Route::view('/test', 'contact');

Route::get('/process', [ContentController::class, 'index'])->name('content');
Route::post('process', [ContentController::class, 'store']);


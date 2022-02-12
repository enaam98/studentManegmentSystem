<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

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

Route::get('/student', [studentController::class, 'index']);
Route::get('/edit/{id}', [studentController::class, 'edit']);
Route::get('/show/{id}', [studentController::class, 'show']);
Route::post('/update/{id}', [studentController::class, 'update']);
Route::get('/create', [studentController::class, 'create']);
Route::post('/store', [studentController::class, 'store']);

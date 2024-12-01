<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloUshasriController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyViewController;



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

Route::get('/usha',[HelloUshasriController::class, 'index']);
Route::get('/greet/{name}',[HelloUshasriController::class, 'greet']);



Route::get('/sum/{num1}/{num2}',[CalculatorController::class, 'sum']);
Route::get('/sub/{num1}/{num2}',[CalculatorController::class, 'sub']);
Route::get('/mul/{num1}/{num2}',[CalculatorController::class, 'mul']);
Route::get('/div/{num1}/{num2}',[CalculatorController::class, 'div']);


Route::get('/myview',[MyViewController::class, 'myview']);
Route::get('/login',[MyViewController::class, 'login']);
Route::get('/register',[MyViewController::class, 'register']);



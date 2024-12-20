<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloUshasriController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyViewController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductsManager;
use App\Http\Controllers\Hash;
use App\Http\Controllers\User;





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







Route::get('authlogin',[App\Http\Controllers\AuthManager::class, 'login'])->name('authlogin');
Route::get('authregister',[App\Http\Controllers\AuthManager::class, 'register'])->name('authregister');

Route::post('authlogin',[App\Http\Controllers\AuthManager::class, 'loginPost'])->name('authlogin.post');
Route::post('authregister',[App\Http\Controllers\AuthManager::class, 'registerUser'])->name('authregister.post');

Route::get('home', [App\Http\Controllers\ProductsManager::class, 'index'])->name('home');
Route::get('login',[App\Http\Controllers\AuthManager::class, 'login'])->name('login');
Route::get('logout',[App\Http\Controllers\AuthManager::class, 'logout'])->name('logout');


Route::get('products',[App\Http\Controllers\ProductsManager::class, 'Product'])->name('products');
Route::get('categories',[App\Http\Controllers\CategoriesManager::class, 'Category'])->name('categories');




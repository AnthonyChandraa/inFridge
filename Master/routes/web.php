<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FridgeController;
use App\Http\Controllers\RecipeController;

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
Route::get('/', [PageController::class, 'indexLanding'])->name('landing_page');

Route::group( ['prefix' => 'auth'] ,function () {
    Route::get('login', [UserController::class, 'index_login'])->name('login_page');
    Route::get('register', [UserController::class, 'index_register'])->name('register_page');
    Route::post('login', [UserController::class, 'login'])->name('login');
    Route::post('register', [UserController::class, 'register'])->name('register');
});

Route::get('/dashboard', [PageController::class, 'indexDashboard'])->name('dashboard_page');

Route::group(['prefix' => 'fridge'], function () {
    Route::get('manage', [FridgeController::class, 'index'])->name('manage_fridge_page');
    Route::get('add', [FridgeController::class, 'create'])->name('add_item_page');
    Route::post('add', [FridgeController::class, 'store'])->name('add_item');
    Route::post('delete', [FridgeController::class, 'destroy'])->name('delete_item');
});

Route::group(['prefix' => 'recipe'], function(){
   Route::get('view', [RecipeController::class, 'index'])->name('view_recipes_page');
});

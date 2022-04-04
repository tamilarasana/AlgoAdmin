<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\Web\WebBasketController;
use App\Http\Controllers\Web\WebBasketCatController;


use App\Http\Controllers\DynamicFieldController;
use App\Models\Basket;

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
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {

// Route::resource('basket', WebBasketController::class);
// Route::resource('basketcat', WebBasketCatController::class);
Route::get('/basketcat.index', [WebBasketCatController::class,'index'])->name('basketcat.index');
Route::get('/basketcat/create', [WebBasketCatController::class,'create'])->name('basketcat.create');
Route::post('/basketcat/store', [WebBasketCatController::class,'store'])->name('basketcat.store');
Route::get('/basketcat-delete/{id}', [WebBasketCatController::class,'destroy'])->name('basketcat.delete');

Route::get('/baskets/edit/{id}', [WebBasketController::class,'edit'])->name('baskets.edit');
Route::post('/baskets/store/', [WebBasketController::class,'store'])->name('baskets.store');
Route::delete('baskets/delete/{id?}', [WebBasketController::class,'delete'])->name('baskets.delete');

});

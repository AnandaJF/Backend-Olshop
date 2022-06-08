<?php

use App\Models\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

Auth::routes(['register' => true]);


Route::get('product/{id}/gallery', 'App\Http\Controllers\ProductController@gallery')
    ->name('products.gallery');

Route::resource('products', 'App\Http\Controllers\ProductController');

Route::resource('product-galleries', 'App\Http\Controllers\ProductGalleryController');

Route::get('transcation/{id}/set-status', 'App\Http\Controllers\TransactionController@setStatus')
    ->name('transcation.status');

Route::resource('transaction', 'App\Http\Controllers\TransactionController');

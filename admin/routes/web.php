<?php

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
    return view('admin.slider.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('slider','App\Http\Controllers\SliderController');
Route::resource('smallBanner','App\Http\Controllers\SmallBannerController');
Route::resource('downBanner','App\Http\Controllers\DownBannerController');
Route::resource('product','App\Http\Controllers\ProductController');
Route::resource('category','App\Http\Controllers\CategoryController');
Route::resource('subcategory','App\Http\Controllers\SubcategoryController');
Route::resource('brand','App\Http\Controllers\BrandController');
Route::resource('gallery','App\Http\Controllers\GalleryController');
Route::resource('order','App\Http\Controllers\OrderController');
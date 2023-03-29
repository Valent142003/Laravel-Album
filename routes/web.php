<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('welcome');});

Route::get('/index', function () {return view('index');});
Route::get('/404', function () {return view('404');});
Route::get('/blog-detail', function () {return view('blog-detail');});
Route::get('/blog-grid-1', function () {return view('blog-grid-1');});
Route::get('/blog-grid', function () {return view('blog-grid');});
Route::get('/blog-list-1', function () {return view('blog-list-1');});
Route::get('/blog-list-2', function () {return view('blog-list-2');});
Route::get('/blog-list', function () {return view('blog-list');});
Route::get('/coming-soon', function () {return view('coming-soon');});
Route::get('/contact-v2', function () {return view('contact-v2');});
Route::get('/contact', function () {return view('contact');});
Route::get('/faqs', function () {return view('faqs');});
Route::get('/shop-3col-slide', function () {return view('shop-3col-slide');});
Route::get('/shop-3col', function () {return view('shop-3col');});
Route::get('/shop-4col', function () {return view('shop-4col');});
Route::get('/shop-5col', function () {return view('shop-5col');});
Route::get('/shop-detail-des', function () {return view('shop-detail-des');});
Route::get('/shop-detail-exter', function () {return view('shop-detail-exter');});
Route::get('/shop-detail-fix', function () {return view('shop-detail-fix');});
Route::get('/shop-detail-group', function () {return view('shop-detail-group');});
Route::get('/shop-detail-option', function () {return view('shop-detail-option');});
Route::get('/shop-detail-video', function () {return view('shop-detail-video');});
Route::get('/shop-detail-zoom', function () {return view('shop-detail-zoom');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

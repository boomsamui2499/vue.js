<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatagoryController;

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

Route::get('/main', function () {
    return view('page.main');
});
Route::get('/product_manage', function () {
    return view('page.product_manage');
});

Route::get('/product_manage_create', function () {
    return view('page.product_manage_create');
});

Route::get('/product_manage_edit', function () {
    return view('page.product_manage_edit');
});

Route::get('/category_manage', function () {
    return view('page.category_manage');
});

Route::get('/index', function () {
    return view('page.index');
});

Route::get('/token', function () {
    return csrf_token(); 
});

// Route::resource('product', 'App\Http\Controller\ProductController');
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/search/{name}', [ProductController::class, 'search']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::post('/product/add', [ProductController::class, 'add']);
Route::put('/product/{id}/update', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'del']);



Route::get('/category', [CatagoryController::class, 'index']);
Route::get('/category/{id}', [CatagoryController::class, 'show']);
Route::post('/category/add', [CatagoryController::class, 'add']);
Route::put('/category/{id}/update', [CatagoryController::class, 'update']);
Route::delete('/category/{id}', [CatagoryController::class, 'del']);

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['permission:view users|edit users']], function () {
        Route::resource('users', App\Http\Controllers\UserController::class);
    });
    Route::group(['middleware' => ['permission:view roles|edit roles']], function () {
        Route::resource('roles', App\Http\Controllers\RoleController::class);
    });
    Route::group(['middleware' => ['permission:view categories|edit categories|delete categories']], function () {
        Route::resource('categories', App\Http\Controllers\CategoryController::class);
    });
     Route::group(['middleware' => ['permission:view customers|edit customers|delete customers']], function () {
        Route::resource('customers', App\Http\Controllers\CustomerController::class);
    });
    Route::group(['middleware' => ['permission:view suppliers|edit suppliers|delete suppliers']], function () {
        Route::resource('suppliers', App\Http\Controllers\SupplierController::class);
    });
    Route::group(['middleware' => ['permission:view products|edit products|delete products']], function () {
        Route::resource('products', App\Http\Controllers\ProductController::class);
        Route::resource('inventories', App\Http\Controllers\InventoryController::class);
        Route::get('/import-products', [App\Http\Controllers\ProductController::class, 'import_get'])->name('products.import_get');
        Route::post('/import-products', [App\Http\Controllers\ProductController::class, 'import_post'])->name('products.import_post');
        
    });
});

Route::get('/tables', function () { return view('template.tables'); })->name('template.tables');




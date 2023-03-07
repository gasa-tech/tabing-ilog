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

Route::get('/pos', [App\Http\Controllers\PosController::class, 'index'])->name('pos');

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
});

Route::get('/tables', function () { return view('template.tables'); })->name('template.tables');




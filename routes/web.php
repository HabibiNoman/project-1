<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\UserController;
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
Route::get('login',[\App\Http\Controllers\Backend\LoginController::class,'login'])->name('login');
Route::post('login',[\App\Http\Controllers\Backend\LoginController::class,'dologin']);






//users



Route::middleware('auth')->group(function (){
    Route::get('logout',[\App\Http\Controllers\Backend\LoginController::class,'logout'])->name('logout');

    Route::middleware('IsAdmin')->group(function (){
        Route::get('/',[\App\Http\Controllers\Backend\DashboardController::class,'index'])->name('admin.dashboard');
        Route::get('/products',[\App\Http\Controllers\backend\ProductController::class,'index'])->name('admin.products');

        //users//
        Route::get('profile',[\App\Http\Controllers\Backend\LoginController::class,'profile'])->name('profile');
        Route::get('users',[\App\Http\Controllers\backend\UserController::class,'index'])->name('admin.users');
        Route::get('users/create',[\App\Http\Controllers\backend\UserController::class,'create'])->name('admin.users.create');
        Route::post('users/create',[\App\Http\Controllers\backend\UserController::class,'store']);
        Route::get('users/delete/{id}',[\App\Http\Controllers\backend\UserController::class,'delete'])->name('admin.users.delete');

    });


});




//Route::get('/test',[\App\Http\Controllers\Backend\DashboardController::class,'test']);


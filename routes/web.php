<?php

use App\Http\Controllers\Backend\DashboardController;
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

Route::group(['namespace'=> 'Backend', 'prefix'=>'admin', 'as'=>'admin.'], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

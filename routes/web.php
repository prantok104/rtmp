<?php

use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\ChannelsController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EventsController;
use App\Http\Controllers\Backend\GroupsController;
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

Route::group(['prefix'=>'admin', 'as'=>'admin.'], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('events', [EventsController::class, 'index'])->name('event');
    Route::get('channels', [ChannelsController::class, 'index'])->name('channel');
    Route::resource('groups', GroupsController::class);

    /*----------------------Auth Route------------------------*/
    Route::get('login', [LoginController::class, 'index'])->name('auth.login');
});

Route::get('/', function(){
    return redirect()->route('admin.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

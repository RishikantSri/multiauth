<?php

use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\ClientAuthController;
use App\Http\Controllers\Auth\ManagerAuthController;
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

Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'store'])->name('admin.login.store');
Route::post('/admin/logout', [AdminAuthController::class, 'logoutAdmin'])->name('admin.logout');
Route::get('/admin/panel', [AdminPagesController::class, 'panel_home'])->name('admin.panel')->middleware('auth:admin');


Route::get('/manager/login', [ManagerAuthController::class, 'login'])->name('manager.login');
Route::post('/manager/login', [ManagerAuthController::class, 'store'])->name('manager.login.store');
Route::post('/manager/logout', [ManagerAuthController::class, 'logoutManager'])->name('manager.logout');
Route::get('/manager/panel', [ManagerPagesController::class, 'panel_home'])->name('manager.panel')->middleware('auth:manager');


Route::get('/client/login', [ClientAuthController::class, 'login'])->name('client.login');
Route::post('/client/login', [ClientAuthController::class, 'store'])->name('client.login.store');
Route::post('/client/logout', [ClientAuthController::class, 'logoutClient'])->name('client.logout');
Route::get('/client/panel', [ClientPagesController::class, 'panel_home'])->name('client.panel')->middleware('auth:client');



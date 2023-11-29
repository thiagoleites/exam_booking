<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\{AuthController, PessoaController};
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

//Route::get('/', function () {
//    return view('admin.dashboard');
//});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/login/do', [AuthController::class, 'attempt'])->name('admin.login.do');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
//    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/dashboard', DashboardController::class)->name('admin.dashboard');
    Route::get('/pessoas', [PessoaController::class, 'index'])->name('admin.pessoas');
    //    Route::get('/users/create', 'Admin\UserController@create')->name('admin.users.create');
    //    Route::post('/users/create', 'Admin\UserController@store')->name('admin.users.store');
    //    Route::get('/users/{id}/edit', 'Admin\UserController@edit')->name('admin.users.edit');
    //    Route::post('/users/{id}/edit', 'Admin\UserController@update')->name('admin.users.update');
    //    Route::get('/users/{id}/delete', 'Admin\UserController@delete')->name('admin.users.delete');
    //    Route::get('/users/{id}/change-password', 'Admin\UserController@changePassword')->name('admin.users.change-password');
    //    Route::post('/users/{id}/change-password', 'Admin\UserController@updatePassword')->name('admin.users.update-password');
    //    Route::get('/users/{id}/change-status', 'Admin\UserController@changeStatus')->name('admin.users.change-status');
    //    Route::get('/users/{id}/change-role', 'Admin\UserController@changeRole')->name('admin.users.change-role');
    //    Route::post('/users/{id}/change-role', 'Admin\UserController@updateRole')->name('admin.users.update-role');
    //    Route::get('/users/{id}/change-avatar', 'Admin\UserController@changeAvatar')->name('admin.users.change-avatar');
    //    Route::post('/users/{id}/change-avatar', 'Admin\UserController@updateAvatar')->name('admin.users.update-avatar');
    //    Route::get('/users/{id}/change-cover', 'Admin\UserController@changeCover')->name('admin.users.change-cover');
    //    Route::post('/users/{id}/change-cover', 'Admin\UserController@updateCover')->name('admin.users.update-cover');
});

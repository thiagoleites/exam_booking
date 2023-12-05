<?php

use App\Http\Controllers\Admin\{AuthController, PessoaController};
use App\Http\Controllers\DashboardController;
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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/login/do', [AuthController::class, 'attempt'])->name('admin.login.do');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::get('/dashboard', DashboardController::class)->name('admin.dashboard');
        Route::get('/pessoas', [PessoaController::class, 'index'])->name('admin.pessoas');
        Route::get('/pessoas/create', [PessoaController::class, 'create'])->name('admin.pessoas.create');
        Route::post('/pessoas/create/do', [PessoaController::class, 'store'])->name('admin.pessoas.create.do');
    });

});

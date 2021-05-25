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

Route::get('/', \App\Http\Livewire\Frontend\Home::class);

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('backend')->group(function () {
        Route::get('/', \App\Http\Livewire\Backend\Dashboard::class);
        Route::get('/dashboard', \App\Http\Livewire\Backend\Dashboard::class);
        Route::get('/pegawai', \App\Http\Livewire\Backend\Pegawai::class);
    });
});

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
    return view('auth.login');
});

Auth::routes();

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('dashboard', App\Http\Livewire\Admin\Dashboard\Index::class)->name('dashboard');
    Route::get('students', App\Http\Livewire\Admin\Students\Index::class)->name('students');
    Route::get('title', App\Http\Livewire\Admin\Titles\Index::class)->name('titles');
});

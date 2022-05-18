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
    return view('umum.home');
});

Route::get('/destinasi', function () {
    return view('umum.destinasi');
});

Route::get('/about', function () {
    return view('umum.about');
});

Route::get('/kontak', function () {
    return view('umum.kontak');
});

Route::get('login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/postlogin', [App\Http\Controllers\LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin,pengurus']], function() {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
});

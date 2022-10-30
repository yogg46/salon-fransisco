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
    return view('auth-login');
});
Route::get('/list-datajasa', function () {
    return view('list-datajasa');
});
Route::get('/list-datastok', function () {
    return view('list-datastok');
});
Route::get('/list-datauser', function () {
    return view('list-datauser');
});
Route::get('/list-laporankeuangan', function () {
    return view('list-laporankeuangan');
});
Route::get('/index-admin', function () {
    return view('index-admin');
});
Route::get('/index-kasir', function () {
    return view('index-kasir');
});
Route::get('/kasir', function () {
    return view('kasir');
});
Route::get('/form-datastok', function () {
    return view('form-datastok');
});
Route::get('/form-datajasa', function () {
    return view('form-datajasa');
});
Route::get('/form-datauser', function () {
    return view('form-datauser');
});
Route::get('/form-laporankeuangan', function () {
    return view('form-laporankeuangan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
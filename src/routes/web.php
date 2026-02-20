<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'contact']);

Route::post('/contacts/confirm', [ContactController::class, 'confirm']);

Route::post('/contacts', [ContactController::class, 'store']);










//以下、viewファイル作成用のテスト（最後に削除する）
Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/register', function () {
    return view('register');
});


//以下、テスト「
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/confirm', function () {
    return '';
})->name('contact.confirm');
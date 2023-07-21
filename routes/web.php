<?php

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

Route::get('/', function () {
    return view('users.home');
});

Route::get('/faq', function () {
    return view('users.faq');
});

Route::get('/tags', function () {
    return view('users.tags');
});

Route::get('/about', function () {
    return view('users.profil');
});
Route::get('//setting', function () {
    return view('users.setting');
});



Route::get('/auth/login', function () {
    return view('auth.login');
});


Route::get('/auth/registration', function () {
    return view('auth.register');
});

//untuk halaaman admin
Route::get('/admin', function () {
    return view('admin.dashboard.index');
});
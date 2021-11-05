<?php

use App\Models\User;
use App\Modules\Category\Models\Category;
use App\Modules\Product\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/


Route::get('/', function () {

    return view('layouts.home-layout');
})->name('welcome');

Route::get('/login', function () {
    // return view('login');
    return view('pages.home.home');
})->name('login');

Route::get('/register', function () {
    return view('pages.home.home');
    // return view('register');
})->name('register');

Route::get('/logout', function () {
    return redirect(route('welcome'));
})->name('logout');

Route::get('/home', function () {
    return view('pages.home.home');
})->name('home');


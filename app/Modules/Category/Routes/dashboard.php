<?php

use App\Models\User;
use App\Modules\Category\Controllers\CategoryController;
use App\Modules\Category\Models\Category;
use App\Modules\Product\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/


// ============= Admin routes start here ================


$categories = Category::with(['parent','children'])->get();

Route::get('/', function () use ($categories) {

    return view('pages.admin.admin', compact('categories'));
    
})->name('dashboard');


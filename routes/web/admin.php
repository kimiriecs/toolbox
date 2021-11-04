<?php

use App\Models\User;
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

Route::prefix('admin')->group( function() {

    $categories = Category::with(['parent','children'])->get();

    Route::get('/', function () use ($categories) {

        return view('layouts.app', compact('categories'));
    });

    Route::prefix('categories')->group( function () use ($categories) {
    
        foreach ($categories as $category) {
    
            $categoryName = $category->slug;
    
            Route::get("/{$categoryName}", function () use ($categories, $category, $categoryName) {

                $categoryRealName = $category->name;

                $message = Route::currentRouteName();
                
                $currentPath= Route::getCurrentRoute()->uri();
    
                return view('categories.category', compact('categories','message', 'currentPath', 'categoryRealName'));
    
            })->name("$categoryName");
    
        }
    });
});

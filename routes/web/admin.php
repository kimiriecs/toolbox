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
| Admin Routes
|--------------------------------------------------------------------------
|
*/


// ============= Admin routes start here ================

Route::prefix('admin')->group( function() {

    $categories = Category::all();

    Route::get('/', function () use ($categories) {

        return view('layouts.app', compact('categories'));
    });

    Route::prefix('categories')->group( function () use ($categories) {
    
        foreach ($categories as $category) {
    
            $categoryName = 'category-' . $category->id;
            
            if ($category->id == 1) {
                $categoryName = 'category-nocategory';
            } else {
                $categoryName = 'category-' . $category->id-1;
            }
    
            Route::get("/{$categoryName}", function () use ($categories, $category) {

                $categoryRealName = $category->name;

                $message = Route::currentRouteName();
                
                $currentPath= Route::getCurrentRoute()->uri();
    
                return view('categories.category', compact('categories','message', 'currentPath', 'categoryRealName'));
    
            })->name("$categoryName");
    
        }
    });
});

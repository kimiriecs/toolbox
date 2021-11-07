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

Route::prefix('admin')->group( function() {

    $categories = Category::with(['parent','children'])->get();

    Route::get('/', function () use ($categories) {

        return view('layouts.admin-layout', compact('categories'));
        
    })->name('dashboard');

    Route::prefix('categories')->group( function () use ($categories) {

        Route::get('/', [CategoryController::class, 'index'])->name('all-categories');

        Route::post('/root-category-create', [CategoryController::class, 'rootCategoryCreate'])->name('root-category-create');
        
        Route::get('/create', [CategoryController::class, 'create'])->name('category-create');
        Route::get('{category}/sub-category-create', [CategoryController::class, 'createSubCategory'])->name('sub-category-create');
        Route::post('/store', [CategoryController::class, 'store'])->name('category-store');
    
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

<?php

use App\Models\User;
use App\Modules\Category\Http\Controllers\CategoryController;
use App\Modules\Category\Models\Category;
use App\Modules\Product\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Categories Routes
|--------------------------------------------------------------------------
|
*/


// ============= Categories routes start here ================

$categories = Category::with(['parent','children'])->get();

Route::prefix('categories')->group( function () use ($categories) {

    Route::get('/', [CategoryController::class, 'index'])->name('all-categories');

    Route::get('/root-category-create', [CategoryController::class, 'rootCategoryCreate'])->name('root-category-create');
    
    Route::get('/create', [CategoryController::class, 'create'])->name('category-create');

    Route::get('{category}/sub-category-create', [CategoryController::class, 'createSubCategory'])->name('sub-category-create');
    
    Route::post('/store', [CategoryController::class, 'store'])->name('category-store');


    /**
     * 
     * Automatic registration routes for categories that currently are present in database
     * 
     */
    foreach ($categories as $category) {

        $categoryName = $category->slug;

        $categoryParentName = ($category->parent_id === null) ? null : $category->parent->slug ;

        $uri = !$categoryParentName ? '' : ($category->parent_id === 1 ? '' : $categoryParentName);
        // $uri = !$categoryParentName ? $categoryName : ($category->parent_id === 1 ? $categoryName : $categoryParentName . '/' . $categoryName);

        Route::get("/$uri/{category}", [CategoryController::class, 'show'])->name("$categoryName");

        // Route::get("/{$uri}", function () use ($categories, $category, $categoryName) {

        //     $categoryRealName = $category->name;

        //     $message = Route::currentRouteName();
            
        //     $currentPath= Route::getCurrentRoute()->uri();

        //     return view('category::category', compact('categories','message', 'currentPath', 'categoryRealName'));

        // })->name("$categoryName");

        
    }
});

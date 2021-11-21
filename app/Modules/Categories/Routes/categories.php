<?php


use Modules\Categories\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Categories Routes
|--------------------------------------------------------------------------
|
*/


// ============= Categories routes start here ================


Route::prefix('categories')->group( function () {

    Route::get('/', [CategoryController::class, 'index'])->name('all-categories');

    Route::get('/root-category-create', [CategoryController::class, 'rootCategoryCreate'])->name('rootCategory.create');
    
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    
    Route::get('{category}/sub-category-create', [CategoryController::class, 'createSubCategory'])->name('subCategory.create');
    
    Route::get('/{category}/{subCategory?}', [CategoryController::class, 'showRedirect'])->name('category.redirect.show');
    
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');



    /**
     * 
     * Automatic registration routes for categories that currently are present in database
     * 
     */

    /*  $categories = Category::with(['parent','children'])->get();
    
        foreach ($categories as $category) {

            $categoryName = $category->slug;

            Route::get("/$categoryName", function () use ($categories, $category, $categoryName) {
        
                $categoryRealName = $category->name;
        
                $message = Route::currentRouteName();
                
                $currentPath= Route::getCurrentRoute()->uri();
        
                return view('category::category', compact('categories','message', 'currentPath', 'categoryRealName'));
        
            })->name("$categoryName");

        }
    */

});


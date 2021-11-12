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
| Categories Experiments Routes
|--------------------------------------------------------------------------
|
*/


    // Recursive categories rendering experiment

    // Route::prefix('categories')->group( function() {

    
    //     Route::get('/all', function() {
    
    //         $categories = Category::all();
    
    //         return view('categories.categories', compact('categories'));
    
    //     })->name('all-categories');
    
    
    //     Route::get('/all-with-children', function() {
    
    //         $categories = Category::with('children')->get();
    
    //         return view('categories.categories', compact('categories'));
    
    //     })->name('all-categories-with-children');
    
    
    //     Route::get('/all-with-parents', function() {
    //         $categories = Category::with('parent')->get();
    //         foreach($categories as $category) {
    //             if( $category->parent_id == null ) {
    //                 dump($category->name . ' -> parent - ' . "ROOT");
    //             } else {
    
    //                 dump($category->name . ' -> parent - ' . $category->parent->name);
    //             }
    //         }
    //     });
    
           
    //     Route::get('/{id}', function($id) {
    //         $category = Category::find($id);
    //         dump($category->name);
    //     });
    
    //     Route::get('/{id}/parent', function($id) {
    //         $category = Category::find($id);
    //         if( $category->parent_id == null ) {
    //             dump($category->name . ' -> parent - ' . "ROOT");
    //         } else {
    
    //             dump($category->name . ' -> parent - ' . $category->parent->name);
    //         }
    //     });
    
    //     Route::get('/{id}/children', function($id) {
    //         $category = Category::find($id);
    //         if( !$category->children->count() ) {
    //             dump($category->name . ' -> chilren - ' . "NO CHILDREN");
    //         } else {
    //             dump($category->name . ' -> chilren: [');
    //             foreach( $category->children as $child ) {
    //                 dump($child->name);
    //             }
    //             dump(']');
    //         }
    //     });
    
    
    // } );


    // Recursive categories rendering experiment END

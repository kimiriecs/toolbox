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
| All Routes Dump
|--------------------------------------------------------------------------
|
*/


// Route::get('/', function () {

//     return view('layouts.app');
// });

// Route::get('/login', function () {
//     return view('login');
// })->name('login');

// Route::get('/register', function () {
//     return view('register');
// })->name('register');

// Route::get('/home', function () {
//     return view('home');
// })->name('home');


// ============= Admin routes start here ================

// Route::prefix('admin')->group( function() {

//     $categories = Category::all();

//     Route::get('/', function () use ($categories) {

//         return view('layouts.app', compact('categories'));
//     });

//     Route::prefix('categories')->group( function () use ($categories) {
    
//         foreach ($categories as $category) {
    
//             $categoryName = 'category-' . $category->id;
            
//             if ($category->id == 1) {
//                 $categoryName = 'category-nocategory';
//             } else {
//                 $categoryName = 'category-' . $category->id-1;
//             }
    
//             Route::get("/{$categoryName}", function () use ($categories, $category) {

//                 $categoryRealName = $category->name;

//                 $message = Route::currentRouteName();
                
//                 $currentPath= Route::getCurrentRoute()->uri();
    
//                 return view('categories.category', compact('categories','message', 'currentPath', 'categoryRealName'));
    
//             })->name("$categoryName");
    
//         }
//     });
// });


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




// ============= Admin routes end here ================





// Route::prefix('relationships')->group(function () {

//     Route::get('/one-to-one', function () { return view('relationships.OneToOne'); })->name('one-to-one');
//     Route::get('/one-to-many', function () { return view('relationships.OneToMany'); })->name('one-to-many');
//     Route::get('/many-to-many', function () { return view('relationships.ManyToMany'); })->name('many-to-many');

//     Route::get('/has-one-through', function () { return view('relationships.HasOneThrough'); })->name('has-one-through');
//     Route::get('/has-many-through', function () { return view('relationships.HasManyThrough'); })->name('has-many-through');
//     Route::get('/has-one-of-many', function () { return view('relationships.HasOneOfMany'); })->name('has-one-of-many');
    
//     Route::get('/polimorphic-one-to-one', function () { return view('relationships.PolymorphicOneToOne'); })->name('polimorphic-one-to-one');
//     Route::get('/polimorphic-one-to-many', function () { return view('relationships.PolymorphicOneToMany'); })->name('polimorphic-one-to-many');
//     Route::get('/polimorphic-one-of-many', function () { return view('relationships.PolymorphicOneOfMany'); })->name('polimorphic-one-of-many');
//     Route::get('/polimorphic-many-to-many', function () { return view('relationships.PolymorphicManyToMany'); })->name('polimorphic-many-to-many');
// });






// Route::prefix('form-components')->group(function () {

//     Route::get('/buttons', function () { return view('formComponents.Buttons'); })->name('buttons');
//     Route::get('/inputs', function () { return view('formComponents.Inputs'); })->name('inputs');
//     Route::get('/checkBoxes', function () { return view('formComponents.CheckBoxes'); })->name('checkBoxes');
//     Route::get('/radioButtons', function () { return view('formComponents.RadioButtons'); })->name('radioButtons');
// });





// Route::prefix('users')->group(function () {


//     Route::get('/administration', function () { 
//         $users = User::whereHas('roles', function($q) {
//             $q->whereIn('roles.id', [1, 2]);
//         })->get();

//         $columns = DB::getSchemaBuilder()->getColumnListing('users');

//         $columnsToRetrive = ['id', 'name', 'email'];

//         return view('users.ShowUsers', compact('users', 'columns', 'columnsToRetrive')); 

//     })->name('administration');

//     Route::get('/trainers', function () { 
//         $users = User::whereHas('roles', function($q) {
//             $q->whereIn('roles.id', [3]);
//         })->get();

//         $columns = DB::getSchemaBuilder()->getColumnListing('users');

//         $columnsToRetrive = ['id', 'name', 'email'];

//         return view('users.ShowUsers', compact('users', 'columns', 'columnsToRetrive'));
//     })->name('trainers');

//     Route::get('/trainees', function () { 
//         $users = User::whereHas('roles', function($q) {
//             $q->whereIn('roles.id', [4]);
//         })->get();

//         $columns = DB::getSchemaBuilder()->getColumnListing('users');

//         $columnsToRetrive = ['id', 'name', 'email'];

//         return view('users.ShowUsers', compact('users', 'columns', 'columnsToRetrive'));

//     })->name('trainees');

//     Route::get('/folowers', function () { 
//         $users = User::whereHas('roles', function($q) {
//             $q->whereIn('roles.id', [5]);
//         })->get();

//         $columns = DB::getSchemaBuilder()->getColumnListing('users');

//         $columnsToRetrive = ['id', 'name', 'email'];

//         return view('users.ShowUsers', compact('users', 'columns', 'columnsToRetrive'));

//     })->name('folowers');
// });

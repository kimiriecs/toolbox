<?php

use App\Modules\Users\Models\User;
use App\Modules\Categories\Models\Category;
use App\Modules\Product\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Components Routes
|--------------------------------------------------------------------------
|
*/

// Route::prefix('form-components')->group(function () {

//     $categories = Category::all();

//     Route::get('/buttons', function () use ($categories) { 
//         $componentName = 'formComponents.buttons-component';
//         $data = [];
//         return view('layouts.admin-layout', compact('categories', 'componentName', 'data')); 
//     })->name('buttons');

//     Route::get('/inputs', function () use ($categories) { 
//         return view('components.formComponents.Inputs', compact('categories')); 
//     })->name('inputs');

//     Route::get('/checkBoxes', function () use ($categories) { 
//         return view('components.formComponents.CheckBoxes', compact('categories')); 
//     })->name('checkBoxes');

//     Route::get('/radioButtons', function () use ($categories) { 
//         return view('components.formComponents.RadioButtons', compact('categories')); 
//     })->name('radioButtons');
    
//     Route::get('/tables', function () use ($categories) { 

//         $users = User::whereHas('roles', function($q) {
//             $q->whereIn('roles.id', [1, 2]);
//         })->get();

//         $columns = DB::getSchemaBuilder()->getColumnListing('users');

//         $columnsToRetrive = ['id', 'name', 'email'];

//         $componentName = 'tables-component';

//         $data = compact('users', 'columns', 'columnsToRetrive');
    
//         return view('layouts.admin-layout', compact('categories', 'componentName', 'data'));
//     })->name('tables');
// });

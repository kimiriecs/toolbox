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
| Components Routes
|--------------------------------------------------------------------------
|
*/

Route::prefix('form-components')->group(function () {

    $categories = Category::all();

    Route::get('/buttons', function () use ($categories) { return view('components.formComponents.Buttons', compact('categories')); })->name('buttons');
    Route::get('/inputs', function () use ($categories) { return view('components.formComponents.Inputs', compact('categories')); })->name('inputs');
    Route::get('/checkBoxes', function () use ($categories) { return view('components.formComponents.CheckBoxes', compact('categories')); })->name('checkBoxes');
    Route::get('/radioButtons', function () use ($categories) { return view('components.formComponents.RadioButtons', compact('categories')); })->name('radioButtons');
    
    Route::get('/tables', function () use ($categories) { 

        $users = User::whereHas('roles', function($q) {
            $q->whereIn('roles.id', [1, 2]);
        })->get();

        $columns = DB::getSchemaBuilder()->getColumnListing('users');

        $columnsToRetrive = ['id', 'name', 'email'];
    
        return view('components.Tables', compact('users', 'columns', 'columnsToRetrive', 'categories'));
    })->name('tables');
});

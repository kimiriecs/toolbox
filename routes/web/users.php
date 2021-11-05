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
| Users Routes
|--------------------------------------------------------------------------
|
*/


Route::prefix('users')->group(function () {

    $categories = Category::all();

    Route::get('/administration', function () use ($categories) { 
        $users = User::whereHas('roles', function($q) {
            $q->whereIn('roles.id', [1, 2]);
        })->get();

        $columns = DB::getSchemaBuilder()->getColumnListing('users');

        $columnsToRetrive = ['id', 'name', 'email'];

        return view('users.ShowUsers', compact('users', 'columns', 'columnsToRetrive', 'categories')); 

    })->name('administration');

    Route::get('/trainers', function () use ($categories) { 
        $users = User::whereHas('roles', function($q) {
            $q->whereIn('roles.id', [3]);
        })->get();

        $columns = DB::getSchemaBuilder()->getColumnListing('users');

        $columnsToRetrive = ['id', 'name', 'email'];

        return view('users.ShowUsers', compact('users', 'columns', 'columnsToRetrive', 'categories'));
    })->name('trainers');

    Route::get('/trainees', function () use ($categories) { 
        $users = User::whereHas('roles', function($q) {
            $q->whereIn('roles.id', [4]);
        })->get();

        $columns = DB::getSchemaBuilder()->getColumnListing('users');

        $columnsToRetrive = ['id', 'name', 'email'];

        return view('users.ShowUsers', compact('users', 'columns', 'columnsToRetrive', 'categories'));

    })->name('trainees');

    Route::get('/folowers', function () use ($categories) { 
        $users = User::whereHas('roles', function($q) {
            $q->whereIn('roles.id', [5]);
        })->get();

        $columns = DB::getSchemaBuilder()->getColumnListing('users');

        $columnsToRetrive = ['id', 'name', 'email'];

        return view('users.ShowUsers', compact('users', 'columns', 'columnsToRetrive', 'categories'));

    })->name('folowers');
});

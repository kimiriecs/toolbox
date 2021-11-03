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
| Relationships Routes
|--------------------------------------------------------------------------
|
*/

Route::prefix('relationships')->group(function () {

    $categories = Category::all();

    Route::get('/one-to-one', function () use ($categories) { return view('relationships.OneToOne', compact('categories')); })->name('one-to-one');
    Route::get('/one-to-many', function () use ($categories) { return view('relationships.OneToMany', compact('categories')); })->name('one-to-many');
    Route::get('/many-to-many', function () use ($categories) { return view('relationships.ManyToMany', compact('categories')); })->name('many-to-many');

    Route::get('/has-one-through', function () use ($categories) { return view('relationships.HasOneThrough', compact('categories')); })->name('has-one-through');
    Route::get('/has-many-through', function () use ($categories) { return view('relationships.HasManyThrough', compact('categories')); })->name('has-many-through');
    Route::get('/has-one-of-many', function () use ($categories) { return view('relationships.HasOneOfMany', compact('categories')); })->name('has-one-of-many');
    
    Route::get('/polimorphic-one-to-one', function () use ($categories) { return view('relationships.PolymorphicOneToOne', compact('categories')); })->name('polimorphic-one-to-one');
    Route::get('/polimorphic-one-to-many', function () use ($categories) { return view('relationships.PolymorphicOneToMany', compact('categories')); })->name('polimorphic-one-to-many');
    Route::get('/polimorphic-one-of-many', function () use ($categories) { return view('relationships.PolymorphicOneOfMany', compact('categories')); })->name('polimorphic-one-of-many');
    Route::get('/polimorphic-many-to-many', function () use ($categories) { return view('relationships.PolymorphicManyToMany', compact('categories')); })->name('polimorphic-many-to-many');
});

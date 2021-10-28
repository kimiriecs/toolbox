<?php

use App\Models\User;
use App\Modules\Product\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::prefix('relationships')->group(function () {

    Route::get('/one-to-one', function () { return view('relationships.OneToOne'); })->name('one-to-one');
    Route::get('/one-to-many', function () { return view('relationships.OneToMany'); })->name('one-to-many');
    Route::get('/many-to-many', function () { return view('relationships.ManyToMany'); })->name('many-to-many');

    Route::get('/has-one-through', function () { return view('relationships.HasOneThrough'); })->name('has-one-through');
    Route::get('/has-many-through', function () { return view('relationships.HasManyThrough'); })->name('has-many-through');
    Route::get('/has-one-of-many', function () { return view('relationships.HasOneOfMany'); })->name('has-one-of-many');
    
    Route::get('/polimorphic-one-to-one', function () { return view('relationships.PolymorphicOneToOne'); })->name('polimorphic-one-to-one');
    Route::get('/polimorphic-one-to-many', function () { return view('relationships.PolymorphicOneToMany'); })->name('polimorphic-one-to-many');
    Route::get('/polimorphic-one-of-many', function () { return view('relationships.PolymorphicOneOfMany'); })->name('polimorphic-one-of-many');
    Route::get('/polimorphic-many-to-many', function () { return view('relationships.PolymorphicManyToMany'); })->name('polimorphic-many-to-many');
});


Route::prefix('form-components')->group(function () {

    Route::get('/buttons', function () { return view('formComponents.Buttons'); })->name('buttons');
    Route::get('/inputs', function () { return view('formComponents.Inputs'); })->name('inputs');
    Route::get('/checkBoxes', function () { return view('formComponents.CheckBoxes'); })->name('checkBoxes');
    Route::get('/radioButtons', function () { return view('formComponents.RadioButtons'); })->name('radioButtons');
});


Route::prefix('users')->group(function () {

    Route::get('/administration', function () { 
        $administrators = User::whereHas('roles', function($q) {
            $q->whereIn('roles.id', [1, 2]);
        })->get();
        return view('users.Administration', compact('administrators')); 
    })->name('administration');

    Route::get('/trainers', function () { 
        $trainers = User::whereHas('roles', function($q) {
            $q->whereIn('roles.id', [3]);
        })->get();
        return view('users.Trainers', compact('trainers')); 
    })->name('trainers');

    Route::get('/trainees', function () { 
        $trainees = User::whereHas('roles', function($q) {
            $q->whereIn('roles.id', [4]);
        })->get();
        return view('users.Trainees', compact('trainees')); 
    })->name('trainees');

    Route::get('/folowers', function () { 
        $folowers = User::whereHas('roles', function($q) {
            $q->whereIn('roles.id', [5]);
        })->get();
        return view('users.Folowers', compact('folowers')); 
    })->name('folowers');
});

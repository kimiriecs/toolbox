<?php

use Modules\Users\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Modules\Users\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
*/


// ============= User routes start here ================


Route::prefix('users')
  ->name('users.')
  ->group(function () {

    Route::get('/{subCategory?}', [UserController::class, 'subCategoryIndex'])->name('subCategory.index');
    
});


Route::resource('users', UserController::class);
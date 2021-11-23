<?php

use Illuminate\Support\Facades\Route;
use Modules\Users\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
*/


// ============= User routes start here ================


Route::prefix('users')
  ->as('admin.users.')
  ->group(function () {

    Route::get('/{subCategory}', [UserController::class, 'subCategoryIndex'])->name('subcategory.index');
    
});


Route::resource('users', UserController::class, ['as' => 'admin']);
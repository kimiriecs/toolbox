<?php

use Illuminate\Support\Facades\Route;
use Modules\Dashboard\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
*/


// ============= Dashboard routes start here ================

Route::prefix('dashboard')
  ->name('admin.dashboard.')
  ->group(function () {

    Route::get('/{subCategory?}', [DashboardController::class, 'subCategoryIndex'])->name('subcategory.index');
    
});
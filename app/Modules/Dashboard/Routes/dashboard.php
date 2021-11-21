<?php

use App\Models\Dashboard;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Modules\Dashboard\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
*/


// ============= Dashboard routes start here ================

Route::prefix('dashboard')
  ->name('dashboard.')
  ->group(function () {

    Route::get('/{subCategory?}', [DashboardController::class, 'subCategoryIndex'])->name('subCategory.index');
    
});
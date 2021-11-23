<?php

use Illuminate\Support\Facades\Route;
use Modules\UIComponents\Http\Controllers\UIComponentController;

/*
|--------------------------------------------------------------------------
| UIComponents Routes
|--------------------------------------------------------------------------
|
*/


// ============= UIComponents routes start here ================

Route::prefix('ui-components')
  ->as('admin.ui-components.')
  ->group(function () {

    Route::get('/{subCategory}', [UIComponentController::class, 'subCategoryIndex'])->name('subcategory.index');
    
});

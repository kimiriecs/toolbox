<?php

use Illuminate\Support\Facades\Route;
use Modules\Relationships\Http\Controllers\RelationshipController;

/*
|--------------------------------------------------------------------------
| Relationship Routes
|--------------------------------------------------------------------------
|
*/


// ============= Relationship routes start here ================

Route::prefix('relationships')
  ->name('admin.relationships.')
  ->group(function () {

    Route::get('/{subCategory}', [RelationshipController::class, 'subCategoryIndex'])->name('subcategory.index');
    
});
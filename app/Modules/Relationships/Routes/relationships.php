<?php

use App\Models\Relationship;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Modules\Relationships\Http\Controllers\RelationshipController;

/*
|--------------------------------------------------------------------------
| Relationship Routes
|--------------------------------------------------------------------------
|
*/


// ============= Relationship routes start here ================

Route::prefix('relationships')
  ->name('relationships.')
  ->group(function () {

    Route::get('/{subCategory?}', [RelationshipController::class, 'subCategoryIndex'])->name('subCategory.index');
    
});
<?php

use Modules\Users\Models\User;
use Modules\Categories\Models\Category;
use App\Modules\Product\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Modules\UIComponents\Http\Controllers\UIComponentController;

/*
|--------------------------------------------------------------------------
| Components Routes
|--------------------------------------------------------------------------
|
*/

Route::prefix('ui-components')
  ->as('ui-components.')
  ->group(function () {

    Route::get('/{subCategory?}', [UIComponentController::class, 'subCategoryIndex'])->name('subCategory.index');
    
});

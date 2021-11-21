<?php

use Modules\Users\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Modules\KanbanBoard\Http\Controllers\KanbanBoardController;

/*
|--------------------------------------------------------------------------
| Kanban Board Routes
|--------------------------------------------------------------------------
|
*/


// ============= Kanban Board routes start here ================

Route::prefix('kanban-board')
  ->name('kanban-board.')
  ->group(function () {

    Route::get('/{subCategory?}', [KanbanBoardController::class, 'subCategoryIndex'])->name('subCategory.index');
    
});
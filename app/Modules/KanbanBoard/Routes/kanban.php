<?php

use Illuminate\Support\Facades\Route;
use Modules\KanbanBoard\Http\Controllers\KanbanBoardController;

/*
|--------------------------------------------------------------------------
| Kanban Board Routes
|--------------------------------------------------------------------------
|
*/


// ============= Kanban Board routes start here ================

Route::prefix('kanban-board')
  ->as('admin.kanban-board.')
  ->group(function () {

    Route::get('/{subCategory}', [KanbanBoardController::class, 'subCategoryIndex'])->name('subcategory.index');

});
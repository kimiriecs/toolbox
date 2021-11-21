<?php

namespace Modules\KanbanBoard\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Categories\Models\Category;
use Modules\Users\Models\User;

class KanbanBoardController extends Controller
{

  public function subCategoryIndex(Category $subCategory = null)
  {
        
        $categories = Category::all();

        $category = Category::where('slug', 'kanban-board')->get();
        
        $data = compact('category');


        if ($subCategory !== null) {

            $componentName = 'kanban-board::' . $subCategory->slug . '-component';
            
            return view('layouts.admin-layout', compact('categories', 'componentName', 'data'));

        } else {

            $componentName = 'categories::dummy-category-component';

            return view('layouts.admin-layout', compact('categories', 'componentName', 'data'));

        }
  }

}
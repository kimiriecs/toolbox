<?php

namespace Modules\UIComponents\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Categories\Models\Category;
use Modules\Users\Models\User;

class UIComponentController extends Controller
{

  public function subCategoryIndex(Category $subCategory = null)
  {
        
        $categories = Category::all();

        $users = User::whereHas('roles', function($q) {
          $q->whereIn('roles.id', [1, 2]);
        })->get();
        
        $columns = DB::getSchemaBuilder()->getColumnListing('users');
        
        $columnsToRetrive = ['id', 'name', 'email'];

        $category = Category::where('slug', 'ui-components')->get();
        
        $data = compact('category', 'users', 'columns', 'columnsToRetrive');


        if ($subCategory !== null) {

            $componentName = 'ui-components::' . $subCategory->slug . '-component';
            
            return view('layouts.admin-layout', compact('categories', 'componentName', 'data'));

        } else {

            $componentName = 'categories::dummy-category-component';

            return view('layouts.admin-layout', compact('categories', 'componentName', 'data'));

        }
  }

}
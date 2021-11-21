<?php

namespace Modules\Relationships\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Categories\Models\Category;
use Modules\Users\Models\User;

class RelationshipController extends Controller
{

  public function subCategoryIndex(Category $subCategory = null)
  {
        
        $categories = Category::all();

        $category = Category::where('slug', 'relationships')->get();
        
        $data = compact('category');


        if ($subCategory !== null) {

            $componentName = 'relationships::' . $subCategory->slug . '-component';
            
            return view('layouts.admin-layout', compact('categories', 'componentName', 'data'));

        } else {

            $componentName = 'categories::dummy-category-component';

            return view('layouts.admin-layout', compact('categories', 'componentName', 'data'));

        }
  }

}
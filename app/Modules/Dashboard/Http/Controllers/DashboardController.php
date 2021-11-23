<?php

namespace Modules\Dashboard\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Categories\Models\Category;
use Modules\Users\Models\User;

class DashboardController extends Controller
{

  public function subCategoryIndex(Category $subCategory = null)
  {
        
        $categories = Category::all();

        $category = Category::where('slug', 'dashboard')->get();
        
        $data = compact('category');


        if ($subCategory !== null) {

            $componentName = 'dashboard::' . $subCategory->slug . '-component';
            
            return view('layouts.admin-layout', compact('categories', 'componentName', 'data'));

        } else {

            $componentName = 'dashboard::main-component';

            return view('layouts.admin-layout', compact('categories', 'componentName', 'data'));

        }
  }

}
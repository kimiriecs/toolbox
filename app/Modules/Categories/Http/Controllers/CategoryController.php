<?php

namespace Modules\Categories\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Categories\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('parent')->get();

        $componentName = 'categories::all-categories-component';

        $data = compact('categories');

        return view('layouts.admin-layout', compact('categories', 'componentName', 'data'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::with('parent')->get();

        $componentName = 'categories::create-category-component';

        $data = compact('categories');

        return view('layouts.admin-layout', compact('categories', 'componentName', 'data'));
    }

    /**
     * Create Root Category and Show the form for creating a new 'Start' resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function rootCategoryCreate()
    {

        $rootCategory = Category::create([
            'id' => 1,
            'name' => 'Root Category',
            'slug' => Str::slug('Root Category'),
            'parent_id' => null,
        ]);
        
        return redirect()->route('category.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSubCategory(Category $category)
    {
        
        $categories = Category::with('parent')->get();

        $componentName = 'categories::create-category-component';
        $data = compact('categories', 'category');

        return view('layouts.admin-layout', compact('categories', 'componentName', 'data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $categoryData = $request->validate([
        //     'name' => 'required|min:5|string',
        //     'slug' => 'required|min:5|string',
        //     'parent_id' => 'integer',
        // ]);

        // $category = Category::create($categoryData);
        
        $category = Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'parent_id' => $request->parent,
        ]);

        return redirect()->route('all-categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Modules\Categories\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function showRedirect(Category $category, Category $subCategory = null)
    {
    /* $categories = $category::all();

        $view = $category === null 
                    ? 'ERROR'
                    : ($category->parent_id === null || ($category->parent_id === 1 && $subCategory === null) 
                        ? 'category::category' 
                        : ($subCategory === null || !view()->exists($category->slug . '::' . $subCategory->slug . '.index')
                            ? 'category::category'
                            : $category->slug . '::' . $subCategory->slug . '.index'
                        ));        
        
        $users = User::whereHas('roles', function($q) {
            $q->whereIn('roles.id', [1, 2]);
        })->get();
        
        $columns = DB::getSchemaBuilder()->getColumnListing('users');
        
        $columnsToRetrive = ['id', 'name', 'email'];
        
        $data = compact('users', 'columns', 'columnsToRetrive');
        

        if ($subCategory !== null) {

            $componentName = $category->slug . '::' . $subCategory->slug . '-component';
            
            return view('layouts.admin-layout', compact('categories', 'componentName', 'data'));

        } else {

            return view($view, compact('categories', 'category'));

        }



        if ($subCategory !== null) {

            return redirect()->route($category->slug . 'show', ['category' => $category, 'subCategory' => $subCategory]);

        } else {

            return redirect()->route($category->slug . 'show');

        }
    */

        if ($subCategory !== null) {

            return redirect()->route($category->slug . '.' . 'subCategory.index', ['subCategory' => $subCategory->slug]);

        } else {

            return redirect()->route($category->slug . '.' . 'index');

        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Modules\Categories\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Modules\Categories\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Modules\Categories\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}

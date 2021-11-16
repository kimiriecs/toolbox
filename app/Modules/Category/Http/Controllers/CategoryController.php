<?php

namespace App\Modules\Category\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Category\Models\Category;
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
        $categories = Category::all();

        return view('category::categories', compact('categories'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::with('parent')->get();

        return view('category::create-category', compact('categories'));
    }

    /**
     * Create Root Category and Show the form for creating a new 'Start' resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function rootCategoryCreate()
    {
        // $rootCategory = new Category();

        $rootCategory = Category::create([
            'id' => 1,
            'name' => 'Root Category',
            'slug' => Str::slug('Root Category'),
            'parent_id' => null,
        ]);

        // $categories = Category::with('parent')->get();
        // return view('categories.create-category', compact('categories'));
        
        return redirect(route('category-create'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSubCategory(Category $category)
    {
        
        $categories = $category::with('parent')->get();


        return view('category::create-category', compact('categories', 'category'));
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

        return redirect(route('all-categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\Category\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, Category $subCategory = null)
    {
        $categories = $category::all();

        $view = $category === null 
                    ? 'ERROR'
                    : ($category->parent_id === null || ($category->parent_id === 1 && $subCategory === null) 
                        ? 'category::category' 
                        : ($subCategory === null || !view()->exists($category->slug . '::' . $subCategory->slug . '.index')
                            ? 'category::category'
                            : $category->slug . '::' . $subCategory->slug . '.index'
                        ));

        return view($view, compact('categories', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\Category\Models\Category  $category
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
     * @param  \App\Modules\Category\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modules\Category\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}

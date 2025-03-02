<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCategoryRequest;
use App\Models\Category;

class AdminCategoryController extends Controller
{
    public function save(AddCategoryRequest $request)
    {
        Category::create($request->all());

        return redirect()->back();
    }

    public function allCategories()
    {
        $categories = Category::all();

        return view('admin.categories.all', compact('categories'));
    }
}

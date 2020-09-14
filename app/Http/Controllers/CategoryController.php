<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;

class CategoryController extends Controller
{
    final public function index(): View
    {
        $categories = Category::whereNull('category_id')->with('childrenCategories')->get();
        return view('category', compact('categories'));
    }
}

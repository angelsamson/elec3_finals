<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;    

class CategoryController extends Controller
{

    public function create()
    {
        return view('form.create');
    }

    public function show()
    {
        $categories = Category::all();
        return view('pages.categories', ['categories' => $categories]);
    }
    
    public function submit(Request $request)
    {
        $category = new Category;
        $category->name = $request->cat_name;
        $category->description = $request->cat_desc;
        $category->save();

        return redirect('/categories')->with('status', 'Hooray! You have successfully added a new category.');
    }
}

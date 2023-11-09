<?php

namespace App\Http\Controllers;

use App\Models\Category;  
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /*
    public function index(){
        $categories = Category::latest()->paginate('5');
        return view ('admin.category.category',compact('categories'));
    }*/

    public function create()
    {
        $validatedData = $request->validate([
            'name'=> 'required|unique:categories|min:2|max:255',
            'description'=> 'required|unique:categories|min:2|max:255',
        ]);

        return view('form.create');
    }

    public function show()
    {
        $categories = Category::latest()->paginate('5');
        return view('pages.categories', ['categories' => $categories]);
    }
    
    public function submit(Request $request)
    {
        Category::create([
            'name' => $request->cat_name,
            'description' => $request->cat_desc,
            'created_at' => Carbon::now()
        ]);

        return redirect('/categories')->with('status', 'Hooray! You have successfully added a new category.');
    }

    public function edit(Request $request, $id)
    {   
        $category = Category::find($id);
        $category->name = $request->cat_name;
        $category->description = $request->cat_desc;
        $category->update();
        
        return redirect('/categories')->with('status', 'Yes mamser, You have successfully updated your data.');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories')->with('status','Student Deleted Successfully.');
    }




    /*public function Edit($id){
        $catergories = Category::find($id)->update([
            'category_name'=> $request->category_name,
            "id" => Auth::user()->id
        ]);
    }*/

}

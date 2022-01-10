<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categorylist()
    {
        $categories=Category::all();
        //dd($categories);
        return view('admin.pages.plant.category-list',compact('categories'));
    }
    public function createcategory()
    {
        return view('admin.pages.plant.create-category');
    }
   public function store(Request $request)
   {
       //dd($request->all());
       Category::create([
           'C_name'=>$request->C_name,
           'C_deacription'=>$request->C_description,
       ]);
       return redirect()->route('admin.plantcategories');
   }
}

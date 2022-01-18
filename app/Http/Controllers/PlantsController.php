<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Plant;
use Illuminate\Http\Request;

class PlantsController extends Controller
{
    public function PlantList()
    {
        $plants=Plant::with('category')->get();
        //dd($plants);
        return view('admin.pages.plant.plant-list',compact('plants'));
    }
    public function createPlants()
    {
        $categories=Category::all();
        //dd($categories);
        return view('admin.pages.plant.create-plant',compact('categories'));
    }
    public function store(Request $request)
    {
        //dd($request->all());
        //dd(date('Ymdhms'));
        if($request->hasFile('image'))

        {
            $file = $request->file('image');
            $filename = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
            $file -> storeAs ('/uploads', $filename);
        }
//dd('ok');

        $request->validate([
          'name'=>'required',
          'price'=>'required|numeric',
          'quantity'=>'required|numeric',
          'discription'=>'required',
        ]);
       // dd($request->all());
        Plant::create([
         'name'=>$request->name,
         'price'=>$request->price,
         'quantity'=>$request->quantity,
         'discription'=>$request->discription,
         'category_id'=>$request->category,
         'image'=> $filename

        ]);
        return redirect()->route('admin.plants');
    }
    
    public function plant_view($id)
    {
      $plants=Plant::find($id);
      return view('admin.pages.plant.plant-view',compact('plants'));
    }
    public function plant_delete($id)
    {
     Plant::find($id)->delete();
      return redirect()->back();
    }
    public function plant_edit($id)
    {
      // dd($id);
      
       $plant=Plant::find($id);
       $categories=Category::all();
      
      if($plant)
      {
       return view('admin.pages.plant.plant-edit',compact('plant','categories'));
      }
    }
    public function plant_update(Request $request,$id)
    {
      
      $plant=Plant::find($id);
      $plantimage=$plant->image;
      if ($request->hasFile('image'))
           {
            // step 2: generate file name
            $plantimage = date('Ymdhms').'.'.$request->file('image')->getClientOriginalExtension();
            //step 3 : store into project directory
            $request->file('image')->storeAs('/uploads',$plantimage);

              
           }
      if($plant)
      {
        $plant->update([
          'name'=>$request->name,
          'price'=>$request->price,
          'quantity'=>$request->quantity,
          'discription'=>$request->discription,
          'category_id'=>$request->category,
          'image'=>$plantimage
        ]);
        return redirect()->back()->with('msg', 'Plant Updated Successfully.');
      }
    }

    public function planttSearch()
  {
    $key= request()->search;
    $plants=Plant::where('name','LIKE',"%{$key}%")->get();
    return view('admin.pages.plant.plant-search',compact('plants'));
  }
   
}

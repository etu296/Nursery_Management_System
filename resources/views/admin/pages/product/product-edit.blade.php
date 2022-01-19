@extends('admin.master')
@section('content')
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<form action="{{route('admin.product.update',$product->id)}}" method="post" enctype="multipart/form-data">
@method('put')
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <input value="{{$product->product_name}}" required name="product_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Price</label>
    <input value="{{$product->product_price}}" required name="product_price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Details</label>
    <input value="{{$product->products_details}}" required name="products_details" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Cetagory</label>
    <select name="product_cetagory" class="form-control" id="exampleFormControlSelect1">
    @foreach ($pcetagories as $pcetagory)
            <option value="{{$pcetagory->id}}">{{$pcetagory->pcname}}</option>
            @endforeach
            </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Plant Category</label>
    <select name="plant_cetagory" class="form-control" id="exampleFormControlSelect1">
                @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->C_name}}</option>
            @endforeach
            </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Product Image</label>
    <input  name="product_image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <img src="{{url('/uploads/'.$product->product_image)}}" width="60px" alt="product image">

  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
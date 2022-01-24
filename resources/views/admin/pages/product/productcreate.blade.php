@extends('admin.master')
@section('content')
<form action="{{route('productstore')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <input required name="product_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Price</label>
    <input required name="product_price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Details</label>
    <input required name="products_details" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product quantity</label>
    <input required name="quantity" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Cetagory</label>
    <select name="product_cetagory" class="form-control" id="exampleFormControlSelect1">
    @foreach ($pcetagories as $pcetagory)
            <option value="{{$pcetagory->id}}">{{$pcetagory->id}}</option>
            @endforeach
            </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Plant Category</label>
    <select name="plant_cetagory" class="form-control" id="exampleFormControlSelect1">
                @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->id}}</option>
            @endforeach
            </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Product Image</label>
    <input  name="product_image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
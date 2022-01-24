@extends('admin.master')

@section('content')
<h4>PRODUCTS</h4>
<div class="form-inline" >
        <div class="input-group" >
          <form action="{{route('product.search')}}" method="GET">
          <input name="search" class="form-control form-control-sidebar" type="text" placeholder="search">
          <i class="fas fa-search fa-fw"></i>
          </form>
        </div>
      </div>
<p style="text-align:right;">
<a href="{{route('productcreate')}}" class="btn btn-danger"><i class="fas fa-plus"></i> Add Product</a>
</p>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Details</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Product Cetagory</th>
      <th scope="col">Plant Category</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    
  @foreach ($products as $key=>$product)
    <tr >
    <th >{{$key+1}}</th>
      <th>{{$product->product_name}}</th>
      <th>
        <img src="{{url('/uploads/'.$product->product_image)}}" width="60px" alt="product image">
      </th>
      <th>{{$product->product_price}}</th>
      <th>{{$product->products_details}}</th>
      <th>{{$product->quantity}}</th>
      <th>{{optional($product->pcategory)->pcname}}</th>
      <th>{{optional($product->category)->C_name}}</th>
      <th>
        <a href="{{route('admin.product.view',$product->id)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
        <a href="{{route('admin.product.edit',$product->id)}}" class="btn btn-warning" ><i class="fas fa-edit"></i></a>
        <a href="{{route('admin.product.delete',$product->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
      </th>
      <th>

      </th>
      

    </tr>
    @endforeach
   
  </tbody>
</table>

@endsection
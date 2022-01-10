@extends('admin.master')
@section('content')
<h1>Product details</h1>
<p>
<img src="{{url('/uploads/'.$products->product_image)}}" width="200px" alt="product image">
</p>
<p><b>Product Name:</b> {{$products->product_name}}</p>
<p><b>Product Price: </b>{{$products->product_price}}</p>
<p><b>Product Details:</b> {{$products->products_details}}</p>
<p><b>Product Cetagory:</b> {{optional($products->pcategory)->pcname}}</p>
<p><b>Plant Cetagory:</b> {{optional($products->category)->C_name}}</p>
<p>
<a href="{{route('productlist')}}" class="btn btn-danger">Back</a>
</p>
@endsection
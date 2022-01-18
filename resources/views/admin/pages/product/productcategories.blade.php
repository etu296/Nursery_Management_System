@extends('admin.master')

@section('content')
<h1>Product Category</h1>
<p style="text-align: left;">
<a href="{{route('productcreatecategory')}}" class="btn btn-danger"><i class="fas fa-plus"></i> Add Product Category </a>
</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col"> Product Category Name</th>
      <th scope="col">Category Description</th> 
    </tr>
  </thead>
  <tbody>
  
  @foreach ($pcetagories as $pcetagory)
    <tr >
      <th>{{$pcetagory->id}}</th>
      <th>{{$pcetagory->pcname}}</th>
      <th>{{$pcetagory->pc_description}}</th>

    </tr>
    @endforeach
 
  </tbody>
</table>
@endsection
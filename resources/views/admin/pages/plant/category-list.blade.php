@extends('admin.master')

@section('content')
<h1>Category</h1>
<p style="text-align: left;">
<a href="/admin/categories/createcategory" class="btn btn-danger"><i class="fas fa-plus"></i> Add plant Category</a>
</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">Category Name</th>
      <th scope="col">Category Description</th> 
    </tr>
  </thead>
  <tbody>
   @foreach ($categories as $key=>$category)
    <tr >
      <th >{{$key+1}}</th>
      <td>{{$category->C_name}}</td>
      <td>{{$category->C_deacription}}</td> 
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

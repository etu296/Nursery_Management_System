@extends('admin.master')

@section('content')
<h4>PLANTS</h4>
<div class="form-inline" >
        <div class="input-group" >
          <form action="{{route('plant.search')}}" method="GET">
          <input name="search" class="form-control form-control-sidebar" type="text" placeholder="search">
          <i class="fas fa-search fa-fw"></i>
          </form>
        </div>
      </div>
<p style="text-align:right;">
<a href="/admin/plants/createplants" class="btn btn-success"><i class="fas fa-plus"></i> Add Plant</a>
</p>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Plant Name</th>
      <th scope="col">Plant Image</th>
      <th scope="col">Plant Price</th>
      <th scope="col">Plant Quantity</th>
      <th scope="col">Plant Discription</th>
      <th scope="col">Plant Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($plants as $key=>$plant)
    <tr >
    <th >{{$key+1}}</th>
      <th>{{$plant->name}}</th>
      <th>
        <img src="{{url('/uploads/'.$plant->image)}}" width="100px" alt="plant image">
      </th>
      <th>{{$plant->price}}</th>
      <th>{{$plant->quantity}}</th>
      <th>{{$plant->discription}}</th>
      <th>{{$plant->category->C_name}}</th>
      <th>
        <a href="{{route('plant_view',$plant->id)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
        <a href="{{route('admin.plant.edit',$plant->id)}}" class="btn btn-warning" ><i class="fas fa-edit"></i></a>         
        <a href="{{route('plant_delete',$plant->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
      </th>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
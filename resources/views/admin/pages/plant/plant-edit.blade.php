@extends('admin.master')
@section('content')
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<form action="{{route('admin.plant.update',$plant->id)}}" method="post" enctype="multipart/form-data">
@method('put')
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Plant Name</label>
    <input required value="{{$plant->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Plant Price</label>
    <input required value="{{$plant->price}}" name="price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Plant Quqntity</label>
    <input required value="{{$plant->quantity}}" name="quantity" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Plant Discription</label>
    <input name="discription" value="{{$plant->discription}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Plant Category</label>
    <select name="category" class="form-control" id="exampleFormControlSelect1">
                @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->id}}</option>
            @endforeach
            </select>
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image</label>
    <input  name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div> -->
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
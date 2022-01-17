@extends('admin.master')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('admin.plants.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Plant Name</label>
    <input required name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Plant Price</label>
    <input required name="price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Plant Quqntity</label>
    <input required name="quantity" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Plant Discription</label>
    <input name="discription" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Plant Category</label>
    <select name="category" class="form-control" id="exampleFormControlSelect1">
                @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->C_name}}</option>
            @endforeach
            </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image</label>
    <input  name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
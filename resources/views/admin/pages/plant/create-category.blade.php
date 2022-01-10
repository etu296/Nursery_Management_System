@extends('admin.master')

@section('content')
<form action="{{route('Categorystore')}}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category Name</label>
    <select class="form-control" name="C_name">
            <option value=""></option>
            <option value="none">None</option>
            <option value="Common House Plants">Common House Plants</option>
            <option value="Flowering Plants">Flowering Plants</option>          
            <option value="Cactus Plants">Cactus Plants</option>            
            <option value="Office Types">Office Types</option>
            <option value="Easy & Low Light">Easy & Low Light</option>
          
        </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category Description</label>
    <input name="C_description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
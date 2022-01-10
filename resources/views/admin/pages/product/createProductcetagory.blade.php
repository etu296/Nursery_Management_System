@extends('admin.master')

@section('content')
<form action="{{route('produccetagorytstore')}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Category Name</label>
    <select class="form-control" name="pcname">
            <option value=""></option>
            <option value="Plants">Plants</option>
            <option value="Tools">Tools</option>          
            <option value="Fartilizer">Fartilizer</option>            
           
          
        </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category Description</label>
    <input name="pc_description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
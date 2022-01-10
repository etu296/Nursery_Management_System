@extends('admin.master')
@section('content')
<form action="{{route('orderstore')}}" method="POST">
 @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Order Date</label>
    <input name="date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Total Price</label>
    <input name="price" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Order Status</label>
    <select class="form-control" name="status">
            <option value=""></option>
            <option value="Pending">Pending</option>
            <option value="Confirm">Confirm</option>
           
          
        </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Delivery Date & Time</label>
    <input name="datetime" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  @endsection
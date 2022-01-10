@extends('admin.master')

@section('content')
<form action="{{route('deliverystore')}}" method="post" >
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Customer Name</label>
    <input required name="customer_name" type="test" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Total Price</label>
    <input required name="total_price" type="numer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Delivery Date</label>
    <input required name="delivery_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
@extends('admin.master')

@section('content')
<form action="{{route('paymentstore')}}" method="POST">
@csrf
 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User </label>
    <select name="user" class="form-control" id="exampleFormControlSelect1">
          @foreach($users as $user)
            <option value="{{$user->name}}">{{$user->name}}</option>
            @endforeach
    </select>
  </div> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Total Amount</label>
    <input name="amount" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Payment Date</label>
    <input name="date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" for="payment">Payment Type</label>
    <select class="form-control" name="type">
            <option value=""></option>
            <option value="Cash on Delivery">Cash On Delivery</option>
        </select>  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Payment Status</label>
    <select class="form-control" name="p_status">
            <option value=""></option>
            <option value="Paid">Paid</option>
            <option value="Unpaid">Unpaid</option>
        </select> 
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection
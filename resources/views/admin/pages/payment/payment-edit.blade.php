@extends('admin.master')

@section('content')
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif

<form action="{{route('admin.payment.update',$payment->id)}}" method="post" enctype="multipart/form-data">
@method('put')
  @csrf
 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User </label>
    <select name="user" value="{{$payment->user}}" class="form-control" id="exampleFormControlSelect1">
          @foreach($users as $user)
            <option value="{{$user->name}}">{{$user->name}}</option>
            @endforeach
    </select>
  </div> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Total Amount</label>
    <input value="{{$payment->amount}}" name="amount" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Payment Date</label>
    <input value="{{$payment->date}}" name="date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" for="payment">Payment Type</label>
    <select value="{{$payment->type}}" class="form-control" name="type">
            <option value=""></option>
            <option value="Cash on Delivery">Cash On Delivery</option>
        </select>  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Payment Status</label>
    <select value="{{$payment->p_status}}" class="form-control" name="p_status">
            <option value=""></option>
            <option value="Paid">Paid</option>
            <option value="Unpaid">Unpaid</option>
        </select> 
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection
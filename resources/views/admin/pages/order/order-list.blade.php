@extends('admin.master')

@section('content')
<h2>ORDERS</h2>
<p style="text-align: left;">
<a href="/admin/orders/createorder" class="btn btn-warning">Create Order List</a> 
</p>
<table class="table ">
  <thead>
    <tr>
      <th scope="col">Order id</th>
      <th scope="col">Order Date</th>
      <th scope="col">Total Price</th>
      <th scope="col">Order Date & Time</th>
      <th scope="col">Order Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($orders as $key=>$order)
    <tr >
    <th >{{$key+1}}</th>
      <th>{{$order->date}}</th>
      <th>{{$order->price}}</th>     
      <th>{{$order->datetime}}</th>
      <th>{{$order->status}}</th>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
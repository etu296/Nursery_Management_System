@extends('admin.master')

@section('content')
<h2>ORDER Details</h2>

<table class="table ">
  <thead>
    <tr>
    <th scope="col">Order Details Id</th>
    <th scope="col">Order Id</th>
    <th scope="col">Product Id</th>
    <th scope="col">Unit Prize</th>
    <th scope="col">Quantity</th>
    <th scope="col">SubTotal</th>
    </tr>
  </thead>
  <tbody>
 
        <td>{{$order->id}}</td>
        <td>{{$order->order->id}}</td>
        <td>{{$order->product->id}} </td>
        <td>{{$order->product->product_price}} </td>
        <td>{{$order->quantity}} </td>
        <td>{{$order->sub_total}} </td>
 
        
    </tr>
   
  </tbody>
</table>

@endsection
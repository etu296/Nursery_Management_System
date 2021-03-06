@extends('admin.master')

@section('content')
<h2>ORDER Details</h2>

<table class="table ">
  <thead>
    <tr>
    <th scope="col">Order Details Id</th>
    <th scope="col">Order Id</th>
    <th scope="col">Product Name</th>
    <th scope="col">Unit Prize</th>
    <th scope="col">Quantity</th>
    <th scope="col">SubTotal</th>
    </tr>
  </thead>
  <tbody>
@foreach($orders as $key=>$orderdetail)
        <td>{{$key+1}}</td>
        <td>{{$orderdetail->order_id}}</td>
        <td>{{$orderdetail->product->product_name}} </td>
        <td>{{$orderdetail->product->product_price}} </td>
        <td>{{$orderdetail->quantity}} </td>
        <td>{{$orderdetail->sub_total}} </td>   
    </tr>
    @endforeach 
  </tbody>
</table>

@endsection
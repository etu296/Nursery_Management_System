@extends('admin.master')

@section('content')
<h2>DELIVERY</h2>
<p style="text-align: left;">
<a href="/admin/delivery/create" class="btn btn-info">Create Delivery Details</a>
</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
     <th scope="col">SL</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Total Price</th>
      <th scope="col">Delivery Date</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($deliveries as $key=>$delivery)
    <tr >
      <th >{{$key+1}}</th>
      <td>{{$delivery->Customer_name}}</td>
      <td>{{$delivery->Total_price}}</td>
      <td>{{$delivery->Delivery_date}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
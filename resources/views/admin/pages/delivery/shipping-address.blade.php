@extends('admin.master')

@section('content')
<h2>Shipping Details</h2>

<table class="table table-success table-striped ">
  <thead>
    <tr>
     <th scope="col">SL</th>
      <th scope="col"> Name</th>
      <th scope="col">City</th>
      <th scope="col">Area</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($shippingdetails as $key=>$shippingdetail)
    <tr >
      <th >{{$key+1}}</th>
      <td>{{$shippingdetail->name}}</td>
      <td>{{$shippingdetail->city}}</td>
      <td>{{$shippingdetail->area}}</td>
      <td>{{$shippingdetail->address}}</td>
      <td>{{$shippingdetail->mobile}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
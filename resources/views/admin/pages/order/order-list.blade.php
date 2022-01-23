@extends('admin.master')

@section('content')
<h2>ORDERS</h2>

<table class="table ">
  <thead>
    <tr>
      
    <th scope="col">Order Id</th>
    <th scope="col">User Name</th>
    <th scope="col">Total Price</th>
    <th scope="col">Status</th>
    <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($orders as $key=>$order)
      <tr >
      <th scope="row">{{$key+1}}</th>
        <td>{{$order->user->name}}</td>
        <td>{{$order->total_price}} .BDT</td>
        <td>
          {{$order->status}}
        </td>
        <td>
            @if($order->status!='cancel')
            <a href="{{route('admin.order.cancel',$order->id)}}" class="btn btn-danger">Cancel</a>
            @endif
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
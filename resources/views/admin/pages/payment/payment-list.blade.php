@extends('admin.master')

@section('content')
<h2>PAYMENT</h2>
<p style="text-align: left;">
<a href="/admin/payments/create" class="btn btn-info">Create Payment</a>
</p>
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Payment id</th>
      <th scope="col">User</th>
      <th scope="col">Amount</th>
      <th scope="col">Payment date</th>
      <th scope="col">Payment type</th>
      <th scope="col">Payment Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($payments as $key=>$payment)
    <tr >
    <th >{{$key+1}}</th>
      <th >{{$payment->user}}</th>
      <th >{{$payment->amount}}</th>
      <th >{{$payment->date}}</th>
      <th >{{$payment->type}}</th>
      <th>{{$payment->p_status}}</th>
      <th>
        <a href="{{route('payment.view',$payment->id)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
        <a href="{{route('admin.payment.edit',$payment->id)}}" class="btn btn-warning" ><i class="fas fa-edit"></i></a>         
        <a href="{{route('payment.delete',$payment->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
      </th>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
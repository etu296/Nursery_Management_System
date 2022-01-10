@extends('admin.master')
@section('content')
<h1>Payment details</h1>

<p>User Name:      {{$payment->user}}</p>
<p>Total Amount:   {{$payment->amount}}</p>
<p>Payment Date:   {{$payment->date}}</p>
<p>Payment Type:   {{$payment->type}}</p>
<p>Payment Status: {{$payment->p_status}}</p>
<p>
<a href="{{route('admin.payments')}}" class="btn btn-danger">Back</a>
</p>
@endsection
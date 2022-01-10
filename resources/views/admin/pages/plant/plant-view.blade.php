@extends('admin.master')
@section('content')
<h1>Plant details</h1>
<p>
<img src="{{url('/uploads/'.$plants->image)}}" width="200px" alt="plant image">
</p>
<p><b>Plant Name:</b> {{$plants->name}}</p>
<p><b>Plant Price: </b>{{$plants->price}}</p>
<p><b>Plant Quantity:</b> {{$plants->quantity}}</p>
<p><b>Plant Discription:</b> {{$plants->discription}}</p>
<p><b>Plant Cetagory:</b> {{$plants->category->C_name}}</p>
<p>
<a href="{{route('admin.plants')}}" class="btn btn-danger">Back</a>
</p>
@endsection
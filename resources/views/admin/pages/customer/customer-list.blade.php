@extends('admin.master')

@section('content')
<h2>Users</h2>
<p style="text-align: left;">

</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
     <th scope="col">User Id</th>
      <th scope="col">User Name</th>
      <th scope="col">User Mobile Number </th>
      <th scope="col">User Email</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $key=>$user)
            <tr>
            <th >{{$key+1}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->number}}</td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
  </tbody>
</table>

@endsection
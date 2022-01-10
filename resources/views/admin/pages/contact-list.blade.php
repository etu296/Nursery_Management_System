@extends('admin.master')

@section('content')
<h2>Customer Message</h2>
<p style="text-align: left;">

</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
        <th scope="col">SL</th>
     <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject </th>
      <th scope="col">message</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach ($homecontacts as $key=>$homecontact)
            <tr>
            <th >{{$key+1}}</th>
                <td>{{$homecontact->name}}</td>
                <td>{{$homecontact->email}}</td>
                <td>{{$homecontact->subject}}</td>
                <td>{{$homecontact->message}}</td>
            </tr>
        @endforeach
  </tbody>
</table>

@endsection
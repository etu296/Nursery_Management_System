@extends('admin.master')

@section('content')
<a href="{{route('productlist')}}" class="btn btn-danger"><i class="fas fa-backward"></i></a>
<a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print <i class="fas fa-print"></i></a>

<div id="PrintTableArea">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Plant Name</th>
      <th scope="col">Plant Image</th>
      <th scope="col">Plant Price</th>
      <th scope="col">Plant Quantity</th>
      <th scope="col">Plant Discription</th>
      <th scope="col">Plant Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($plants as $key=>$plant)
    <tr >
    <th >{{$key+1}}</th>
      <th>{{$plant->name}}</th>
      <th>
        <img src="{{url('/uploads/'.$plant->image)}}" width="100px" alt="plant image">
      </th>
      <th>{{$plant->price}}</th>
      <th>{{$plant->quantity}}</th>
      <th>{{$plant->discription}}</th>
      <th>{{$plant->category->C_name}}</th>
      <th>
        <a href="{{route('plant_view',$plant->id)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
        <a href="{{route('admin.plant.edit',$plant->id)}}" class="btn btn-warning" ><i class="fas fa-edit"></i></a>         
        <a href="{{route('plant_delete',$plant->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
      </th>
    </tr>
    @endforeach
   
  </tbody>
</table>
</div>
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection
@extends('admin.master')

@section('content')
<a href="{{route('productlist')}}" class="btn btn-danger"><i class="fas fa-backward"></i></a>
<a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print <i class="fas fa-print"></i></a>

<div id="PrintTableArea">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Details</th>
      <th scope="col">Product Cetagory</th>
      <th scope="col">Plant Category</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    
  @foreach ($products as $key=>$product)
    <tr >
    <th >{{$key+1}}</th>
      <th>{{$product->product_name}}</th>
      <th>
        <img src="{{url('/uploads/'.$product->product_image)}}" width="60px" alt="product image">
      </th>
      <th>{{$product->product_price}}</th>
      <th>{{$product->products_details}}</th>
      <th>{{optional($product->pcategory)->pcname}}</th>
      <th>{{optional($product->category)->C_name}}</th>
      <th>
        <a href="{{route('admin.product.view',$product->id)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
        <a href="{{route('admin.product.edit',$product->id)}}" class="btn btn-warning" ><i class="fas fa-edit"></i></a>
        <a href="{{route('admin.product.delete',$product->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
      </th>
      <th>

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
@extends('admin.master')

@section('content')
<h2>DASHBOARD</h2>
<div class="row row-cols-1 row-cols-md-3 g-4">
 <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h4>{{$count['product']}}</sup></h4>

                <p>Products</p>
              </div>
              <div class="icon">
              <i class="fab fa-product-hunt"></i>
              </div>
              <a href="{{route('productlist')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 
 
  <div class="col-lg-3 col-6">
    <div  class="small-box bg-success">
   
              <div class="inner">
                <h4>{{$count['plant']}}</h4>

                <p>Plants</p>
              </div>
              <div class="icon">
              <i class="fas fa-seedling"></i>
              </div>
              <a href="{{route('admin.plants')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 

  <div class="col-lg-3 col-6">
  <div class="small-box bg-warning">
              <div class="inner">
                <h4>{{$count['order']}}</sup></h3>

                <p>Order</p>
              </div>
              <div class="icon">
              <i class="fas fa-cart-plus"></i>
              </div>
              <a href="{{route('admin.orders')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 

  <!-- <div class="col-lg-3 col-6">
  <div class="small-box bg-info">
              <div class="inner">
                <h4>{{$count['payment']}}</h4>

                <p>Payment</p>
              </div>
              <div class="icon">
              <i class="fas fa-money-bill-alt"></i>
              </div>
              <a href="{{route('admin.payments')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>  -->


  <div class="col-lg-3 col-6">
  <div class="small-box bg-primary">
              <div class="inner">
                <h4>{{$count['user']}}</h4>

                <p>Customer</p>
              </div>
              <div class="icon">
              <i class="fas fa-users"></i>
              </div>
              <a href="{{route('admin.customer')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 

          <div class="col-lg-3 col-6">
  <div class="small-box bg-warning">
              <div class="inner">
                <h4>{{$count['message']}}</h4>

                <p>Message</p>
              </div>
              <div class="icon">
              <i class="fas fa-comments"></i>
              </div>
              <a href="{{route('admin.message')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 

  <!-- <div class="col-lg-3 col-6">
  <div class="small-box bg-secondary">
              <div class="inner">
                <h4>{{$count['delivery']}}</h4>

                <p>Delivery</p>
              </div>
              <div class="icon">
              <i class="fas fa-truck"></i>
              </div>
              <a href="{{route('admin.delivery')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>  -->

          

@endsection
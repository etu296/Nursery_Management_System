@extends('website.master')
@section('content')
              <div class="ps-cart__content">
                <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                @if($carts)
        @foreach($carts as $key=>$data)
                  <div class="ps-cart-item__thumbnail"><a href="product-detail.html">
        <img  style="width:70px; height:70px;" src="{{url('/uploads/'.$data['product_img'])}}" alt="plant image">
                  </a>
                </div>
                  <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">{{$data['product_name']}}</a>
                    <p><span>Quantity:<i>{{$data['product_qty']}}</i></span><span>Total:<i>{{$data['product_price']}}</i></span></p>
                  </div>
                </div>
              <div class="ps-cart__total">
                
                <p>Sub Total:<span>{{$data['product_price'] * $data['product_qty']}}</span></p>
                <p>Sub Total:<span>{{$data['product_price'] * $data['product_qty']}}</span></p>

              </div>
              @endforeach
              @endif
              <div class="ps-cart__footer"><a class="ps-btn" href="{{route('website.checkout')}}">Check out<i class="furniture-next"></i></a></div>
              <div class="ps-cart__footer"><a class="ps-btn" href="{{route('clear.cart')}}">Clear cart<i class="furniture-next"></i></a></div>

            </div>


          @endsection

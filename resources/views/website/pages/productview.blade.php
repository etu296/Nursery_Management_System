@extends('website.master')
@section('content')

<h1>Product details</h1>

<main class="ps-main">
      <div class="ps-container">
        <div class="ps-product--detail">
          <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 ">
                  <div class="ps-product__thumbnail">
                   
                      
                      <img  style="width:450px; height:300px;" src="{{url('/uploads/'.$product->product_image)}}" alt="plant image">
                  </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                  <div class="ps-product__info">
                    <div class="ps-product__rating">
                      <select class="ps-rating">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><a href="#">(Read all 8 reviews)</a>
                    </div>
                    <h1>{{$product->product_name}}</h1>
                    <p class="ps-product__category"><a href="#">  {{$product->product_name}}</a></p>
                    <h3 class="ps-product__price"><span>BDT</span> {{$product->product_price}} </h3>
					
                    <div class="ps-product__short-desc">
                    <p>{{optional($product->category)->C_name}}</p>
                    <p>{{optional($product->pcategory)->pcname}}</p>
                      <p>{{$product->products_details}}</p>
                    </div>
                    
                    <div class="ps-product__block ps-product__size">
                      <h4>CHOOSE  QUANTITY</h4>
                      
                      <div class="form-group ps-number">
                        <input class="form-control" type="text" value="1"><span class="up"></span><span class="down"></span>
                      </div>
                    </div>
                    <div class="ps-product__shopping"><a class="ps-btn" href="cart.html">Add To Cart</a>
                      <div class="ps-product__actions"><a class="mr-10" href="whishlist.html"><i class="furniture-heart"></i></a><a href="compare.html" title="Compare"><i class="furniture-reload"></i></a></div>
                    </div>
                    <div class="ps-product__sharing">
                      <p>Share this:<a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a></p>
                    </div>
					
                  </div>
                </div>
				

          </div>

            
          </div>
        </div>
      </div>
    </main>
@endsection
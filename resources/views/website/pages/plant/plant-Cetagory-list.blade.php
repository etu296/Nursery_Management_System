@extends('website.master')
@section('content')
<div class="ps-section ps-home-best-product">
      <div class="ps-container">
        <div class="ps-section__header text-center">
          <p>Choose your need item</p>
          <h3 class="ps-section__title">Plants</h3><span class="ps-section__line"></span>
        </div>
        <div class="ps-section__content mt-100">
          <div class="row">
		  @foreach($categories as $p)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                  <div class="ps-product">
                    <div class="ps-product__thumbnail">
						<a class="ps-product__favorite" href="#"><i class="furniture-heart"></i></a>
						<img  src="{{url('/uploads/'.$p->image)}}" width="200px" height="200px" alt="plant image">
					<a class="ps-product__overlay" href="product-detail.html"></a>
                      <div class="ps-product__content full">
                            <a class="ps-product__title" href="product-detail-2.html">{{$p->name}}</a>
                        <div class="ps-product__categories"><a href="product-listing.html">{{$p->name}}</a></div>
                        <p class="ps-product__price">
                          BDT {{$p->price}}
                        </p><a class="ps-btn ps-btn--sm" href="{{route('website.plant.view',$p->id)}}">View Details</a>
                        <p class="ps-product__feature"><i class="furniture-delivery-truck-2"></i>Free Shipping in 24 hours</p>
                      </div>
                    </div>
                    <div class="ps-product__content">
                          <a class="ps-product__title" href="product-detail-2.html">{{$p->name}}</a>
                      <div class="ps-product__categories"><a href="product-listing.html">{{$p->name}}</a></div>
                      <p class="ps-product__price">
                        BDT {{$p->price}}
                      </p>
                    </div>
                  </div>
                </div>
				@endforeach
          </div>
        </div>
      </div>
    </div>
			
				
			
			
	@endsection
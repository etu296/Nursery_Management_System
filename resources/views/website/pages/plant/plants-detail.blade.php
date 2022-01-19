@extends('website.master')
@section('content')
			

    <main class="ps-main">
      <div class="ps-container">
        <div class="ps-product--detail">
          <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 ">
				@foreach($plants as $plant)
                  <div class="ps-product__thumbnail">
                   
                    <div class="ps-product__preview">
                      
                      <div class="ps-video"><a  href="">
					  <img  src="{{url('/uploads/'.$plant->image)}}" width="500px" height="300px" alt="plant image">
						</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                  <div class="ps-product__info">
                    <div class="ps-product__rating">
                      <a href="#">(Read all 8 reviews)</a>
                    </div>
                    <h1>{{$plant->name}}</h1>
                    <p class="ps-product__category"><a href="#">  {{$plant->name}}</a></p>
                    <h3 class="ps-product__price"><span>BDT</span> {{$plant->price}} </h3>
					
                    <div class="ps-product__short-desc">
                      <p>Stow linens and serveware in the dining room or add extra storage space to the entryway with this auburn cherry-finished cabinet ...</p>
                    </div>
                    <div class="ps-product__block ps-product__style">
                      <h4>CHOOSE YOUR COLOR</h4>
                          <div class="ps-radio ps-radio--color ps-radio--inline color-1">
                            <input class="form-control" type="radio" id="color-1" name="color">
                            <label for="color-1"></label>
                          </div>
                          <div class="ps-radio ps-radio--color ps-radio--inline color-2">
                            <input class="form-control" type="radio" id="color-2" name="color">
                            <label for="color-2"></label>
                          </div>
                          <div class="ps-radio ps-radio--color ps-radio--inline color-3">
                            <input class="form-control" type="radio" id="color-3" name="color">
                            <label for="color-3"></label>
                          </div>
                          <div class="ps-radio ps-radio--color ps-radio--inline color-4">
                            <input class="form-control" type="radio" id="color-4" name="color">
                            <label for="color-4"></label>
                          </div>
                    </div>
                    <div class="ps-product__block ps-product__size">
                      <h4>CHOOSE SIZE & QUANTITY</h4>
                      <select class="ps-select selectpicker" title="Select Size">
                        <option value="0">1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        <option value="4">5</option>
                        <option value="5">6</option>
                      </select>
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
				  @endforeach
                </div>
				

          </div>

            
          </div>
        </div>
      </div>
    </main>
    
    <div class="ps-partners">
      <div class="ps-container">
        <div class="ps-slider--partners owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="50" data-owl-nav="false" data-owl-dots="false" data-owl-item="7" data-owl-item-xs="3" data-owl-item-sm="5" data-owl-item-md="6" data-owl-item-lg="7" data-owl-duration="1000" data-owl-mousedrag="on"><img src="images/partner/1.png" alt=""><img src="images/partner/2.png" alt=""><img src="images/partner/3.png" alt=""><img src="images/partner/4.png" alt=""><img src="images/partner/5.png" alt=""><img src="images/partner/6.png" alt=""><img src="images/partner/7.png" alt=""></div>
      </div>
    </div>	
			
			
	@endsection

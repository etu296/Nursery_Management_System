
<div class="header--sidebar"></div>
    <!--  Header-->
    <header class="header" data-sticky="true">
      <div class="header__top">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                  <p><i class="fa fa-home" ></i><b>Nursery Management System</b></p><i class="furniture-market"></i>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
				@if(auth()->user())
				<div class="header__actions"><a href="{{route('logout')}}">{{auth()->user()->name}}|logout </a>			
						@else            
                  <div class="header__actions"><a href="{{route('login')}}">Login </a>
                    <div class="btn-group ps-dropdown"><a  href="{{route('register')}}" >Register</a>
					</div>
					@endif
                    <div class="btn-group ps-dropdown"><a  href="{{route('user.profile')}}" >Account</a>
				
                    </div>
                  </div>
                </div>
				
          </div>
        </div>
      </div>
      <nav class="navigation">
        <div class="ps-container"><a class="ps-logo" href="index-2.html"><img src="{{url('/frontend/images/logo.png')}}" alt=""></a>
              <ul class="main-menu menu">
			  <li><a href="{{route('home')}}">Home</a></li>

                
                <li class="menu-item-has-children has-mega-menu"><a href="{{route('product')}}" title="product">Products</a>
                  <div class="mega-menu">
                    <div class="mega-wrap">
                      <div class="mega-column">
                        <ul class="mega-item mega-features">
                          <li><a href="{{route('plantlist')}}">Plants</a></li>
                          <li><a href="product-list.html">Fartilizers</a></li>
                          <li><a href="product-list.html">Tools</a></li>
                          
                        </ul>
                      </div>
                      
                    </div>
                  </div>
                </li>
                <li><a href="{{route('website.plantcare')}}">Plant Care</a></li>
                <li class="menu-item-has-children"><a href="#">Pages</a>
                      <ul class="sub-menu">
                        <li class="menu-item-has-children"><a href="{{route('plantlist')}}">Plants</a>
                        <ul class="sub-menu">
                                <li><a href="{{route('plantdetails')}}">plant Details</a></li>
                               
                              </ul>
                          
                        </li>
                        <li class="menu-item-has-children"><a href="whishlist.html">Other Pages</a>
                              <ul class="sub-menu">
                                <li><a href="{{route('get.cart')}}">Shopping Cart</a></li>
                                <li><a href="{{route('website.checkout')}}">Checkout</a></li>
                                <li><a href="whishlist.html">Whishlist</a></li>
                              </ul>
                        </li>
                      </ul>
                </li>
                <li><a href="{{route('home.contact')}}">Contact</a></li>
              </ul>
          <div class="menu-toggle"><span></span></div>
          <div class="ps-cart"><a class="ps-cart__toggle" href="{{route('get.cart')}}"><span>({{session()->has('cart') ? count(session()->get('cart')):0}})</span><img src="{{url('/frontend/images/market.svg')}}" alt=""></a>
            <!-- <div class="ps-cart__listing">
              <div class="ps-cart__content">
                <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                  <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="{{url('/frontend/images/shopping-cart/1.jpg')}}" alt=""></div>
                  <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Kingsman</a>
                    <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                  </div>
                </div>
			  
              <div class="ps-cart__total">
                <p>Number of items:<span>36</span></p>
                <p>Item Total:<span>£528.00</span></p>
              </div>
              <div class="ps-cart__footer"><a class="ps-btn" href="{{route('website.checkout')}}">Check out<i class="furniture-next"></i></a></div>
            </div>
          </div> -->
		  
          <form class="ps-form--search" action="{{route('website.product.search')}}" method="get"><i ></i>
            <input name="search" class="form-control" type="text" placeholder="Find product">
            <button>Search</button>
          </form>
        </div>
      </nav>
    </header>
    @if(session()->has('error'))
<p class="alert alert-danger">{{session()->get('error')}}</p>
@endif
    <div class="ps-hero bg--cover" data-background="{{url('/frontend/images/s3.jpg')}}">
      
    </div>
      
  

			
				
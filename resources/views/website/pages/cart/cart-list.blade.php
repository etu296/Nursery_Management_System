@extends('website.master')
@section('content')
              <div class="ps-cart__content">
                <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                
        <div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
													Your Cart 
												</a>
											</h4>
										</div>
										<div >
											<div class="panel-body">
												<table class="cart-summary table table-bordered">
													<thead>
													
														<tr>
															<th class="width-80 text-center">Image</th>
															<th>Name</th>
															<th class="width-100 text-center">Unit price</th>
															<th class="width-100 text-center">Qty</th>
															<th class="width-100 text-center">Total</th>
														</tr>
													</thead>
													
													<tbody>
                          @if($carts)
                             @foreach($carts as $key=>$data)
														<tr>
															<td>
																<a href="product-detail-left-sidebar.html">
																<img  style="width:70px; height:70px;" src="{{url('/uploads/'.$data['product_img'])}}" alt="plant image">
																</a>
															</td>
															<td>
																<a href="product-detail-left-sidebar.html" class="product-name">{{$data['product_name']}}</a>
															</td>
															<td class="text-center">
															{{$data['product_price']}}
															</td>
															<td class="text-center">
															{{$data['product_qty']}}
															</td>
															<td class="text-center">
															{{$data['product_price'] * $data['product_qty']}}
															</td>
														</tr>
														@endforeach
                            @endif
														
													</tbody>
												</table>

												<h4 class="heading-primary">Cart Total</h4>
												<table class="table cart-total">
													<tbody>
														<tr>
															<th>
																Cart Subtotal
															</th>
															<td class="total">
																$431
															</td>
														</tr>
														<tr>
															<th>
																Shipping
															</th>
															<td>
																Free Shipping
															</td>
														</tr>
														<tr>
															<th>
																<strong>Order Total</strong>
															</th>
															<td class="total">
																$431
															</td>
														</tr>
													</tbody>
												</table>

												<h4 class="heading-primary">Payment</h4>
												<form action="#" method="post">
													<div class="item">
														<input type="checkbox">Cash On Payment
													</div>
                          <br><br>
                         <a href="{{route('website.checkout')}}" class="btn btn-success">Check Out</a>
                         <a href="{{route('clear.cart')}}" class="btn btn-danger">Cleare Cart</a>

												</form>
											</div>
										</div>
									</div>
              
              

            </div>


          @endsection

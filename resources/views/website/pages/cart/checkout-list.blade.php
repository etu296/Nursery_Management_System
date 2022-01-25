@extends('website.master')
@section('content')

<h1 style="text-align: center; color:green;">Check Out</h1>

<div class="container">
					<div class="page-checkout">
						<div class="row">
							<div class="checkout-left col-lg-9 col-md-9 col-sm-9 col-xs-12">
								<p>Returning customer? <a class="login" href="{{route('login')}}">Click here to login</a>.</p>
								
                                <div class="panel-group" id="accordion">
									
								
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
													Payment
												</a>
											</h4>
										</div>
										@if($carts)
										<div class="col-xs-6 col-sm-6 col-md-6">
                                        <address>
                                       <strong>{{auth()->user()->name}}</strong>
                                        <br>
                                         {{auth()->user()->email}}
                                        <br>
                                          {{auth()->user()->number}}
                                        <br>
                                           {{auth()->user()->address}}
                                        <br>
                                       </address>
                                      </div>
									  @endif
						
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
														<tr>
														@php $total = 0; @endphp
														@if($carts)
                                                          @foreach($carts as $key=>$data)
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
														@php $total += $data['product_price'] * $data['product_qty'] ; @endphp
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
															{{$total}} BDT
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
															{{$total}} BDT
															</td>
														</tr>
													</tbody>
												</table>

												<h4 class="heading-primary">Payment</h4>
												<form action="#" method="post">
													<div class="item">
														<input type="checkbox">Cash On Delivery
													</div>
													
												</form>
												<br><br>
												<a href="{{route('website.place.order')}}" class="btn btn-primary">Place Order</a>

											</div>
										</div>
									</div>
								</div>
								
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
@endsection
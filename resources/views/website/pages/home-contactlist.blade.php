@extends('website.master')
@section('content')

@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif

 <h1 style="text-align: center; color:green;">Contact</h1>
<br>
    <div class="ps-contact">
      <div class="ps-container">
        <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                <form class="ps-form--contact" action="{{route('contactStore')}}" method="post">
				@csrf
                  <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                          <div class="form-group">
                            <label>Name <sup>*</sup></label>
                            <input name="name" class="form-control" type="text" placeholder="name">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                          <div class="form-group">
                            <label>Email <sup>*</sup></label>
                            <input class="form-control" type="email" name="email" placeholder="email">
                          </div>
                        </div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                          <div class="form-group">
                            <label>Subject <sup>*</sup></label>
                            <input class="form-control" type="text" name="subject"placeholder="subject">
                          </div>
                        </div>
                  </div>
                  <div class="form-group">
                    <label>Your Message <sup>*</sup></label>
                    <textarea class="form-control" rows="7" name="message" placeholder="MESSAGE"></textarea>
                  </div>
                  <div class="form-group submit">
                    <button class="ps-btn pl-60 pr-60">Send your message</button>
                  </div>
                </form>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                <div class="ps-contact__info">
                  <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                         
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                         
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                          
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                          <div class="ps-block--contact">
                            <h3>FOLLOW US</h3>
                            <ul class="ps-social">
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-feed"></i></a></li>
                            </ul>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>


					
@endsection

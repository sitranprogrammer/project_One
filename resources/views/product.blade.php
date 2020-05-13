@extends('layouts.layout')

@section('title', 'Page product')
@section('content')

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Hot Deals</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Laptops</a></li>
						<li><a href="#">Smartphones</a></li>
						<li><a href="#">Cameras</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
	

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				
					
					<?php
						$img_aray = explode(",", $product->image);
						
					
					 ?>
					<!-- Product main img -->
						<div class="col-md-5 col-md-push-2">
							<div id="product-main-img">
								<div class="product-preview">
									{{-- @if ()
										
									@endif --}}
									<img src="./upload/{{$img_aray[0]}}" alt="">
									
								
								</div>
								

								
							</div>
						</div>
						<!-- /Product main img -->

						<!-- Product thumb imgs -->
						<div class="col-md-2  col-md-pull-5">
							<div id="product-imgs">
								<div class="product-preview">
									
								
									<img src="./upload/{{$img_aray[0]}}" alt="">
								</div>
								
								
							</div>
						</div>
						<!-- /Product thumb imgs -->

						<!-- Product details -->
						<div class="col-md-5">
							<div class="product-details">
							<h2 class="product-name">{{$product->name}}</h2>
								

								<div>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</div>
								
								</div>
								<div>
									<h3 class="product-price">{{ $product->price_unit}}.000<del class="product-old-price">{{ $product->price_promotion}}.000</del></h3>
									<span class="product-available">In Stock</span>
								</div>
								

								
								<a href="{{route('addCart',$product->id)}}">
									<div class="add-to-cart">
										
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</a>
								<ul class="product-btns">
									<li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
									<li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
								</ul>

								

								<ul class="product-links">
									<li>Share:</li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-envelope"></i></a></li>
								</ul>

							</div>
						</div>
						<!-- /Product details -->
				
					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab1">Details</a></li>
								
								<li><a data-toggle="tab" href="#tab3">Reviews </a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p>{{$product->content}}</p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
							
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade ">
									<div class="fb-comments" data-href="http://123.Datcosohong.com" data-numposts="5" data-width=""></div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<!-- Section -->
		
		<!-- /NEWSLETTER -->
@endsection
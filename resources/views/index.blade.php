@extends('layouts.layout')

@section('title', 'Page index')


	
@section('content')

 <nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="{{route('index')}}">Home</a></li>
						@foreach ($catalog as $catalog1)
							<li><a href="#">{{$catalog1->name}}</a></li>
						@endforeach
					
						
					
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
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./upload/product09.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./upload/product09.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessories<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./upload/cap-lightning-1m-xmobile-ltl-01-xanh-reu-1-1-600x600.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Cameras<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title"> Sản phẩm nhiều người xem</h3>
							
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
								

									@foreach ($catalog as $item)
										
									@if ($item->id == 1)
										<li class="active"><a data-toggle="tab" href="#tab{{$item->id}}">{{$item->name}}</a></li>
									@else
										<li class=""><a data-toggle="tab" href="#tab{{$item->id}}">{{$item->name}}</a></li>
									@endif
									
								
											
								
									@endforeach

								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
							
							@foreach ($catalog as $catalog1)
								@if ($catalog1->id == 1)
									<div id="tab{{$catalog1->id}}" class="tab-pane active">
										<div class="products-slick" data-nav="#slick-nav-1">
											@foreach ($products ??[] as $item)
												@if( $item->id_parent == $catalog1->id)
													<div class="product">
														<div class="product-img">

														  
														<?php
															$img_aray = explode(",",$item->image);
														?>
														
														<img src="./upload/{{$img_aray[0]}}" alt="">
															@if ($item->new == 1)
														
																<div class="product-label">
																	<span class="new">NEW</span>
																</div>	
															@endif
														</div>
														<div class="product-body">
														<p class="product-category">{{$catalog1->name}}</p>
															
														<h3 class="product-name"><a href='{{route('product',['id'=>$item->id,'slug'=>$item->slug])}}'>{{$item->name}}</a></h3>		
														<h4 class="product-price">${{$item->price_promotion}}.000<del class="product-old-price">${{$item->price_unit}}.000</del></h4>
															<div class="product-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>	
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
															</div>
															<div class="product-btns">
																<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
																<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
																<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
															</div>
														</div>
														<div class="add-to-cart">
														<a href="{{route('addCart',$item->id)}}">
																<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
															</a>
														</div>
													</div>
												@endif
												
											@endforeach
										</div>
									
									
									</div>
								
									
								@else
								@if ($catalog1->id == 2)
									<div id="tab{{$catalog1->id}}" class="tab-pane ">
										<div class="products-slick" data-nav="#slick-nav-1">
											@foreach ($products ??[] as $item)
												@if( $item->id_parent == $catalog1->id)
													<div class="product">
														<div class="product-img">

															<?php
															
															$img_aray = explode(",",$item->image);
													

														
													?>
													
													<img src="./upload/{{$img_aray[0]}}" alt="">
														
															@if ($item->new == 1)
																<div class="product-label">
																	<span class="new">NEW</span>
																</div>	
															@endif
														</div>
														<div class="product-body">
															<p class="product-category">{{$catalog1->name}}</p>
														<h3 class="product-name"><a href='{{route('product',['id'=>$item->id,'slug'=>$item->slug])}}'>{{$item->name}}</a></h3>
															
																
														<h4 class="product-price">${{$item->price_promotion}}.000<del class="product-old-price">${{$item->price_unit}}.000</del></h4>
															<div class="product-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i> 
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
															</div>
															<div class="product-btns">
																<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
																<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
																<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
															</div>
														</div>
														<div class="add-to-cart">
														<a href="{{route('addCart',$item->id)}}">
																<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
															</a>
														</div>
													</div>
												@endif
												
											@endforeach
										</div>
									
									
									</div>

								@else
								
								@if ($catalog1->id == 3)
									<div id="tab{{$catalog1->id}}" class="tab-pane ">
										<div class="products-slick" data-nav="#slick-nav-1">
											@foreach ($products ??[] as $item)
												@if($item->id_parent == $catalog1->id)
													<div class="product">
														<div class="product-img">
															<?php $img_aray = explode(",",$item->image);?>
													
															<img src="./upload/{{$img_aray[0]}}" alt="">
														
															@if ($item->new == 1)
																<div class="product-label">
																	<span class="new">NEW</span>
																</div>	
															@endif
														</div>
														<div class="product-body">
															<p class="product-category">{{$catalog1->name}}</p>
															<h3 class="product-name"><a href='{{route('product',['id'=>$item->id,'slug'=>$item->slug])}}'>{{$item->name}}</a></h3>
															
																
															<h4 class="product-price">${{$item->price_promotion}}.000<del class="product-old-price">${{$item->price_unit}}.000</del></h4>
															<div class="product-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
															</div>
															<div class="product-btns">
																<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
																<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
																<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
															</div>
														</div>
														<div class="add-to-cart">
														<a href="{{route('addCart',$item->id)}}">
																<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
															</a>
														</div>
													</div>
												@endif
												
											@endforeach
										</div>	
									</div>
									
								@else
								@if ($catalog1->id == 4)
									<div id="tab{{$catalog1->id}}" class="tab-pane ">
										<div class="products-slick" data-nav="#slick-nav-1">
											@foreach ($products ??[] as $item)
												@if($item->id_parent == $catalog1->id)
													<div class="product">
														<div class="product-img">
															<?php $img_aray = explode(",",$item->image);?>
													
															<img src="./upload/{{$img_aray[0]}}" alt="">
														
															@if ($item->new == 1)
																<div class="product-label">
																	<span class="new">NEW</span>
																</div>	
															@endif
														</div>
														<div class="product-body">
															<p class="product-category">{{$catalog1->name}}</p>
															<h3 class="product-name"><a href='{{route('product',['id'=>$item->id,'slug'=>$item->slug])}}'>{{$item->name}}</a></h3>
															
															<h4 class="product-price">${{$item->price_promotion}}.000<del class="product-old-price">${{$item->price_unit}}.000</del></h4>
															<div class="product-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
															</div>
															<div class="product-btns">
																<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
																<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
																<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
															</div>
														</div>
														<div class="add-to-cart">
														<a href="{{route('addCart',$item->id)}}">
																<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
															</a>
														</div>
													</div>
												@endif
												
											@endforeach
										</div>	
									</div>
										
								@endif
								@endif
								@endif
								@endif
										
							
								
							@endforeach	
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
	

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
								
								<h3 id ="days"></h3>
								<span>Days</span>
							
								</li>
								<li>
									
										<h3 id ="hours"></h3>
										<span>Hours</span>
									
								</li>
								<li>
									
										<h3 id="minutes">34</h3>
										<span>Mins</span>
									
								</li>
								<li>
								




									<h3 id="seconds"></h3>
									<span>Secs</span>
								
								</li>
							</ul>
							<h2 class="text-uppercase">Sale </h2>
							<p>Giảm Giá sản Phẩm hơn 50%</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top sản phẩm bán ra</h3>
							
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
								

									@foreach ($catalog as $item)
										
									@if ($item->id == 1)
										<li class="active"><a data-toggle="tab" href="#tab{{$item->id}}">{{$item->name}}</a></li>
									@else
										<li class=""><a data-toggle="tab" href="#tab{{$item->id}}">{{$item->name}}</a></li>
									@endif
									
								
											
								
									@endforeach

								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
							
							@foreach ($catalog as $catalog1)
								@if ($catalog1->id == 1)
									<div id="tab{{$catalog1->id}}" class="tab-pane active">
										<div class="products-slick" data-nav="#slick-nav-1">
											@foreach ($products ??[] as $item)
												@if( $item->id_parent == $catalog1->id)
													<div class="product">
														<div class="product-img">

														  
														<?php
															$img_aray = explode(",",$item->image);
														?>
														
														<img src="./upload/{{$img_aray[0]}}" alt="">
															@if ($item->new == 1)
														
																<div class="product-label">
																	<span class="new">NEW</span>
																</div>	
															@endif
														</div>
														<div class="product-body">
														<p class="product-category">{{$catalog1->name}}</p>
															
														<h3 class="product-name"><a href='{{route('product',['id'=>$item->id,'slug'=>$item->slug])}}'>{{$item->name}}</a></h3>		
														<h4 class="product-price">${{$item->price_promotion}}.000<del class="product-old-price">${{$item->price_unit}}.000</del></h4>
															<div class="product-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>	
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
															</div>
															<div class="product-btns">
																<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
																<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
																<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
															</div>
														</div>
														<div class="add-to-cart">
														<a href="{{route('addCart',$item->id)}}">
																<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
															</a>
														</div>
													</div>
												@endif
												
											@endforeach
										</div>
									
									
									</div>
								
									
								@else
								@if ($catalog1->id == 2)
									<div id="tab{{$catalog1->id}}" class="tab-pane ">
										<div class="products-slick" data-nav="#slick-nav-1">
											@foreach ($products ??[] as $item)
												@if( $item->id_parent == $catalog1->id)
													<div class="product">
														<div class="product-img">

															<?php
															
															$img_aray = explode(",",$item->image);
													

														
													?>
													
													<img src="./upload/{{$img_aray[0]}}" alt="">
														
															@if ($item->new == 1)
																<div class="product-label">
																	<span class="new">NEW</span>
																</div>	
															@endif
														</div>
														<div class="product-body">
															<p class="product-category">{{$catalog1->name}}</p>
														<h3 class="product-name"><a href='{{route('product',['id'=>$item->id,'slug'=>$item->slug])}}'>{{$item->name}}</a></h3>
															
																
														<h4 class="product-price">${{$item->price_promotion}}.000<del class="product-old-price">${{$item->price_unit}}.000</del></h4>
															<div class="product-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i> 
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
															</div>
															<div class="product-btns">
																<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
																<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
																<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
															</div>
														</div>
														<div class="add-to-cart">
														<a href="{{route('addCart',$item->id)}}">
																<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
															</a>
														</div>
													</div>
												@endif
												
											@endforeach
										</div>
									
									
									</div>

								@else
								
								@if ($catalog1->id == 3)
									<div id="tab{{$catalog1->id}}" class="tab-pane ">
										<div class="products-slick" data-nav="#slick-nav-1">
											@foreach ($products ??[] as $item)
												@if($item->id_parent == $catalog1->id)
													<div class="product">
														<div class="product-img">
															<?php $img_aray = explode(",",$item->image);?>
													
															<img src="./upload/{{$img_aray[0]}}" alt="">
														
															@if ($item->new == 1)
																<div class="product-label">
																	<span class="new">NEW</span>
																</div>	
															@endif
														</div>
														<div class="product-body">
															<p class="product-category">{{$catalog1->name}}</p>
															<h3 class="product-name"><a href='{{route('product',['id'=>$item->id,'slug'=>$item->slug])}}'>{{$item->name}}</a></h3>
															
																
															<h4 class="product-price">${{$item->price_promotion}}.000<del class="product-old-price">${{$item->price_unit}}.000</del></h4>
															<div class="product-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
															</div>
															<div class="product-btns">
																<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
																<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
																<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
															</div>
														</div>
														<div class="add-to-cart">
														<a href="{{route('addCart',$item->id)}}">
																<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
															</a>
														</div>
													</div>
												@endif
												
											@endforeach
										</div>	
									</div>
									
								@else
								@if ($catalog1->id == 4)
									<div id="tab{{$catalog1->id}}" class="tab-pane ">
										<div class="products-slick" data-nav="#slick-nav-1">
											@foreach ($products ??[] as $item)
												@if($item->id_parent == $catalog1->id)
													<div class="product">
														<div class="product-img">
															<?php $img_aray = explode(",",$item->image);?>
													
															<img src="./upload/{{$img_aray[0]}}" alt="">
														
															@if ($item->new == 1)
																<div class="product-label">
																	<span class="new">NEW</span>
																</div>	
															@endif
														</div>
														<div class="product-body">
															<p class="product-category">{{$catalog1->name}}</p>
															<h3 class="product-name"><a href='{{route('product',['id'=>$item->id,'slug'=>$item->slug])}}'>{{$item->name}}</a></h3>
															
															<h4 class="product-price">${{$item->price_promotion}}.000<del class="product-old-price">${{$item->price_unit}}.000</del></h4>
															<div class="product-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
															</div>
															<div class="product-btns">
																<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
																<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
																<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
															</div>
														</div>
														<div class="add-to-cart">
														<a href="{{route('addCart',$item->id)}}">
																<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
															</a>
														</div>
													</div>
												@endif
												
											@endforeach
										</div>	
									</div>
										
								@endif
								@endif
								@endif
								@endif
										
							
								
							@endforeach	
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
	

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
<script>

	var countDownDate = new Date("may 29, 2020 20:12:00").getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {

	// Get today's date and time
	var now = new Date().getTime();

	// Find the distance between now and the count down date
	var distance = countDownDate - now;

	// Time calculations for days, hours, minutes and seconds
	var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	// Display the result in the element with id="demo"
	document.getElementById("days").innerHTML =  days ;
	document.getElementById("hours").innerHTML =  hours ;
	document.getElementById("minutes").innerHTML =  minutes ;
	document.getElementById("seconds").innerHTML =  seconds ;
	// If the count down is finished, write some text
	if (distance < 0) {
		clearInterval(x);
		document.getElementById("days").innerHTML="EXPIRED";
		document.getElementById("hours").innerHTML="EXPIRED"; 
		document.getElementById("minutes").innerHTML="EXPIRED"; 
		document.getElementById("seconds").innerHTML="EXPIRED"; 

	}
	}, 1000)
</script>
<script type="text/javascript">
	$('#searchname').autocomplete({
	source: '{!!URL::route('autocomplete')!!}',
	minlenght:1,
	autoFocus:true,
	select:function(e,ui){
	// alert(ui);
	//$('#id').val(ui.item.id);
	//$('#name').val(ui.item.value);
	return false;		 
	}
	})
	.autocomplete( "instance" )
	._renderItem = function( ul, item ) {

	return $( "<li>" )
	// .append( "<div>" + item.name + "<br>"+item.image  +"<img style='height:50px;width:50px' src="+item.detail+" >"+ "</div>" )
	// lay hinh item . theo database
	.append( "<div>"+"<a href='{{route('product',['id'=>$item->id,'slug'=>$item->slug])}}'>" +"<p>"+ "<span>"+item.name+"  " +"</span>"+ "<span>"  +"<img style='height:50px;width:50px' src="+'./upload/smartphone/'+item.image+" >"+"</span>"+"</p>"+ "</a>"+"<div>" )
	.appendTo( ul );
	};


</script>
@endsection

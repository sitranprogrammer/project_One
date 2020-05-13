<!-- /HEADER -->


    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone   "></i> +084 398791931</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> sitrandeptrai@gmail.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> 10 / 3 hàm nghi / phan rí cửa / tuy phong / bình thuận</a></li>
                </ul>
                <ul class="header-links pull-right">
                    <li><a href="#"><i class="fa fa-dollar"></i> VND</a></li>
                    {{-- <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li> --}}
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="{{route('index'),}}" class="logo">
                                <img src="./img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    
                        <div class="col-md-6">
                            <div class="header-search">
                                <!-- <form action="" method="get">
                                    <input class="input" name="keyword" placeholder="Search here">
                                    <button class="search-btn">Search</button>
                                </form> -->
        
                                <input class="input" type="text" name="searchname" id="searchname" placeholder="Search here">
                                  
                                
                            </div>
                        </div>
                  
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                            {{-- <div>
                                <a href="#">
                                    <i class="fa fa-heart-o"></i>
                                    <span>Your Wishlist</span>
                                    <div class="qty">2</div>
                                </a>
                            </div> --}}
                            <!-- /Wishlist -->

                            <!-- Cart -->
                            <div class="dropdown">
                                
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Your Cart</span>
                                    <div class="qty">{{Cart::count() ?? 0}}</div>
                                </a>
                                <div class="cart-dropdown">
                                    <div class="cart-list">
                                    @foreach(Cart::content() as $row)
                                        <div class="product-widget">
                                            <div class="product-img">
                                                {{-- {{$row->options->image}} --}}
                                                <img src="./upload/./{{$row->options->image}}" alt="">
                                            </div>
                                            <div class="product-body">
                                            <h3 class="product-name">{{$row->name}}<a href="#"></a></h3>
                                                <h4 class="product-price"><span class="qty">x{{$row->qty}}</span></h4>
                                                <h4 class="product-price"><span class="qty">${{$row->price}}.000 </span></h4>
                                            </div>
                                            <a href="{{route('deleteItem',$row->rowId)}}"><button class="delete"><i class="fa fa-close"></i></button></a>
                                        </div>  
                                    @endforeach
                                    </div>
                                    <div class="cart-summary">
                                        <small>{{Cart::count() ?? 0}} Item(s) selected</small>
                                        {{-- <h5>SUBTOTAL: {{Cart::total()}} $</h5> --}}
                                    </div>
                                    <div class="cart-btns">
                                        <a href="{{route('viewcart')}}">View Cart</a>
                                    <a href="{{route('checkout'),}}">Checkout <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>

@extends('layouts.layout')


@section('title', 'Page index')
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

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">Checkout</h3>
                <ul class="breadcrumb-tree">
                    <li><a href="#">Home</a></li>
                    <li class="active">Checkout</li>
                </ul>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <div class="col-md-7">
                <!-- Billing Details -->
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Billing address</h3>
                    </div>
                    {{--  --}}
                    <form action="{{route('sendmailler')}}" method="get">

                        <div class="form-group">
                            <input type="text" class="input" value="" name="fullname" id="username"
                                placeholder="Enter full name" />
                        </div>
                        <div class="form-group">
                            <input class="input" id="email" value="" type="email" name="email"
                                placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input class="input" id="number" value="" type="number" name="phone" placeholder="phone">
                        </div>

                        <div class="form-group">
                            <input class="input" id="address" value="" type="text" name="address" placeholder="address">
                        </div>
                        <div class="form-group">
                            <input class="input" id="note" value="" type="text" name="note" placeholder="thanh toan">
                        </div>


                </div>






            </div>

            <!-- Order Details -->
            <div class="col-md-5 order-details">
                <div class="section-title text-center">
                    <h3 class="title">Your Order</h3>
                </div>
                <div class="order-summary">
                    <div class="order-col">
                        <div><strong>PRODUCT</strong></div>
                        <div><strong>TOTAL</strong></div>
                    </div>
                    <div class="order-products">
                        @foreach ($items as $item)
                        <div class="order-col">
                            <div>{{$item->name}}</div>
                            <div>{{$item->price}}.000</div>

                        </div>
                        @endforeach


                    </div>
                    
                    {{-- <div class="order-col">
                        <div><strong>TOTAL</strong></div>
                        <div><strong class="order-total">{{Cart::total()}}</strong></div>
                    </div> --}}
                </div>
                <div class="payment-method">
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-1">
                        <label for="payment-1">
                            <span></span>
                            Internet Banking
                        </label>
                        <div class="caption">
                            <p>Gửi Tiền qua Tài khoản Số tài khoản <br /> Họ và tên: Lê Sĩ <br /> số tài khoản: ACB
                                123456789 </p>
                        </div>
                    </div>
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-2">
                        <label name="" for="payment-2">
                            <span></span>
                            gửi tiền trực tiếp
                        </label>
                        <div class="caption">
                            <p>Đặt hàng và đến nơi dịch vụ mua bán nhận sản phẩm và thanh toán</p>
                        </div>
                    </div>
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-3">
                        <label for="payment-3">
                            <span></span>
                            thanh toán khi nhận hàng
                        </label>
                        <div class="caption">
                            <p>khi nhận sản phẩm khách hàng kiểm tra kỹ trước khi nhận hàng </p>
                        </div>
                    </div>
                </div>
                <div class="input-checkbox">
                    <input type="checkbox" id="terms">
                    <label for="terms">
                        <span></span>
                        Tôi chấp nhận <a href="#">các điều khoản và dịch vụ</a>
                    </label>

                    <div id="info"></div>
                </div>
                <button class="delete-photo primary-btn order-submit  order-1">nhấn mua</button>
                </form>



                <button class="delete-photo primary-btn order-submit  order-2 ">nhấn mua</button>
                </a>

            </div>
            <!-- /Order Details -->

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

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
    $('.delete-photo').on('click', function () {
        // alert('hihi')
        username = $('#username').val();

        email = $('#email').val();
        number = $('#number').val();
        address = $('#address').val();
        note = $('#note').val();
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


        if (username == "") {

            $('#username').css('border', '1px solid #D10024')
            setTimeout(function () {

                $('#username').css('border', '1px solid #E4E7ED')

            }, 1000);
        }

        if (filter.test(email.value)) {

            $('#email').css('border', '1px solid #D10024')
            setTimeout(function () {

                $('#email').css('border', '1px solid #E4E7ED')

            }, 1000);
        }
        if (number == "") {

            $('#number').css('border', '1px solid #D10024')
            setTimeout(function () {

                $('#number').css('border', '1px solid #E4E7ED')

            }, 1000);
        }
        if (address == "") {

            $('#address').css('border', '1px solid #D10024')
            setTimeout(function () {

                $('#address').css('border', '1px solid #E4E7ED')

            }, 1000);
        }
        if (note == "") {

            $('#note').css('border', '1px solid #D10024')
            setTimeout(function () {

                $('#note').css('border', '1px solid #E4E7ED')

            }, 1000);
        }

        if (username == "" && !filter.test(email.value) && number == "" && address == "" && note == "") {
            $('#username').css('border', '1px solid #D10024')
            $('#email').css('border', '1px solid #D10024')
            $('#number').css('border', '1px solid #D10024')
            $('#address').css('border', '1px solid #D10024')
            $('#note').css('border', '1px solid #D10024')

            setTimeout(function () {

                $('#username').css('border', '1px solid #E4E7ED')
                $('#email').css('border', '1px solid #E4E7ED')
                $('#number').css('border', '1px solid #E4E7ED')
                $('#address').css('border', '1px solid #E4E7ED')
                $('#note').css('border', '1px solid #E4E7ED')
               
                swal({
                title: 'Phát hiện lỗi yêu cầu kiểm tra lại!',
                text: 'You clicked the button!',
                icon: 'warning',
                button: 'fa',
                    
                    });
       

            }, 1000);

        } else {
            
            $('.order-2').css('display', 'none');
            $('.order-1').css('display', 'inline');
        }

    });
   
</script>
<style>
    .order-1 {
        display: none
    }
</style>
@endsection

<!-- /NEWSLETTER -->

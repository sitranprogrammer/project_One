<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <base href="{{asset('')}}">
    <title> @yield('title')</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="./css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="./css/slick.css" />
    <link type="text/css" rel="stylesheet" href="./css/slick-theme.css" />
    <!-- autocomple search  -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="./css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="./css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="./css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>


   
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    <div id="fb-root"></div>
   


    <!-- jQuery Plugins -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="./js/nouislider.min.js"></script>
    <script src="./js/jquery.zoom.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=225922998827445&autoLogAppEvents=1"></script>
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
        $('#searchname')._renderItem = function( ul, item ) {
            console.log('item', item);
        return $( "<li>" )
    
            .append("<a href='abc'>" + item.name + "<br>"+  +"<img style='height:50px;width:50px' src="+item.detail+" >"+ "</a>" )
            // lay hinh item . theo database
     
            //.append( "<div>"+ +"<p>"+ "<span>"+item.name+"  " +"</span>"+ "<span>"  +"<img style='height:50px;width:50px' src="+'/img/'+item.image+" >"+"</span>"+"</p>"+ "</div>" )
            .appendTo( ul );
        };
        
            
    </script>
    
   
</body>

    

</html>

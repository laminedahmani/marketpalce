<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Grossista - 1er site de Grop en algerie</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{url('css/bootstrap.min.css')}}"/>
		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{url('css/slick.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{url('css/slick-theme.css')}}"/>
			
		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{url('css/nouislider.min.css')}}"/>
		<link  type="text/css" rel="stylesheet" href="{{ url('css/font-awesome-4.7.0/css/font-awesome.css')}}">
		<!-- Font Awesome Icon -->
		
		
		

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{url('css/style.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{url('css/styleadditionnel.css')}}"/>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		
	
  
   @include('layouts/parts/header')

   
    @yield('content')



   @include('layouts/parts/footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>		
	</body>
</html>

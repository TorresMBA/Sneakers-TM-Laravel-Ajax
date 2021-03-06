    <title>@yield('title','Sneakers TM') | Sneakers TM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Downy Shoes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" type="text/css" href="{{ asset("assests/$theme/css/checkout.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("assests/$theme/css/contact.css") }}">
	{{-- contact para letra roja en menu crear, general crear  {{ isset($item["icono"] ? $item["icono"] : "") }} --}}
	<link rel="stylesheet" href="{{ asset("assests/$theme/css/about.css") }}" type="text/css" media="screen" property="" /> 
	<!-- //custom-theme -->
	<link href="{{ asset("assests/$theme/css/bootstrap.css") }}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{ asset("assests/$theme/css/shop.css") }}" type="text/css" media="screen" property="" />{{--Shop.css es para el carrito y el modal--}}
	<link href="{{ asset("assests/$theme/css/style7.css") }}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{ asset("assests/$theme/css/flexslider.css") }}" type="text/css" media="screen" />
	<link href="{{ asset("assests/$theme/css/easy-responsive-tabs.css") }}" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="{{ asset("assests/$theme/css/jquery-ui1.css") }}">
	<link href="{{ asset("assests/$theme/css/style.css") }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset("assests/$theme/css/font-awesome.css") }}" rel="stylesheet">
	
	<!-- CDN Toast -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	@yield('styles')
	
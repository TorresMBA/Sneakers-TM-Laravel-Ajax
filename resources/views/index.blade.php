<!DOCTYPE html>
<html lang="zxx">

<head>
	@include('layouts.partials.head')
</head>

<body>
	<!-- banner -->
	<div class="banner_top" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo">
					<h1><a class="navbar-brand" href="{{ route('inicio') }}"><span>Sneakers</span> <i>TM</i></a></h1>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>
					<nav>
						<ul>
							<li><a href="{{ route('inicio') }}" class="active">Inicio</a></li>
							<li><a href="{{ route('nosotros') }}"> Nosotros</a></li>
							<li><a href="{{ route('error.page') }}">Equipo</a></li>
							<li><a href="{{ route('calzado.lista') }}">Calzados a la Venta !!</a></li>
							<li><a href="{{ route('contacto') }}">Contacto</a></li>
							@if (session()->has('usuario_id') && session('rol_id') == 1)
								<li><a href="{{ route('dashboard') }}">Panel de Administrador</a></li>
							@endif
							@if (session()->has('usuario_id'))
								<li><a href="#">{{ session()->get('usuario_nom') }} {{ session()->get('usuario_ape') }}</a></li>
								<li><a href="{{ route('logout') }}">Cerrar Sesion</a></li>
							@else
								<li><a href="{{ route('login.inicio') }}">Login</a></li>
								<li><a href="{{ route('login.registrar') }}">Registrarse</a></li>
							@endif
							
						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>

				<!-- cart details -->
				<div class="top_nav_right">
					<div class="shoecart shoecart2 cart cart box_1">
						<form action="#" method="post" class="last">
							@csrf
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						</form>
					</div>
				</div>
				<!-- //cart details -->

				<!-- search -->
				<div class="search_w3ls_agileinfo">				
					<div class="cd-main-header">
						<ul class="cd-header-buttons">
							<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
						</ul>
					</div>
					<div id="cd-search" class="cd-search">
						<form action="" method="post">
							<input name="Search" type="search" placeholder="Click enter after typing...">
						</form>
					</div>
				</div>
				<!-- //search -->

				<div class="clearfix"></div>
			</div>

			<!-- /slider -->
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides callbacks callbacks1" id="slider4">
						<li>
							<div class="banner-top2">
								<div class="banner-info-wthree">
									<h3>Nike</h3>
									<p>See how good they feel.</p>

								</div>

							</div>
						</li>
						<li>
							<div class="banner-top3">
								<div class="banner-info-wthree">
									<h3>Heels</h3>
									<p>For All Walks of Life.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="banner-top">
								<div class="banner-info-wthree">
									<h3>Sneakers</h3>
									<p>See how good they feel.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="banner-top1">
								<div class="banner-info-wthree">
									<h3>Adidas</h3>
									<p>For All Walks of Life.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //slider -->
			
			<ul class="top_icons">
				<li><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
				<li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
				<li><a href="#"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
				<li><a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a></li>
			</ul>
		</div>
	</div>
	<!-- //banner -->

	<!-- /girds_bottom-->
	<div class="grids_bottom">
		<div class="style-grids">
			<div class="col-md-6 style-grid style-grid-1">
				<img src="{{ asset("assests/$theme/images/b1.jpg") }}" alt="shoe">
			</div>
		</div>
		<div class="col-md-6 style-grid style-grid-2">
			<div class="style-image-1_info">
				<div class="style-grid-2-text_info">
					<h3>Nike DOWNSHIFTER</h3>
					<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
						tempora incidunt ut labore et dolore .</p>
					<div class="shop-button">
						<a href="shop.html">Shop Now</a>
					</div>
				</div>
			</div>
			<div class="style-image-2">
				<img src="{{ asset("assests/$theme/images/b2.jpg") }}" alt="shoe">
				<div class="style-grid-2-text">
					<h3>Air force</h3>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- Revisar div, esta solo => </div> -->
	<!-- //grids_bottom-->

	<!-- /girds_bottom2-->
	<div class="grids_sec_2">
		<div class="style-grids_main">
			<div class="col-md-6 grids_sec_2_left">
				<div class="grid_sec_info">
					<div class="style-grid-2-text_info">
						<h3>Sneakers</h3>
						<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
							tempora incidunt ut labore .</p>
						<div class="shop-button">
							<a href="shop.html">Shop Now</a>
						</div>
					</div>
				</div>
				<div class="style-image-2">
					<img src="{{ asset("assests/$theme/images/b4.jpg") }}" alt="shoe">
					<div class="style-grid-2-text">
						<h3>Air force</h3>
					</div>
				</div>
			</div>
			<div class="col-md-6 grids_sec_2_left">

				<div class="style-image-2">
					<img src="{{ asset("assests/$theme/images/b3.jpg") }}" alt="shoe">
					<div class="style-grid-2-text">
						<h3>Air force</h3>
					</div>
				</div>
				<div class="grid_sec_info last">
					<div class="style-grid-2-text_info">
						<h3>Sneakers</h3>
						<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
							tempora incidunt ut labore .</p>
						<div class="shop-button two">
							<a href="shop.html">Shop Now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //grids_bottom2-->

	@include('layouts.partials.footer')
	
	@include('layouts.partials.js')
</body>
</html>
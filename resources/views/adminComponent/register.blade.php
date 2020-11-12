<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro de Ventas Leyker</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="img/icons/logo-01.jpeg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	@if (!empty($message))
	<div class="modal fade in" id="myModal" role="dialog" style="display: block; padding-right: 17px; ">
		<div class="modal-dialog" style="position: relative ; margin: 10% auto;padding: 20px;">
			<!-- Modal content-->
			<div class="modal-content" >
				<div class="modal-header"><button class="close" data-dismiss="modal" type="button"></button>
					<h4 class="modal-title">NOVEDADES</h4>
				</div>

				<div class="modal-body">{{ $message }}
				</div>

				<div class="modal-footer"><button class="btn btn-default" data-dismiss="modal"
						type="button">Close</button>
				</div>
			</div>
		</div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript">
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript">
		</script>
		<script type="text/javascript">
			$(function() {
				$("#myModal").modal();
			});
		</script>
	@endif

	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					{{-- <div class="left-top-bar">
						Free shipping for standard order over $100
					</div> --}}

					{{-- <div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							EN
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							USD
						</a>
					</div> --}}
				</div>
			</div>

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="{{url('/home')}}" class="logo">
						<img src="img/icons/logo-01.jpeg" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">							
							<li >
								<a href="{{url('/home')}}">Inicio</a>
							</li>

							<li class="active-menu">
								<a href="{{url('/registerV')}}">Registro de Ventas</a>
							</li>

							<li >
								<a href="{{url('/about')}}">Acerca de:</a>
							</li>

							<li>
								<a href="contact">Contacto</a>
							</li>
							
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="menu-desktop">
							<ul class="main-menu">
							<li class="active-menu">
								<a href="{{url('/home')}}">{{ Auth::user()->name }}</a>
								<ul class="sub-menu">
									<li>
										<a href="{{ route('logout') }}" onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
											{{ __('Cerrar Sesión') }}
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</li>
									
								</ul>
							</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
			<a href="{{url('/home')}}"><img src="img/icons/logo-01.jpeg" alt="IMG-LOGO"></a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			

			<ul class="main-menu-m">
				<li>
					<a href="{{url('/home')}}">Inicio</a>
					
				</li>

				<li>
					<a href="{{url('/register')}}">Registro de Ventas</a>
				</li>

				<li>
					<a href="{{url('/about')}}">Acerca de:</a>
				</li>

				<li>
					<a href="{{url('/contact')}}">Contacto</a>
				</li>
				<li>
					<a href="{{ route('logout') }}" onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						{{ __('Cerrar Sesión') }}
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('img/about-02.webp');">
		<h2 class="ltext-105 cl0 txt-center">
			Registro de Ventas
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Registro de Ventas</span>
							</h2>
							{{-- buscar registros --}}
                            <form action="../public/registervent" method="post" class="form-horizontal">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                {{ method_field('POST') }}
								{{-- Años filter --}}
                                <div class="form-group">
                                    <label class="control-label col-sm-20">Año:</label>
                                    <div class="col-sm-10">
                                        <input type="number" value="2020" min="2020" max="2024" class="form-control"
                                            name="year" placeholder="Ingrese el año que desea mostrar"
                                            pattern="[0-9]{4,4}">
                                    </div>
								</div>
								{{-- Calendario filter --}}
                                <div class="form-group">
                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Mes:</label>
                                    <select class="custom-select my-2 mr-sm-2" name="month" id="month" required>
                                        <!-- Show all month of products -->
                                        <option value="01">ENERO</option>
                                        <option value="02">FEBRERO</option>
                                        <option value="03">MARZO</option>
                                        <option value="04">ABRIL</option>
                                        <option value="05">MAYO</option>
                                        <option value="06">JUNIO</option>
                                        <option value="07">JULIO</option>
                                        <option value="08" selected>AGOSTO</option>
                                        <option value="09">SEPTIEMPRE</option>
                                        <option value="10">OCTUBRE</option>
                                        <option value="11">NOVIEMBRE</option>
                                        <option value="12">DICIEMBRE</option>
                                        <!-- end show month -->
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary"> Buscar</button>
                                    </div>
                                </div>
							</form>
							{{-- table register --}}
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Precio S/</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Total S/</th>
                                            <th scope="col">Fecha</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allregister as $allregisters)
                                            <tr>
                                                <th scope="row">{{ $allregisters->id }}</td>
                                                <td>{{ $allregisters->name }}</td>
                                                <td>S/ {{ $allregisters->price }}</td>
                                                <td>{{ $allregisters->count }}</td>
                                                <td>S/{{ $allregisters->total }}</td>
                                                <td>{{ $allregisters->day }}-{{ $allregisters->month }}-{{ $allregisters->year }}
                                                </td>
                                            </tr>
                                        @endforeach

                                    <tbody>

                                </table>
							</div>
							<div>
								<p>
									Total de Ventas ----------------------------------------------------------------------------------------------> S/ <?= $totalventa ?>
								</p>
							</div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</section>	
	
		

	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Ayuda
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Soporte: 931-689-181
							</a>
						</li>

						<li class="p-b-10">
							<a href="https://github.com/BabyDriver2018/StoreOnline" target="_blank" class="stext-107 cl7 hov-cl1 trans-04">
								Documentacion
							</a>
						</li>

						
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						PONERSE EN CONTACTO
					</h4>

					<p class="stext-107 cl7 size-201">
						¿Alguna pregunta? Háganos saber en la tienda en Huanuco, Tingo Maria, Buenos Aires, Primera Entrada o llámenos al (+51) 932-488-336
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fab fa-facebook-square"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fab fa-whatsapp-square"></i>
						</a>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Herramientas Usadas
					</h4>

					<p class="stext-107 cl7 size-201">
						Las herramientas usada han sido gratuitos, listaremos de manera general las herramientas usadas:
					</p>
					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Laravel (la ultima version)
							</a>
						</li>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Visual Studio Code
							</a>
						</li>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								XAMPP (v3.2.4)
							</a>
						</li>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Mozilla Firefox
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Git Hub 
							</a>
						</li>
						
					</ul>
					
				</div>

				
			</div>

			<div class="p-t-40">
				

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
</body>
</html>
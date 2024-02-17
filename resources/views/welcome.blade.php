<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LIBROS DE CODIGO</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
          <!-- Favicon-->
          <link rel="icon" type="image/x-icon" href="assets/img/banner-bg.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/nuevo.css')}}"> <!--login-->
        
        <!-- Styles -->
        <style> </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                      <!--  <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>-->
                    @else
                        <!--<a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Inicio</a>-->

                        @if (Route::has('register'))
                         <!--  <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrar</a>-->
                        @endif
                    @endauth
                </div>
            @endif

            <!-- inicio de codigo para la primera vista -->
           

            <!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>CodeBook</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
          <!--  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/linearicons.css')}}"> -->
           <!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">--> 
          <!--  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">-->
           <!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">-->
           <!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/nice-select.css')}}"> -->
           <!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.min.css')}}"> -->
           <!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}"> -->
           <!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}"> -->


			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
			  <header id="header" id="home">
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active">                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Inicio</a>
</li>
				          <li>                           <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrar</a>
</li>				          <li>                           <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">register</a>

				         <li><a href="otros.html">prueba :)</a></li>
				          <!--<li><a href="dogs.html">Revistas</a></li>
				          <li><a href="volunteer.html">Lectores</a></li>
				          <li class="menu-has-children"><a href="">Blog</a>
				            <ul>
				              <li><a href="blog-home.html">Blog Home</a></li>
				              <li><a href="blog-single.html">Blog Single</a></li>
				            </ul>
				          </li>						          
				          <li><a href="contact.html">Contact</a></li>
				          <li class="menu-has-children"><a href="">Dropdown</a>
				            <ul>
				              <li><a href="elements.html">Elements</a></li>	
				              <li><a href="#">Item</a></li>
				              <li class="menu-has-children"><a href="">Level 2</a>
					            <ul>
					              <li><a href="#">Item 1</a></li>
					              <li><a href="#">Item 2</a></li>
					            </ul>
					          </li>	
				            </ul>
				          </li>				              
				        </ul>-->
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-8 col-md-12">
							<h1 class="text-uppercase">
								Leenos <br>
										
							</h1>
							<p class="text-white sub-head">
								Somos amantes de la lectura, creemos en la importancia de la cultura de la lectura
								por eso hemos creado un sitio escialisado en libros, donde lectores de todo el mundo
								puedan acceder a los miles de titulos en nuestras diferentes categorias en todo el mundo
							
							</p>
							<a href="#" class="primary-btn header-btn text-uppercase">Encuentra tu mejor inspiracion</a>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start image-carusel Area -->
			<!--<section class="image-carusel-area">
				<div class="container">
					<div class="row">
						<div class="active-image-carusel">
							<div class="single-image-carusel">
								<img class="img-fluid" src="img/c1.jpg" alt="">
							</div>
							<div class="single-image-carusel">
								<img class="img-fluid" src="img/c2.jpg" alt="">
							</div>
							<div class="single-image-carusel">
								<img class="img-fluid" src="img/c3.jpg" alt="">
							</div>
							<div class="single-image-carusel">
								<img class="img-fluid" src="img/c4.jpg" alt="">
							</div>	
							<div class="single-image-carusel">
								<img class="img-fluid" src="img/c5.jpg" alt="">
							</div>
							<div class="single-image-carusel">
								<img class="img-fluid" src="img/c6.jpg" alt="">
							</div>
							<div class="single-image-carusel">
								<img class="img-fluid" src="img/c7.jpg" alt="">
							</div>
							<div class="single-image-carusel">
								<img class="img-fluid" src="img/c8.jpg" alt="">
							</div>														
						</div>
					</div>
				</div>	
			</section>-->
			<!-- End image-carusel Area -->
			
<!-- inicio de reemplazar la seccion del carrusel -->
<section class="cat-list-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-list">
							  <img src="img/c1.jpg" alt="" class="img-fluid">
							  <div class="overlay">
							    <div class="text">Alexander cane</div>
								<a href="https://books.google.com.mx/books/about/Programaci%C3%B3n_para_Principiantes.html?id=PZPAywEACAAJ&redir_esc=y" class="primary-btn text-uppercase">Obten mas detalles</a>

							  </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-list">
							  <img src="img/c2.jpg" alt="" class="img-fluid">
							  <div class="overlay">
							    <div class="text">Humberto Guerrero Salas</div>
								<a href="\img\Programación-lineal-2ed.pdf" class="primary-btn text-uppercase">Obten mas detalles</a>

							  </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-list">
							  <img src="img/c9.png" alt="" class="img-fluid">
							  <div class="overlay">
							    <div class="text">Enrique Vicente Bonet Esteban</div>
								<a href="\img\02. Lenguaje C autor Enrique Vicente Bonet Esteban.pdf" class="primary-btn text-uppercase">Obten mas detalles</a>

							  </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-list">
							  <img src="\img\fundamentosjava.png" alt="" class="img-fluid">
							  <div class="overlay">
							    <div class="text">Jorge Mártinez Ladrón Guevara</div>
								<a href="\img\08. Fundamentos de programación en Java autor Jorge Martinez Ladrón de Guevara.pdf" class="primary-btn text-uppercase">Obten mas detalles</a>

							  </div>
							</div>
						</div>	
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-list">
							  <img src="\img\intropropython.jpg" alt="" class="img-fluid">
							  <div class="overlay">
							    <div class="text">Introducción a la programación con Python</div>
								<a href="\img\24. Introducción a la Programación con Python autor Andrés Marzal e Isabel Gracia.pdf" class="primary-btn text-uppercase">Obten mas detalles</a>

							  </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-list">
							  <img src="img/manualjs.jpg" alt="" class="img-fluid">
							  <div class="overlay">img/manualjs.jpg
							    <div class="text">Manual de JavaScript</div>
								<a href="\img\11. Manual de JavaScript autor Miguel Ángel Álvarez y Manu Gutierrez.pdf" class="primary-btn text-uppercase">Obten mas detalles</a>

							  </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-list">
							  <img src="img/pphp.jpg" alt="" class="img-fluid">
							  <div class="overlay">
							    <div class="text" style="color: black;"> Programador PHP </div>
								<a href="\img\20. Programador PHP autor Eugenia Bahit.pdf" class="primary-btn text-uppercase">Obten mas detalles</a>

							  </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-list">
							  <img src="img/pyparatodos.jpg" alt="" class="img-fluid">
							  <div class="overlay">
							    <div class="text">James L. Antonkos </div>
									<a href="\img\23. Python para todos autor Charles R. Severance.pdf" class="primary-btn text-uppercase">Obten mas detalles</a>

								</div>
							  </div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- Fin de reemplazar la seccion del carrusel -->
			<!-- Start callto-top Area -->
			<section class="callto-top-area section-gap">
				<div class="container">
					<div class="row justify-content-between callto-top-wrap pt-40 pb-40">
						<div class="col-lg-8 callto-top-left">
							<h1>Por favor selecciona tu libro favorito</h1>
						</div>
						<div class="col-lg-4 callto-top-right">
							<a href="#" class="primary-btn">¿Quieres saber más?</a>
						</div>							
					</div>
				</div>	
			</section>
			<!-- End callto-top Area -->
			

			<!-- Start home-about Area -->
			<section class="home-about-area">
				<div class="container-fluid">
					<div class="row align-items-center">	
						<div class="col-lg-6 home-about-left no-padding">
							<img src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 home-about-right no-padding">
							<h1>
								Tenemos muchos autores
								como: Large Network
							</h1>
							<h5>Tenemos de todo tipo de libros de programación para ti,
								con lenguajes como java, python, javascript, c y c++, Dark..
							</h5>
							<p>
								Podras comprar todos los libros que desees a un muy buen costo
							</p>
							<a href="#" class="primary-btn text-uppercase">Obten mas detalles</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
			

			<!-- Start video Area
			<section class="video-area section-gap">
				<div class="container">
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-8">
							<div class="about-video-right justify-content-center align-items-center d-flex relative">
								<div class="overlay overlay-bg"></div>
								<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="img/play-btn.png" alt=""></a>
							</div>
							<div class="description">
								<h4>Watch this video how they live here</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
								</p>								
							</div>
						</div>
					</div>
				</div>	
			</section>
			 End video Area -->
			

			<!-- Start process Area -->
			<section class="process-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Conoce más</h1>
								<p>Notas importantes.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6">
						<img src="https://cdn-icons-png.flaticon.com/512/10900/10900110.png" alt="" class="img-fluid" width="80" height="150">
							<div class="single-process">
								<!--<span class="lnr lnr-thumbs-up"></span>-->
								<a href="">
									<h4>
										Selecciona un libro 
									</h4>
								</a>
								<p>
									Es importante que sepas el autor o el tipo de informacion que buscas
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
						<img src="https://cdn-icons-png.flaticon.com/512/2422/2422012.png" alt="" class="img-fluid" width="80" height="150">
							<div class="single-process">
								<!--<span class="lnr lnr-user"></span>-->
								<a href="#">
									<h4>
										Conoce al autor
									</h4>
								</a>
								<p>
									Es importante que sepas el autor o el tipo de informacion que buscas
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
						<img src="https://cdn-icons-png.flaticon.com/512/2436/2436636.png" alt="" class="img-fluid" width="80" height="150">
							<div class="single-process">
								<!--<span class="lnr lnr-license"></span>-->
								<a href="#">
									<h4>
										Leélo
									</h4>
								</a>
								<p>
									Es importante que sepas el autor o el tipo de informacion que buscas
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
						<img src="https://cdn-icons-png.flaticon.com/512/5606/5606075.png" alt="" class="img-fluid" width="80" height="150">
							<div class="single-process">
								<!--<span class="lnr lnr-magic-wand"></span>-->
								<a href="#">
									<h4>
										Adquierelo si fue de tu agrado
									</h4>
								</a>
								<p>
									Es importante que sepas el autor o el tipo de informacion que buscas
								</p>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End process Area -->
			

			<!-- Start testomial Area -->
			<section class="testomial-area section-gap" id="testimonail">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Reseñas de personas</h1>
								<p>Estos son algunos comentarios de las personas que han leído el libro
									y que quizas te pueda funcionar
								</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-testimonial-carusel">
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t1.png" alt="">
								<p class="desc">
									Es un gran libro, me resolvio muchas dudas que tenia haccerca de python, sobre todo con sus frameworks como es laravel y Django
								</p>
								<h4>Mynu Emily</h4>
								<p>
									Guía de Python vol.1
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t2.png" alt="">
								<p class="desc">
									Es un gran libro, me resolvio muchas dudas que tenia haccerca de python, sobre todo con sus frameworks como es laravel y Django
								</p>
								<h4>Dyna Castillo</h4>
								<p>
									Java para Principiantes
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t3.png" alt="">
								<p class="desc">
									Es un gran libro, me resolvio muchas dudas que tenia haccerca de python, sobre todo con sus frameworks como es laravel y Django
								</p>
								<h4>Edgar García</h4>
								<p>
									JavaScript y sus ventajas
								</p>
							</div>																					
						</div>
					</div>
				</div>	
			</section>
			<!-- End testomial Area -->						

			<!-- Start calltoaction Area -->
			<section class="calltoaction-area section-gap relative">
				<div class="container">
					<div class="overlay overlay-bg"></div>						
					<div class="row align-items-center justify-content-center">
						<h1 class="text-white">Como podemos ayudartre?</h1>
						<p class="text-white">
							Tenemos de todo tipo de libros de programación para ti,
								con lenguajes como java, python, javascript, c y c++, Dark..
						</p>
						<div class="buttons d-flex flex-row">
							<!--<a href="#" class="primary-btn text-uppercase">PDF de los detalles</a>-->
							
							<a href="{{ route('register') }}" class="primary-btn text-uppercas eml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrate ahora</a>

						</div>
					</div>
				</div>	
			</section>
			<!-- End calltoaction Area -->
			
			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="container">
					<div class="row pt-120 pb-80">
						<div class="col-lg-4 col-md-6">
							<div class="single-footer-widget">
								<h6>Acerca de Nosotros</h6>
								<p>
									Somos amantes de la lectura, creemos en la importancia de la cultura de la lectura
								por eso hemos creado un sitio escialisado en libros, donde lectores de todo el mundo
								puedan acceder a los miles de titulos en nuestras diferentes categorias en todo el mundo
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-footer-widget">
								<h6>Links Utiles</h6>
								<div class="row">
									<ul class="col footer-nav">
										<li><a href="#">Inicio</a></li>
										<li><a href="#">Atención</a></li>
										<li><a href="#">Acerca de</a></li>
										<li><a href="#">Casos de estudio</a></li>
									</ul>
									<ul class="col footer-nav">
										<li><a href="#">Precios</a></li>
										<li><a href="#">Equipo</a></li>
										<li><a href="#">Blog</a></li>
									</ul>									
								</div>
							</div>
						</div>						
						<div class="col-lg-4  col-md-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Contáctanos</h6>
								<ul class="list-contact">
									<li class="flex-row d-flex">
										<div class="icon">
											<span class="lnr lnr-home"></span>
										</div>
										<div class="detail">
											<h4>Tzompantepec, TecNM</h4>
											<p>
												4343 Avenida Principal
											</p>
										</div>	
									</li>
									<li class="flex-row d-flex">
										<div class="icon">
											<span class="lnr lnr-phone-handset"></span>
										</div>
										<div class="detail">
											<h4>(+52) 246 12 34 567</h4>
											<p>
												Lun. a Vier. 9am a 6 pm
											</p>
										</div>	
									</li>
									<li class="flex-row d-flex">
										<div class="icon">
											<span class="lnr lnr-envelope"></span>
										</div>
										<div class="detail">
											<h4>code_book@apizaco.tecnm.mx</h4>
											<p>
												Mandanos tus dudas en cualquier momento!
											</p>
										</div>	
									</li>																		
								</ul>
							</div>
						</div>						
					</div>
				</div>
				<div class="copyright-text">
					<div class="container">
						<div class="row footer-bottom d-flex justify-content-between">
							<p class="col-lg-8 col-sm-6 footer-text m-0 text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Esta pagina es con fines educativos <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Codebook</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
							<div class="col-lg-4 col-sm-6 footer-social">
								<a href="https://www.facebook.com/"> <iconify-icon icon="logos:facebook"></iconify-icon></a>

								<a href="#"><iconify-icon icon="skill-icons:instagram"></iconify-icon></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
						</div>						
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	
			<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>



      
  
            <!-- fin del codigo de la primera vista -->
            
                  
               
</html>

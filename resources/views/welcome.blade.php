<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>	CUEVANA LITTLE</title>

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

				         <li><a href="otros.html">DESCARGAR</a></li>
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
								CUEVANA LITTLE <br>		
							</h1>
							<p class="text-white sub-head">
								Lamejor pagina para ver peliculas                                                           
								- Es gratis                                                                        
								- Sin suscripciones                                                                          
							
							</p>
							<a href="#" class="primary-btn header-btn text-uppercase">"BY CUEVANA"</a>
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
							  <img src="https://m.media-amazon.com/images/I/A1JVqNMI7UL._AC_UF894,1000_QL80_.jpg" alt="" class="img-fluid">
							  <div class="overlay">
							    <div class="text">Interstellar</div>
								<a href="https://youtu.be/SNq3vl8Ny-E" class="primary-btn text-uppercase">Obten mas detalles</a>

							  </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-list">
							  <img src="https://pics.filmaffinity.com/Uncharted-417211360-large.jpg " alt="" class="img-fluid">
							  <div class="overlay">
							    <div class="text">Uncharted</div>
								<a href="https://youtu.be/hgObTVMbEiU" class="primary-btn text-uppercase">Obten mas detalles</a>

							  </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-list">
							  <img src="https://pics.filmaffinity.com/Ferrari-253622060-large.jpg" alt="" class="img-fluid">
							  <div class="overlay">
							    <div class="text">Ferrari</div>
								<a href="https://youtu.be/LxBvpoL5vAE" class="primary-btn text-uppercase">Obten mas detalles</a>

							  </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-list">
							  <img src="https://img5.allocine.fr/acmedia/medias/nmedia/18/99/11/15/20609639.jpg" alt="" class="img-fluid">
							  <div class="overlay">
							    <div class="text">Rush</div>
								<a href="https://youtu.be/2fKqkyeYF6c" class="primary-btn text-uppercase">Obten mas detalles</a>

							  </div>
							</div>
						</div>	
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-list">
							  <img src="https://www.sonypictures.com.mx/sites/mexico/files/2024-01/Key-Art_1400x2100_Napoleon_Mx.jpg" alt="" class="img-fluid">
							  <div class="overlay">
							    <div class="text">Napoleon</div>
								<a href="https://youtu.be/GaIsWJFQshc">Obten mas detalles</a>

							  </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-list">
							  <img src="https://jardimdasamericas.com.br/uploads/2024/01/capa-filme-wonka-46eb8-large.jpg" alt="" class="img-fluid">
							  <div class="overlay">
							    <div class="text">Wonka</div>
								<a href="https://youtu.be/u9K67iB4Fsw" class="primary-btn text-uppercase">Obten mas detalles</a>

							  </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-list">
							  <img src="https://m.media-amazon.com/images/M/MV5BMzI0NmVkMjEtYmY4MS00ZDMxLTlkZmEtMzU4MDQxYTMzMjU2XkEyXkFqcGdeQXVyMzQ0MzA0NTM@._V1_FMjpg_UX1000_.jpg" alt="" class="img-fluid">
							  <div class="overlay">
							    <div class="text">Spiderman</div>
								<a href="https://youtu.be/kgZyjL0BsTM">Obten mas detalles</a>

							  </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-list">
							  <img src="https://m.media-amazon.com/images/I/615ot6U8mgL._AC_UF894,1000_QL80_.jpg" alt="" class="img-fluid">
							  <div class="overlay">
							    <div class="text">Drive</div>
									<a href="https://youtu.be/oUM5Vt1vPrE" class="primary-btn text-uppercase">Obten mas detalles</a>

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
							<h1>Selecciona ti pelicula favorita</h1>
						</div>
						<div class="col-lg-4 callto-top-right">
							<a href="#" class="primary-btn">¿Mas peliculas?</a>
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
								Amplia varidad de peliculas
							</h1>
							<h5>Tenemos de todo tipo de peliculas, de accion, drama, comedia, terror...
							</h5>
							<p>
								Puedes dercargarlas
							</p>
							<a href="#" class="primary-btn text-uppercase">Obten mas detalles</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
			

			
			
			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="copyright-text">
					<div class="container">
						<div class="row footer-bottom d-flex justify-content-between">
							<p class="col-lg-8 col-sm-6 footer-text m-0 text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Esta pagina es con fines educativos <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Cuevana</a>
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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Takeva</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!-- Vendor CSS Files -->
  <link href="{{asset('plugins//bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('plugins//icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('plugins//boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('plugins//venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('plugins//owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('plugins//aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset ('css/style.css')}}" rel="stylesheet">
  <link href="{{asset ('css/estilos.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v1.4.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script src=" https://unpkg.com/vue-bootstrap4-table@1.1.10/dist/vue-bootstrap4-table.min.js " crossorigin = " anonymous " > </script>
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
  <!-- ======= Header ======= -->
  <header id="header">

    <div class="d-flex flex-column">
      <div class="profile">
        <img src="{{asset ('img/logo.png')}}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a >Takeva</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul class="menu">
          <li><a href="/inicio"><i class="bx bx-home"></i> Inicio</a></li>
          <li><a href="#"><i class="icofont-address-book"></i><span>Parámetros</span> <i class="icofont-simple-down iconoSubMenu"></i></a>
            <ul>
              <li><a href="/registrarTercero"><i class="icofont-users-alt-4"></i><span>Registrar tercero</span></a></li>
              <li><a href="/registrarUsuarios"><i class="icofont-user-alt-4"></i><span>Registrar Usuario</span></a></li>
              <li><a href="/registrarVehiculo"><i class="icofont-bus"></i><span>Registrar vehículo</span></a></li>
              <li><a href="/registrarRutas"><i class="icofont-location-pin"></i><span>Registrar ruta</span></a></li>
              <li><a href="/crearHorario"><i class="icofont-calendar"></i><span>Registrar horario</span></a></li>

            </ul>
          </li>
          <li><a href="/estadisticas"><i class="icofont-dashboard-web"></i>Reporte de Calificación</a></li>
        </ul>
      </nav>


      <!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header>

  <!-- End Header -->

  <!-- Main Content -->
  <div class="contenedor">
    <div id="content">
      @yield('content')
    </div>
  </div>


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
       {{-- cerrar sesion --}}
       <button type="button" class="btn cerrar">Cerrar Sesión</button>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script> -->
  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('plugins/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('plugins/php-email-form/validate.js')}}"></script>
  <script src="{{asset('plugins/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('plugins/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('plugins/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('plugins/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('plugins/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('plugins/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('plugins/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset ('js/main.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script  src="https://unpkg.com/vue-bootstrap4-table@1.1.10/dist/vue-bootstrap4-table.min.js"  crossorigin="anonymous"></script>
  <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
  @yield('js')
  @include('sweet::alert')
</body>
</html>

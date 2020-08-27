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
</head>

<body>
<div style="float:left; padding: 30px 50px;">
    <img src="/img/LogoPrincipal.png">
</div>
<div class="container">
    <div>
        <br>
        <div style="float:right; padding: 70px 10px;">
            <div class="card  formInicio" style="width:450px">
            <br>
            <b>
                <div class="card-header tit" >{{ __('Iniciar Sesión') }}</div>                <b>
                <div class="card-body">
                    <form method="POST"  action="{{ route('login') }}" >
                        @csrf
                        <div class="form-group row" style="justify-content:center;">
                            <div style="position:relative">
                                <i class="fas fa-envelope" style="color:#aaa; padding: 8px 8px; position:absolute; left:0%; top:8%"></i>
                                <input style="width:400px; padding: 15px 30px"  id="email" type="email" placeholder="Correo" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="justify-content:center">
                            <div style="position:relative">
                                <i class="fas fa-lock" style="color:#aaa; padding: 9px 9px; position:absolute; left:0%; top:8%"></i>
                                <input style="width:400px; padding: 15px 30px" placeholder="Contraseña" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group row" >
                            <div>
                                <br>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link  " href="{{ route('password.request') }}">
                                            {{ __('Olvide mi contraseña') }}
                                        </a>
                                    @endif

                            </div>
                        </div>

                            <br>

                        <div>
                            <b><button type="submit" class="btn botonAgregar "  ><b>
                                {{ __('Ingresar') }}
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor JS Files -->
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
@yield('js')
</body>
</html>

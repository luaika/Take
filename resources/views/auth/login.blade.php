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
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <img src="/img/LogoPrincipal.png">
        </div>
        <div class="col">
            <br><br><br><br>

            <div class="card">
                <div class="card-header"><b>{{ __('Iniciar Sesión') }}</b></div>

                <div class="card-header">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn botonAgregar">
                                    {{ __('Ingresar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvide mi contraseña') }}
                                    </a>
                                @endif
                            </div>
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

</body>
</html>

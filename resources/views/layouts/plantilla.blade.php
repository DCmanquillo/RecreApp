<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.css')}}">
    <link rel="icon" href="img/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>RecreAdultos</title>
</head>

<body>


    <link href="{{ asset('css/piantilla.css') }}" rel="stylesheet">
    <i class="fa-solid fa-house"></i>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/logo1.png" class="img-fluid" width="230px" height="180px"
                    alt=""></a>
            <!-- <a class="navbar-brand" href="#">RecreAdultos</a> -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <li><a target="_blank" href="#"><i style="color: #1fa1a2; font-size: 30px" class="icon-home"
                                title="INICIO"></i></a> </li>
                    </li>

               <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" style="color:#0B1054;" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 NUESTRO PROPOSITO
                </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

              <li><a class="dropdown-item" style="color:#0B1054" href="{{route('mision')}}">QUIÉNES SOMOS</a></li>

            </ul>
          </li>

                        <li class="nav-item d-flex">
                            <a class="nav-link align-self-center active me-3" style="color:#0B1054;" aria-current="page"
                            href="{{ route('actividad') }}">ACTIVIDADES</a>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" style="color:#0B1054;" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PERSONAS MAYORES
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <li><a class="dropdown-item" style="color:#0B1054;" href="{{route('quedate')}}">ME QUEDO EN CASA</a></li>
                                  <li><a class="dropdown-item" style="color:#0B1054;" href="{{route('noticias')}}">NOTICIAS</a></li>
                                  <li><a class="dropdown-item" style="color:#0B1054;" href="{{route('cifras')}}">CIFRAS</a></li>
                                  <li><a class="dropdown-item" style="color:#0B1054;" href="{{route('documentos')}}">DOCUMENTOS</a></li>
                                </ul>
                              </li>

                            <li class="nav-item d-flex">
                                <a class="nav-link align-self-center active me-3" style="color:#0B1054;" aria-current="page"
                                    href="{{ route('contactos') }}">CONTACTANOS</a>
                            </li>

                            @if (Route::has('login'))
                                <div class="justify-content-end">
                                    @auth
                                        @can('admin.home')
                                          <a href="{{ route('admin.home') }}" class="btn btn-info btn-block"class="text-end">TABLERO
                                          </a>
                                        @endcan
                                    @else
                                    </div>

                                    <div class="text-end">
                                        <a href="{{ route('login') }}" class="btn btn-info btn-block "
                                            style="background-color: #0B1054; color: aliceblue;">INICIAR SESIÓN</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="btn btn-info btn-block"
                                                style="background-color: #0B1054; color: aliceblue;">REGISTRARSE</a>
                                        @endif
                                    </div>
                                @endauth
            </div>
            @endif
            </ul>
        </div>
        </div>
    </nav>
    <br>
    </div>

    <main>
        <div class="container">
            @yield('contenido-principal')
        </div>
    </main>

    <footer class="bg-primary text-dark">
        <div class="container">
            <nav class="row justify-content-center">
                <a href="#" class="col-12 col-md-3 text-reset text-uppercase d-flex
            align-items-center justify-content-center mb-3 mb-md-0">
                    <img src="img/logo1.png" alt="logo weston" class="img-logo mr-2">
                </a>
                <ul class="col-5 col-md-3 list-unstyled">
                    <li class="font-weight-bold text-uppercase fw-bold">
                        <h5>Instituciones</h5>
                    </li>
                    <li><a target="_blank" href="https://www.cauca.gov.co/Paginas/Default.aspx"
                            class="text-reset text-decoration-none">Gobernacion Del Cauca</a></li>
                    <li><a target="_blank" href="https://www.indeportescauca.gov.co/"
                            class="text-reset text-decoration-none">Indeportes Cauca</a></li>
                    <li><a target="_blank" href="http://www.popayan.gov.co/"
                            class="text-reset text-decoration-none">Alcaldia De Popayán</a></li>



                </ul>
                <ul class="col-5 col-md-3 list-unstyled">
                    <li class="font-weight-bold text-uppercase fw-bold ">
                        <h5>Hogares Geríatricos</h5>
                    </li>
                    <li><a target="_blank" href="https://acaricampestre.org/"
                            class="text-reset text-decoration-none">Casa Campestre</a></li>
                    <li><a target="_blank"
                            href="https://www.saldarriagaconcha.org/indice-personas-mayores/?gclid=CjwKCAjwmv-DBhAMEiwA7xYrd0nxedbX6tACrwa6mkWztDOsxUFrCj0bO3cvQhL7kD3Rpt55arzUthoCgOQQAvD_BwE "
                            class="text-reset text-decoration-none">Fundacion Saldarriaga Concha</a></li>
                    <li><a target="_blank" href="https://www.ancianatosanvicentepopayan.com/"
                            class="text-reset text-decoration-none">Fundacion Hogar San Vicente Paul</a></li>


                </ul>
                <ul class="col-4 col-md-2 list-unstyled">
                    <li class="font-weight-bold text-uppercase">
                        <h5>Redes Sociales</h5><br>
                    </li>
                    <li class="d-flex justify-content-between">
                        <a href="https://www.facebook.com/" class="text-reset">
                            <i class="fab fa-facebook-square" style="color:#0B1054; font-size: 30px"></i></a>

                        <a target="_blank" href="https://www.instagram.com/" class="text-reset">
                            <i class="fab fa-instagram" style="color:#0B1054; font-size: 30px"></i></a>

                        <a target="_blank"
                            href="https://accounts.google.com/signin/v2/identifier?passive=1209600&continue=https%3A%2F%2Faccounts.google.com%2Fb%2F0%2FAddMailService&followup=https%3A%2F%2Faccounts.google.com%2Fb%2F0%2FAddMailService&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                            class="text-reset">
                            <i class="fas fa-envelope-square" style="color:#0B1054; font-size: 30px"></i></a>

                        <a target="_blank" href="https://www.youtube.com/" class="text-reset">
                            <i class="fab fa-youtube-square" style="color:#0B1054; font-size: 30px"></i></a>


                    </li>
                </ul>
            </nav>

        </div>

    </footer>




</body>

</html>

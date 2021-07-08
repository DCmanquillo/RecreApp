@extends('layouts.plantilla')

@section('contenido-principal')

<link rel="stylesheet" href="{{ asset('/css/app.css') }}">

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/imagen19.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item">
        <img src="img/imagen21.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item">
        <img src="img/imagen20.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="d-flex">
    <div class="container align-self-center">
      <div class="row">
        <div class="col-lg-6">
          <div class="content mx-auto px-4 my-5">
            <img src="img/imag4.jpg" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-6 d-flex">
          <div class="aling-delf-center my-5 px-4">
            <h1 class="display-4 fw-bold mb-5">Crear tu cuenta es muy Facil</h1>
            <ul class="list-unstyled">
              <li class="d-flex mb-4">

                <p class="text-primary lead fw-bold step">1</p>
                <div class="ms-3">
                  <p class="lead fw-bold">Paso 1</p>
                  <p>Es Muy sencillo, solo Ingresa tu Correo</p>
                </div>
              </li>
              <li class="d-flex mb-4">

                <p class="text-primary lead fw-bold step">2</p>
                <div class="ms-3">
                  <p class="lead fw-bold">Paso 2</p>
                  <p>Crea una Contraseña</p>
                </div>
              </li>
              <li class="d-flex mb-4">

                <p class="text-primary lead fw-bold step">3</p>
                <div class="ms-3">
                  <p class="lead fw-bold">Paso 3</p>
                  <p>Disfruta Ayudando a tu Cuerpo a Mejorar tu Salud</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>

  </div>
  <div class="d-flex py-6">
    <div class="container align-self-center">
      <div class="call-to-action bg-light">
        <div class="row">
          <div class="col-lg-7 d-flex">
            <div class="aling-self-center p-5">
            <h2 class="display-4 fw-bold mb-4">Como Encontrar Actividades para ti?</h2>
            <p class="lead mb-4">La tercera edad es una Etapa <br>
               De la vida en
              la que debemos poner mucha atención tanto en la salud física,
              como en la salud mental y socio-afectiva. La actividad física
              puede actuar sobre las tres vertientes y ayudarnos a vivir una
              vida más sana, feliz y autónoma, siempre que la practiquemos
              con cuidado y atendiendo a
              nuestras características físicas y a nuestras
               necesidades particulares.</p>
            <a href="#" class="btn btn-primary">Conoce Mas</a>
          </div>

          </div>
          <div class="col-lg-5 d-flex">
            <div class="aling-self-center mx-auto p-5">
            <img src="img/imagen8.jpg" class="img-fluid">
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex py-5">
    <div class="container align-self-center">
      <h2 class="display-4 fw-bold ">Todos los Servicios</h2>
      <p class="lead mb-5 fw-bold">Conoce lo que te Ofrecemos</p>
      <div class="row gx-5 justify-content-center">
        <div class="col-lg-4 py-4">
          <a href="#" class="text-decoration-none">
            <img src="img/imagen13.jpg" class="img-fluid mb-4">
            <div class="d-flex mb-4">
              <h2 class="flex-grow-1 text-dark fw-bold text-center">Actividad 1</h2>

            </div>
            <p class="lead text-dark fw-bold mb-4 text-center">Lo que debes saber sobre</p>



          </a>
        </div>
        <div class="col-lg-4 py-4">
          <a href="#" class="text-decoration-none">
            <img src="img/imagen1.jpg" class="img-fluid mb-4">
            <div class="d-flex mb-4">
              <h2 class="flex-grow-1 text-dark fw-bold text-center">Actividad 2</h2>

            </div>
            <p class="lead text-dark fw-bold mb-4 text-center">Lo que debes saber sobre</p>



          </a>
        </div>
        <div class="col-lg-4 py-4">
          <a href="#" class="text-decoration-none">
            <img src="img/imagen15.jpg" class="img-fluid mb-4">
            <div class="d-flex mb-4">
              <h2 class="flex-grow-1 text-dark fw-bold text-center">Actividad 3</h2>

            </div>
            <p class="lead text-dark fw-bold mb-4 text-center">Lo que debes saber sobre</p>


          </a>
        </div>

      </div>

    </div>
  </div>


@endsection

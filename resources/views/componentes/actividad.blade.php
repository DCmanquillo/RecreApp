@extends('layouts.plantilla')

@section('contenido-principal')



<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">




<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<Link href="{{asset('public/css/styles.css') }}" rel=stylesheed>
<link rel="stylesheet" href="img/css/fontello.css">
<title>actividades</title>



<h5 class="text-center"></h5>
<br>
<div class="buscador">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 col-lg-7 align-self-center mt-5 p-5">
        <h1 class="text-white font-weight-bold">¿QUE ACTIVIDADES ESTAS BUSCANDO?</h1>
        <P class="text-white lead"> Encuentra la actividad que mas te guste en todas las actividades ofrecidas </P>
             
        <form action="#">
            <div class="input-group ">
                <input name="search" type="text" class="form-control"  id= "search" placeholder="Buscar" aria-label="" aria-describedby="basic-addon1">
                <div class="input-group-append">
                    <button class="btn btn" style="background: cadetblue;" type="submit">Buscar</button>
                </div>
            </div>
        </form>
    </div>

    </div>

  </div>
  
   </div>
  
  
  <section>
  <div class="d-flex justify-content-left align-items-left">
      <div class="container mt-4">
          <div class="row">
              <div class="col-md-2">
                  <div class="list-group list-group-flush">
                      <h3>MENÚ DE ACTIVIDADES</h3>
                      <hr class="bg-light">
                      <button type="button"  class="list-group-item list-group-item-action " aria-current="true"><a href="#" class="text-decoration-none" style="color: black;" >menú</a></button>
                      <button type="button" class="list-group-item list-group-item-action " ><a href="#" class="text-decoration-none" style="color: black;" >cultura</a></button>
                      <button type="button" class="list-group-item list-group-item-action"><a href="#" class="text-decoration-none" style="color: black;" >recreacion y deporte</a></button>
                      <button type="button" class="list-group-item list-group-item-action"><a href="#" class="text-decoration-none" style="color: black;" >ambiente</a></button>
                      <button type="button" class="list-group-item list-group-item-action"><a href="#" class="text-decoration-none" style="color: black;" >formacion</a></button>
                      <button type="button" class="list-group-item list-group-item-action"><a href="#" class="text-decoration-none" style="color: black;" >turismo</a></button>
                  </div>
              </div>
              <div class="col-md-10 p-2">
                <div class="card-group">
                  <div  class="card p-2 ">
                   <a href="#"> <img src="img/baile.jpeg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title"><a href="#" class="text-decoration-none" style="color: black;" >Baile Deportivo</a></h5>
                      <p class="card-text">¿Sabías que el ejercicio regular puede ayudar a mejorar la salud general de todo su sistema cardiovascular
                        Reduce el riesgo de enfermedad cardíaca, accidente cerebrovascular y diabetes. Un corazón más saludable significa un riesgo reducido de enfermedad cardiovascular, apoplejía y diabetes.
                        
                      </p>
                      <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">Más información</button>
                      </div>
                    </div>
                  </div>
                  <div class="card p-2">
                  <a href="#">  <img src="img/casi.jpeg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title"><a href="#" class="text-decoration-none" style="color: black;">Correr</a></h5>
                      <p class="card-text">Mantiene el cuerpo en forma. Uno de los principales beneficios de correr es el aumento de la capacidad aeróbica; también el fortalecimiento de los músculos y la mejora en la circulación sanguínea general. Disminuye el riesgo de ciertas enfermedades.

                        
                      </p>
                      <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">Más información</button>
                      </div>
                    </div>
                  </div>
                  <div class="card p-2">
                   <a href="#"> <img src="img/imagen4.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title"><a href="#" class="text-decoration-none" style="color: black;">Yoga</a></h5>
                      <p class="card-text">El yoga puede mejorar el nivel general de su estado físico y mejorar su postura y su flexibilidad. También puede: Reducir su presión arterial y su frecuencia cardíaca. Ayudarle a relajarse.</p>
                      
                      <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">Más información</button>
                      </div>
                    </div>
                  </div>
                </div><div class="card-group">
                  <div class="card p-2">
                   <a href="#"> <img src="img/imagen7.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title"><a href="#" class="text-decoration-none" style="color: black;">paseos Ecologicos</a></h5>
                      <p class="card-text">El adulto mayor prefiere el ejercicio verde porque lo identifica como favorecedor de cohesión social, conexión con la naturaleza, y bienestar físico y mental.</p>
                      <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">Más información</button>
                      </div>
                    </div>
                  </div>
                  <div class="card p-2">
                  <a href="#">  <img src="img/imagen5.jpeg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                     <h5 class="card-title"><a href="#" class="text-decoration-none" style="color: black;">Ejercicios con P
                      esas</a></h5>
                      <p class="card-text">Son muchos los beneficios que una rutina de fuerza puede aportar al adulto mayor, porque son los mejores para pedirle a tus músculos un trabajo extra que contribuya a tu buena forma física general.</p>
                      <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">Más información</button>
                      </div>
                    </div>
                  </div>
                  <div class="card p-2">
                   <a href="#"> <img src="img/baile.jpeg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                     <h5 class="card-title"><a href="#" class="text-decoration-none" style="color: black;">Actividad</a></h5>
                      <p class="card-text">This card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      <div class="d-flex justify-content-center">
                      <button type="button" class="btn btn-primary">Más información</button>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>
</section>


    
</div>

<br> <br>
@endsection

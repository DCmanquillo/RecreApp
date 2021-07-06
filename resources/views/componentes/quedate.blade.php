@extends('layouts.plantilla')

@section('contenido-principal')
<link href="{{ asset('css/contac.css') }}" rel="stylesheet">

<section>
    <div class="d-flex justify-content-center align-items-center">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-2">
                    <div class="list-group list-group-flush">
                        <h3>ENLACES</h3>
                        <hr class="bg-light">
                        <button type="button"  class="list-group-item list-group-item-action " aria-current="true"><a href="#" class="text-decoration-none" style="color:#0B1054;" >Que hacemos</a></button>
                        <button type="button" class="list-group-item list-group-item-action " ><a href="#" class="text-decoration-none" style="color:#0B1054;" >Quienes somos</a></button>
                        <button type="button" class="list-group-item list-group-item-action"><a href="#" class="text-decoration-none" style="color:#0B1054;" >Vision</a></button>
                        <button type="button" class="list-group-item list-group-item-action"><a href="#" class="text-decoration-none" style="color:#0B1054;" >Mision</a></button>
                        <button type="button" class="list-group-item list-group-item-action"><a href="#" class="text-decoration-none" style="color: #0B1054;" >Nuestros Principios</a></button>
                       
                    </div>
                </div>
                <div class="col-md-10 p-2">
                  <div class="card-group">
                    <div  class="card p-2 ">
                     <a href="#"> <img src="img/manos.jpg" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                       
                        <p class="card-text">Lavarse las manos antes y despues de su uso</p>
                        
                      </div>
                    </div>
                    <div class="card p-2">
                    <a href="#">  <img src="img/tapabocas.jpg" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                       
                        <p class="card-text">Cambialo cuando este humedo y deteriorado</p>
                       
                      </div>
                    </div>
                    <div class="card p-2">
                     <a href="#"> <img src="img/desinfectarse.jpg" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                        
                        <p class="card-text">Desinfectate cada que toques algun objeto</p>
                        
                      </div>
                    </div>
                  </div><div class="card-group">
                    <div class="card p-2">
                     <a href="#"> <img src="img/manos.jpg" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                       
                        <p class="card-text">Lavarse las manos antes y despues de su uso</p>
                        
                      </div>
                    </div>
                    <div class="card p-2">
                    <a href="#">  <img src="img/tapabocas.jpg" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                       
                        <p class="card-text">Cambialo cuando este humedo y deteriorado</p>
                        
                      </div>
                    </div>
                    <div class="card p-2">
                     <a href="#"> <img src="img/desinfectarse.jpg" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                       
                        <p class="card-text">Desinfectate cada que toques algun objeto</p>
                       
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection

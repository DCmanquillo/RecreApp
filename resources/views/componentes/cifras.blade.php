@extends('layouts.plantilla')

@section('contenido-principal')
<section>
    <div class="d-flex justify-content-center align-items-center">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-2">
                    <div class="list-group list-group-flush">
                        <h3>ENLACES</h3>
                        <hr class="bg-light">
                        <button type="button"  class="list-group-item list-group-item-action " aria-current="true"><a href="#" class="text-decoration-none" style="color: black;" >Que hacemos</a></button>
                        <button type="button" class="list-group-item list-group-item-action " ><a href="#" class="text-decoration-none" style="color: black;" >Quienes somos</a></button>
                        <button type="button" class="list-group-item list-group-item-action"><a href="#" class="text-decoration-none" style="color: black;" >Vision</a></button>
                        <button type="button" class="list-group-item list-group-item-action"><a href="#" class="text-decoration-none" style="color: black;" >Mision</a></button>
                        <button type="button" class="list-group-item list-group-item-action"><a href="#" class="text-decoration-none" style="color: black;" >Nuestros Principios</a></button>
                       
                    </div>
                </div>
                <div class="col-md-10 p-2">
                  <div class="card-group">
                    <div  class="card p-2 ">
                     <a href="#"> <img src="img/otro.png" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                       
                        <p class="card-text">Herramienta para medir la conclusion social y productiva de las personas mayores</p>
                        
                      </div>
                    </div>
                    <div class="card p-2">
                    <a href="#">  <img src="img/vejes.jpeg" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                       
                        <p class="card-text">Las zonas urbanas mas desarrolladas tendra un procesode envejecimiento mas acelerado.</p>
                       
                      </div>
                    </div>
                    <div class="card p-2">
                     <a href="#"> <img src="img/sentados.jpg" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                        
                        <p class="card-text">El 11,46% de la poblacion de bogota es de 60 años</p>
                        
                      </div>
                    </div>
                  </div><div class="card-group">
                    <div class="card p-2">
                     <a href="#"> <img src="img/sentados.jpg" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                       
                        <p class="card-text">El 11,46% de la poblacion de bogota es de 60 años</p>
                        
                      </div>
                    </div>
                    <div class="card p-2">
                    <a href="#">  <img src="img/vejes.jpeg" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                       
                        <p class="card-text">Las zonas urbanas mas desarrolladas tendra un procesode envejecimiento mas acelerado.</p>
                        
                      </div>
                    </div>
                    <div class="card p-2">
                     <a href="#"> <img src="img/otro.png" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                       
                        <p class="card-text">Herramienta para medir la conclusion social y productiva de las personas mayores</p>
                       
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
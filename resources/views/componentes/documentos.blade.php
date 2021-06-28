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
                     <a href="#"> <img src="img/enve.jpg" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                       
                        <p class="card-text">El proceso de envejecimiento de la poblacion en colombia 1985-2050</p>
                        
                      </div>
                    </div>
                    <div class="card p-2">
                    <a href="#">  <img src="img/prote.jpg" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                       
                        <p class="card-text">Proteccion economica a la poblacion  mayor en colombia</p>
                       
                      </div>
                    </div>
                    <div class="card p-2">
                     <a href="#"> <img src="img/merca.jpg" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                        
                        <p class="card-text">El mercado laboral y las personas mayores</p>
                        
                      </div>
                    </div>
                  </div><div class="card-group">
                    <div class="card p-2">
                     <a href="#"> <img src="img/ahorro.jpg" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                       
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        
                      </div>
                    </div>
                    <div class="card p-2">
                    <a href="#">  <img src="img/merca.jpg" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                       
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        
                      </div>
                    </div>
                    <div class="card p-2">
                     <a href="#"> <img src="img/merca.jpg" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                       
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                       
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>

    
@endsection
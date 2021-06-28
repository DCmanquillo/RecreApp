@extends('layouts.plantilla')

@section('contenido-principal')
<section>

    <div class="container text-center text-md-left mt-5">
        <h2 class="h2 text-center display-4 " style="color: #0B1054; font-family: 'Bree Serif', serif;">NOTICIAS</h2>
        <hr class="bg-success  ">
    </div>


    <div class="d-flex justify-content-center align-items-center">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group list-group-flush">
                        <h3 class="" style="color: #0B1054;">ENLACES</h3>
                        <hr class="bg-light">
                        <button type="button" class="list-group-item list-group-item-action " aria-current="true">Salud</button>
                        <button type="button" class="list-group-item list-group-item-action">Cuidate en casa</button>
                        <button type="button" class="list-group-item list-group-item-action">Salud  y bienestar</button>
                        <button type="button" class="list-group-item list-group-item-action">Salud mental</button>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-6">
                            <div class="card" style="width: 24rem; ">
                                <img src="img/opciondos.jpg" class="card-img-top" alt="..." style="height: 300px;">
                                <div class="card-body">
                                    <h5 class="card-title">Quema de peaje villa Rica</h5>
                                    <p class="card-text">EL dia de hoy En la tarde de este jueves, el peaje de Villa Rica, ubicado en el norte del departamento del Cauca, fue incinerado por un grupo de encapuchados. Los hechos ocurrieron en la vía que conduce del municipio de Santander de Quilichao hacia Puerto Tejada y Jamundí.</p>
                                    <a href="https://www.semana.com/nacion/articulo/en-video-reportan-quema-del-peaje-de-villa-rica-en-el-norte-del-cauca/202137/" class="btn btn-primary stretched-link">Leer oublicacion</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card" style="width: 24rem;">
                                <img src="img/fotasa.jpg" class="card-img-top" alt="..." style="height: 300px;">
                                <div class="card-body">
                                    <h5 class="card-title">Paron nacional</h5>
                                    <p class="card-text">Mañana 28 de mayo se cumple un mes de protestas desde que inició el paro nacional. los ciudadanos han conseguido acciones importantes, primordialmente: el retiro de la reforma tributaria, la caída de la reforma a la salud y la dimisión de ministros en distintas áreas. </p>
                                    <a href="#" class="btn btn-primary stretched-link">Leer noticia</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-5">
                            <div class="card" style="width: 24rem; ">
                                <img src="img/opciondos.jpg" class="card-img-top" alt="..." style="height: 300px;">
                                <div class="card-body">
                                    <h5 class="card-title">Quema de peaje villa Rica</h5>
                                    <p class="card-text">EL dia de hoy En la tarde de este jueves, el peaje de Villa Rica, ubicado en el norte del departamento del Cauca, fue incinerado por un grupo de encapuchados. Los hechos ocurrieron en la vía que conduce del municipio de Santander de Quilichao hacia Puerto Tejada y Jamundí.</p>
                                    <a href="https://www.semana.com/nacion/articulo/en-video-reportan-quema-del-peaje-de-villa-rica-en-el-norte-del-cauca/202137/" class="btn btn-primary stretched-link">Leer oublicacion</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-5">
                            <div class="card" style="width: 24rem;">
                                <img src="img/fotasa.jpg" class="card-img-top" alt="..." style="height: 300px;">
                                <div class="card-body">
                                    <h5 class="card-title">Paron nacional</h5>
                                    <p class="card-text">Mañana 28 de mayo se cumple un mes de protestas desde que inició el paro nacional. los ciudadanos han conseguido acciones importantes, primordialmente: el retiro de la reforma tributaria, la caída de la reforma a la salud y la dimisión de ministros en distintas áreas. </p>
                                    <a href="#" class="btn btn-primary stretched-link">Leer noticia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
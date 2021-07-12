@extends('layouts.plantilla')

@section('contenido-principal')

<div class="container-fluid " style="background: #C6D5D5;">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb ">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"></a></li>
            <li class="breadcrumb-item active" aria-current="page"></li>
        </ol>
    </nav>
</div>

<section>
    <div class="d-flex justify-content-center align-items-center">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="list-group list-group-flush">
                        <h3 class="" style="color: #0B1054;">ENLACES</h3>
                        <hr class="bg-light">
                        <button type="button" class="list-group-item list-group-item-action " aria-current="true">Quienes somos</button>
                        <button type="button" class="list-group-item list-group-item-action">Nuestros principios</button>
                        <button type="button" class="list-group-item list-group-item-action">Que hacemos</button>
                        <button type="button" class="list-group-item list-group-item-action">Mision</button>
                        <button type="button" class="list-group-item list-group-item-action">vision</button>
                    </div>
                </div>
                <div class="col-md-8">
                    <h2 class="text-center" style="font-family: 'Questrial', sans-serif; color:#0B1054">QUIENES SOMOS</h2>
                    <P class="mt-5" style="font-family: 'Questrial', sans-serif; font-size:x-large;">Buscamos potenciar la participacion e integracion de los mayores
                        en la comunidad con ctividades socio-culturales, ocupacionales, artisticas
                        y recreativas para estimular el mantenimiento activo tanto a nivel fisico
                        como psicologico de las personas mayores, el crear nuevos espacios nuevos
                        y formas nuevas para la ocupacion del ocio y tiempo libre.
                    </P>
                
                    <div class="accordion accordion-flush mt-5" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <h4>NUESTROS PRINCIPIOS</h4>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Respeto</button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">El respeto es un valor que permite que el hombre pueda reconocer, aceptar, apreciar y valorar las cualidades del prójimo y sus derechos. Es decir, el respeto es el reconocimiento del valor propio y </code>de los derechos de los individuos y de la sociedad.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Derecho</button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Normas que expresan o incorporan valores superiores que el ordenamiento  jurídico considera como últimos. Directrices son normas que estipulan la obligación de perseguir determina- dos fines.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Solidaridad</button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">La solidaridad es un valor personal que supone la capacidad que tienen los miembros que pertenecen a una comunidad de actuar como un todo. Esto se produce porque los miembros comparten intereses y necesidades entre sí, gracias a los lazos sociales que les unen.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row"><h2 class="text-center text-primary">PLATAFORMA ESTRATEGICA</h2></div>
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <div class="container mt-4 " >
            <div class="row">
                <div class="col-md-4 mb-3 mt-5 text-center">
                </div>
                <div class="col-md-8 ">
                    <div class="row">
                        <div class="col-lg-6 mt-5" style="font-family: 'Questrial', sans-serif;"><h3>QUE HACEMOS?</h3>
                        <P>Contribuir con la dibulgacon de la informacion de las diferentes actividades que se reliazan por parte de la entidades guburnamentales y fundaciones.</P></div>
                        <div class="col-lg-6 mt-5"><h3>MISION</h3>
                        <P>El propósito de nuestro aplicativo web es colocar al alcance las actividades lúdicas deportivas y sociales para los adultos mayores de la ciudad de Popayán  a través de una herramienta tecnológica que permite dar a conocer las diferentes actividades programadas para el adulto mayor con el fin de mejorar la calidad de vida y poder hacer más llevadera y feliz la vejez de nuestros ancianos.</P>
                        <h3>VISION</h3>
                        <P>Para el año 2023 constituirnos como una plataforma a nivel regional  donde se permita converger a los distintos actores gobierno y fundaciones  logrando que lo adultos mayores  tengan un mejor intercambio de comunicación; permitiéndoles informarse de forma oportuna sobre las actividades que se realizarán en cada una de las entidades, para con esto los adultos mayores se encuentren más activos física, emocional y mentalmente.</P></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

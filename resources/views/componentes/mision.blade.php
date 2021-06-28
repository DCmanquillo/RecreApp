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
                    <P class="mt-5" style="font-family: 'Questrial', sans-serif; font-size:x-large;">buscamos potenciar la participacion e integracion de los mayores
                        en la comunidad con ctividades socio-culturales, ocupacionales, artisticas
                        y recreativas para estimular el mantenimiento activo tanto a nivel fisico
                        como psicologico de las personas mayores, el crear nuevos espacios nuevos
                        y formas nuevas para la ocupacion del ocio y tiempo libre
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
                                <div class="accordion-body">normas que expresan o incorporan valores superiores que el ordenamiento  jurídico considera como últimos. Directrices son normas que estipulan la obligación de perseguir determina- dos fines.</div>
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
                        <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate magni quasi perferendis dolorem! Numquam dolores commodi culpa ipsa nesciunt, facilis, unde id maxime velit voluptatibus facere possimus animi voluptatem laborum.</P></div>
                        <div class="col-lg-6 mt-5"><h3>MISION</h3>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere iste numquam laborum nobis sit optio aperiam sunt cumque aliquid quia, ipsum repellendus, culpa dignissimos reiciendis aut debitis iusto vitae consequatur.</P>
                        <h3>VISION</h3>
                        <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est iure consequuntur eum in quibusdam eos ullam minima, reiciendis similique quidem accusantium, sapiente porro nobis. Et facere fugit illo in optio!</P></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

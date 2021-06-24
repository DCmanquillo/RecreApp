@extends('layouts.plantilla')

@section('contenido-principal')

<section class="mt-5">
    <div class="d-flex">
        <div class="container align-self-center">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="display-4 fw-bolder" style="color: #0B1054;">Contáctanos</h2>
                    <hr class="bg-info">
                    <p class="text-start lead mb-4" style="color: #0B1054;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ad iste quidem expedita aliquam magnam, quae sed accusamus soluta a at
                        sunt impedit alias possimus molestias repellat et, iure vitae!</p>
                    <p class="" style="color: #1A962B  ;">Calle 27 an #2-809</p>
                    <p class="text-start" style="color: #1A962B  ;" >312273930303303</p>
                    <p class="text-star" style="color: #1A962B  ;">clturamovil@gmail.com</p>
                </div>
                <div class="col-lg-6 d-flex">
                    <!--formularios-->
                    <form class="row g-3">
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label fw-bolder">Nombre completo</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label fw-bolder">Correo electronico</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label fw-bolder">Telefono de contacto</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>

                        <div class="col-12">
                            <label for="inputAddress" class="form-label fw-bolder">Motivo de contacto</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pregunta</option>
                                <option value="1">Sugerencia</option>
                                <option value="2">Queja</option>
                                <option value="3">Reclamo</option>
                                <option value="3">Felicitaciones</option>
                                <option value="3">Otro</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="inputAddress2" class="form-label fw-bolder">Mensaje</label>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn  fw-bolder" style="background-color: #0B1054; color: aliceblue;">Enviar mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br>
@endsection

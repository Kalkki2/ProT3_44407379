<section class="container my-3">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">Seleccione su metodo de pago: </h5>
                    <hr>
                    <form action="">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                            <label class="form-check-label" for="radioDefault1">Tarjetas de credito y debito</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                            <label class="form-check-label" for="radioDefault2">Transferencia</label>
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPago" id="btn-confirmar">
                        Confirmar compra
                        </button>
                    </form>                 
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Pago -->
    <div class="modal fade" id="modalPago" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="fw-bold logo">MUSNOK</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                    <img src="assets\img\icons\confirmar.png" alt="" class="icono-confirmar">
                </div>
                <div class="mensaje-modal">
                    <h4>Pago exitoso!</h4>  
                    <p>Muchas gracias por comprar con nosotros!Tu pedido se esta procesando...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Confirmacion -->
    <div class="modal fade" id="modalConfirmado" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="py-3 mensaje-modal">
                    <h3 class="fw-bold logo">MUSNOK</h3>
                    <h4>Compra finalizada!</h4>
                </div>
                <div class="modal-body d-flex justify-content-center">
                    <img src="assets\img\icons\bolsa-de-la-compra.png" alt="" class="icono-confirmado">
                </div>
                <div class="modal-footer">
                    <a href="<?php echo base_url()?>"class="btn btn-outline-primary">Volver a incio</a>
                </div>
            </div>
        </div>
    </div>
</section>
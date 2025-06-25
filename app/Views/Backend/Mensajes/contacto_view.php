<section class="container my-3">
        <h3 class="d-inline">Contactanos</h3>
        <p>Si tienes alguna duda, comentario o sugerencia, puedes contactarnos a traves del formulario, redes sociales o llamandonos, y nuestro equipo se comunicara contigo.</p>
        <div class="row justify-content-center">
            <div class="col-11 col-md-8 col-lg-4 mb-3 p-3 usuario-form">
                <?php echo form_open_multipart('enviar_mensaje') ?>

                    <div class="form-group mb-4">
                        <label for="nombre" class="form-label">Nombre</label>
                        <?php echo form_input(['name'=>'nombre', 'id'=>'nombre', 'type'=> 'text','class' => 'form-control py-2', 'value'=> set_value('nombre')]); ?>
                                
                        <?php if(isset($validation) && $validation->getError('nombre')): ?>
                            <div class="text-danger"><?= $validation->getError('nombre') ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group mb-4">
                            <label for="email" class="form-label">Correo</label>
                            <?php echo form_input(['name'=>'email', 'id'=>'email', 'type'=> 'email','class' => 'form-control py-2', 'value'=> set_value('email')]); ?>
                                
                            <?php if(isset($validation) && $validation->getError('email')): ?>
                                <div class="text-danger"><?= $validation->getError('email') ?></div>
                            <?php endif; ?>
                    </div>
                    <div class="form-group mb-4">
                        <label for="motivo" class="form-label">Motivo</label>
                        <?php echo form_input(['name'=>'motivo', 'id'=>'motivo', 'type'=> 'text','class' => 'form-control py-2', 'value'=> set_value('motivo')]); ?>
                                
                        <?php if(isset($validation) && $validation->getError('motivo')): ?>
                            <div class="text-danger"><?= $validation->getError('motivo') ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group mb-4">
                        <label for="consulta" class="form-label">Mensaje</label>
                        <?php 
                            echo form_textarea([
                                'name'  => 'consulta',
                                'id'    => 'consulta',
                                'class' => 'form-control py-2',
                                'value' => set_value('consulta'),
                                'rows'  => 5// podés ajustar la cantidad de filas que quieras
                            ]); 
                        ?>
                        
                        <?php if(isset($validation) && $validation->getError('consulta')): ?>
                            <div class="text-danger"><?= $validation->getError('consulta') ?></div>
                        <?php endif; ?>
                    </div>


                    <div class="mt-3">
                        <?php echo form_submit('enviar', 'Enviar', "class= 'btn btn-form btn-usuario'"); ?>
                    </div> 
                    
                <?php echo form_close() ?>
            </div>

            <div class="col-12 col-md-12 col-lg-8 px-3 mb-3">
                <div class="row">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7080.094809660056!2d-58.84271373875825!3d-27.467783504272997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456db6ac46027b%3A0x548754807d37a00!2sTECNO%20OFFICE!5e0!3m2!1ses-419!2sar!4v1712688131120!5m2!1ses-419!2sar" class="p-0" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="row border-y">
                    <div class="col-6">
                        <div class="mb-3">
                            <img src="assets/img/icons/geo-alt-fill.svg" class="p-2 contacto-icon" alt="">
                            <span>Hipolito Yrigoyen 1646</span>
                        </div>
                        <div>
                           <img  src="assets/img/icons/telephone-fill.svg" class="p-2 contacto-icon" alt="">
                           <span>+54 9 379 346780</span>
                           <br>
                           <img  src="assets/img/icons/telephone-fill.svg" class="p-2 contacto-icon" alt="" >
                           <span>+54 9 382462697</span>
                           <br>
                           <div  class="p-2 mt-3 contacto-icon email">
                              <img  src="assets/img/icons/envelope-fill.svg" alt="" >
                           </div>
                           <span>musnoklz9@gmail.com</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-3 d-flex redes-contacto">
                        <span>Nuestras redes</span>
                        <a href="https://facebook.com" class="p-2 mx-2 contacto-icon"  target="_blank">
                            <img class="redes-icon " src="assets/img/icons/facebook.svg"  alt="">
                        </a>
                        <a href="https://instagram.com" class="p-2 mx-2 contacto-icon"  target="_blank">
                            <img class="redes-icon " src="assets/img/icons/instagram.svg"  alt="">
                        </a>
                        <a href="https://wa.me/543782461697" class="p-2 mx-2 contacto-icon" target="_blank">
                            <img class="redes-icon" src="assets/img/icons/whatsapp.svg"  alt="">
                        </a>
                        <a href= "https://twitter.com" class="p-2 mx-2 contacto-icon"  target="_blank">
                            <img class="redes-icon " src="assets/img/icons/twitter-x.svg"  alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
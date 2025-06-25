<section class="container my-4">
    <h2 class="fw-bold">¡Bienvenido/a   <?php echo session('nombre')?>!</h2>
    <h5>Edita tu perfil</h5>
    <hr>
    <div class="row justify-content-center text-center">
        <?php if(session('mensaje')): ?>
            <div class="col-9  mb-3 py-2 alert alert-success">
                <h5 class="m-0"><?=esc (session('mensaje'))?></h5>
            </div>
        <?php elseif(!empty($validation)): ?>
            <div class="col-9 mb-3 py-2 alert alert-danger">
                <h5 class="m-0">Verifique los datos ingresados!</h5>
            </div>
        <?php endif ?>
    </div>
    <div class="row justify-content-center">
        <div class="col-10 col-md-10 col-lg-10 border">
    
            <?php echo form_open_multipart('actualizar_datos') ?>
                <div class="row p-3 justify-content-evenly bg-white usuario-form">
                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="row">
                           <div class="col-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <?php echo form_input(['name'=>'nombre', 'id'=>'nombre', 'type'=> 'text','class' => 'form-control py-2', 'value'=> $usuario['usuario_nombre']]); ?>
                                
                                    <?php if(isset($validation) && $validation->getError('nombre')): ?>
                                        <div class="text-danger"><?= $validation->getError('nombre') ?></div>
                                    <?php endif; ?>
                                </div>
                           </div>
                           <div class="col-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <?php echo form_input(['name'=>'apellido', 'id'=>'apellido', 'type'=> 'text','class' => 'form-control py-2', 'value'=> $usuario['usuario_apellido']]); ?>
                                
                                    <?php if(isset($validation) && $validation->getError('apellido')): ?>
                                        <div class="text-danger"><?= $validation->getError('apellido') ?></div>
                                    <?php endif; ?>
                                </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="email" class="form-label">Correo</label>
                                    <?php echo form_input(['name'=>'email', 'id'=>'email', 'type'=> 'email','class' => 'form-control py-2', 'value'=> $usuario['usuario_email']]); ?>
                                
                                    <?php if(isset($validation) && $validation->getError('email')): ?>
                                        <div class="text-danger"><?= $validation->getError('email') ?></div>
                                    <?php endif; ?>
                                </div>
                           </div>
                           <div class="col-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="telefono" class="form-label">Telefono</label>
                                    <?php echo form_input(['name'=>'telefono', 'id'=>'telefono', 'type'=> 'number','class' => 'form-control py-2', 'value'=> $usuario['usuario_telefono']]); ?>
                                
                                    <?php if(isset($validation) && $validation->getError('telefono')): ?>
                                        <div class="text-danger"><?= $validation->getError('telefono') ?></div>
                                    <?php endif; ?>
                                </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="email" class="form-label">Seleccione rol</label>
                                    <?php
                                    $roles = [
                                        '1' => 'Administrador',
                                        '2' => 'Cliente'
                                    ];
                                    $rol_seleccionado = set_value('perfil', $usuario['perfil_id'] ?? '');

                                   echo form_dropdown('perfil', $roles, $rol_seleccionado, 'class="form-control" id="rol_usuario"');
                                    ?>

                                    <?php if (isset($validation) && $validation->getError('perfil')): ?>
                                        <div class="text-danger"><?= $validation->getError('perfil'); ?></div>
                                    <?php endif; ?>
                                </div>
                           </div>
                        </div>

                        <?php echo form_hidden('idUser', $usuario['id_usuario']); ?>
                        
                        <div class="row">
                             <div class="col-2">
                                <a class="btn btn-outline-dark " href="gestionar_usuarios">Cancelar</a>
                            </div>
                            <div class="col-10 mx-auto">
                                <?php echo form_submit('Editar', 'Actualizar', "class= 'btn btn-usuario mb-3 tn w-100'"); ?>
                            </div>


                        </div>                   
                    </div>
                </div>
            <?php echo form_close() ?>

        </div>
    </div>   
</section>


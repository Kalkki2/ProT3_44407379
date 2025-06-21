<!--<section class="container my-4">
    <h2 class="fw-bold">¡BIENVENIDO A MUSNOK!</h2>
    <p>Create una cuenta y se parte de nuestra comunidad para disfrutar de los beneficios y los productos que tenemos para ti.</p>
    <h5>Registrate ahora!</h5>
    <hr>
    <div class="row justify-content-center">
        <div class="col-10 col-md-10 col-lg-10 border">
                <div class="row p-3 justify-content-evenly bg-white usuario-form">
                     
                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="row">
                           <div class="col-12 col-lg-6">
                                <div class=" mb-4">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" >                                
                                </div>
                           </div>
                           <div class="col-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="apellido" > 
                                </div>
                           </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="correo" class="form-label">Correo Electronico</label>
                                     <input type="email" class="form-control" id="correo" > 
                                    
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="telefono" class="form-label">Telefono</label>
                                     <input type="number" class="form-control" id="telefono" > 
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="form-group mb-4">
                                    <label for="direccion" class="form-label">Direccion</label>
                                     <input type="text" class="form-control" id="direccion" > 
                                </div>
                            </div>
                            <div class="col-12 col-lg-5">
                                <div class="form-group mb-4">
                                    <label for="codPostal" class="form-label">Codigo Postal</label>
                                     <input type="text" class="form-control" id="codPostal" > 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6">  
                                <div class="form-group mb-4">
                                    <label for="contrasenia" class="form-label">Contaseña</label>
                                    <input type="password" class="form-control" id="contrasenia" >
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="contrasenia2" class="form-label">Repetir Contaseña</label>
                                    <input type="password" class="form-control" id="contrasenia2" >
                                </div>
                            </div>
                        </div>
                      

                        <div class="row">
                            <div class="col-2">
                                <button type="submit" class="btn btn-outline-dark ">Cancelar</button>
                            </div>
                            <div class="col-10">
                                <button type="submit" class="btn btn-usuario mb-3 tn w-100">Registrarme</button>
                            </div>
                        </div>
                    </div> 
                </div>

        </div>
    </div>
</section> -->



<section class="container my-4">
    <h2 class="fw-bold">¡BIENVENIDO A MUSNOK!</h2>
    <p>Create una cuenta y se parte de nuestra comunidad para disfrutar de los beneficios y los productos que tenemos para ti.</p>
    <h5>Registrate ahora!</h5>
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
    
            <?php echo form_open_multipart('crear_cuenta') ?>
                <div class="row p-3 justify-content-evenly bg-white usuario-form">
                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="row">
                           <div class="col-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <?php echo form_input(['name'=>'nombre', 'id'=>'nombre', 'type'=> 'text','class' => 'form-control py-2', 'value'=> set_value('nombre')]); ?>
                                
                                    <?php if(isset($validation) && $validation->getError('nombre')): ?>
                                        <div class="text-danger"><?= $validation->getError('nombre') ?></div>
                                    <?php endif; ?>
                                </div>
                           </div>
                           <div class="col-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <?php echo form_input(['name'=>'apellido', 'id'=>'apellido', 'type'=> 'text','class' => 'form-control py-2', 'value'=> set_value('apellido')]); ?>
                                
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
                                    <?php echo form_input(['name'=>'email', 'id'=>'email', 'type'=> 'email','class' => 'form-control py-2', 'value'=> set_value('email')]); ?>
                                
                                    <?php if(isset($validation) && $validation->getError('email')): ?>
                                        <div class="text-danger"><?= $validation->getError('email') ?></div>
                                    <?php endif; ?>
                                </div>
                           </div>
                           <div class="col-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="telefono" class="form-label">Telefono</label>
                                    <?php echo form_input(['name'=>'telefono', 'id'=>'telefono', 'type'=> 'number','class' => 'form-control py-2', 'value'=> set_value('telefono')]); ?>
                                
                                    <?php if(isset($validation) && $validation->getError('telefono')): ?>
                                        <div class="text-danger"><?= $validation->getError('telefono') ?></div>
                                    <?php endif; ?>
                                </div>
                           </div>
                        </div>
 
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="categoria" class="form-label">Direccion</label>
                                    <?php
                                        $lista['0'] = 'Localidades';
                                        foreach($localidades as $row){
                                            $id_localidad = $row['id_localidad'];
                                            $localidad_desc = $row['localidad_desc'];
                                            $provincia_desc = $row['provincia_desc'];
                                            $lista[$id_localidad] = $provincia_desc .'/'. $localidad_desc;
                                        }

                                        echo form_dropdown('localidad',$lista,set_value('localidad', '0'),'class="form-control"'); // <-- Esto guarda el valor anterior o muestra '0' si es nuevo

                                    ?>
                                    <?php if(isset($validation) && $validation->getError('localidad')): ?>
                                        <div class="text-danger"><?= $validation->getError('localidad') ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="telefono" class="form-label">Codigo postal</label>
                                    <?php echo form_input(['name'=>'codPostal', 'id'=>'codPostal', 'type'=> 'text','class' => 'form-control py-2', 'value'=> set_value('codPostal')]); ?>
                                
                                    <?php if(isset($validation) && $validation->getError('codPostal')): ?>
                                        <div class="text-danger"><?= $validation->getError('codPostal') ?></div>
                                    <?php endif; ?>
                                </div>
                           </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <?php echo form_input(['name'=>'password', 'id'=>'password', 'type'=> 'password','class' => 'form-control py-2', 'value'=> set_value('password')]); ?>
                                
                                    <?php if(isset($validation) && $validation->getError('password')): ?>
                                        <div class="text-danger"><?= $validation->getError('password') ?></div>
                                    <?php endif; ?>
                                </div>
                           </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="password2" class="form-label">Repetir Contraseña</label>
                                    <?php echo form_input(['name'=>'password2', 'id'=>'password2', 'type'=> 'password','class' => 'form-control py-2', 'value'=> set_value('password2')]); ?>
                                
                                    <?php if(isset($validation) && $validation->getError('password2')): ?>
                                        <div class="text-danger"><?= $validation->getError('password2') ?></div>
                                    <?php endif; ?>
                                </div>
                           </div>
                        </div>

                        
                        <div class="row">
                             <div class="col-2">
                                <button type="submit" class="btn btn-outline-dark ">Cancelar</button>
                            </div>
                            <div class="col-10 mx-auto">
                                <?php echo form_submit('Registrarme', 'Registrarme', "class= 'btn btn-usuario mb-3 tn w-100'"); ?>
                            </div>


                        </div>                   
                    </div>
                </div>
            <?php echo form_close() ?>

        </div>
    </div>    

</section>

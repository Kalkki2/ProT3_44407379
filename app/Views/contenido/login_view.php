<section class="cotainer my-4">
    <div class="row justify-content-center">
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
       <div class="col-10 col-sm-8 col-md-6 col-lg-4 col-xl-4" >
           <div class="card py-3 usuario-form" style="width: 350px"> 
                <h2 class="text-center fw-bold py-3">MUSNOK</h2>           
                <div class="card-body">
                    <?php echo form_open_multipart('logear') ?>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo</label>
                            <?php echo form_input(['name'=>'email', 'id'=>'email', 'type'=> 'email','class' => 'form-control py-2', 'value'=> set_value('email')]); ?>
                        
                            <?php if(isset($validation) && $validation->getError('email')): ?>
                                <div class="text-danger"><?= $validation->getError('email') ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <?php echo form_input(['name'=>'password', 'id'=>'password', 'type'=> 'password','class' => 'form-control py-2', 'value'=> set_value('password')]); ?>
                                
                            <?php if(isset($validation) && $validation->getError('password')): ?>
                                <div class="text-danger"><?= $validation->getError('password') ?></div>
                            <?php endif; ?>
                        </div>

                        <div >
                            <button class=" btn  "> Cancelar</button>                            
                            <?php echo form_submit('login', 'Iniciar sesion', "class= 'btn btn-usuario w-100 mt-3 px-3'"); ?>
                        </div> 
                    <?php echo form_close() ?>             
                </div>
           </div>
       </div>
    </div>
</section>

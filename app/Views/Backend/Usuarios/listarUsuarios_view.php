<section class="container">
    <h2 class="text-center">Lista de Usuarios</h2>
    <hr>
    <div class="row">
        <div class="col table-responsive">
            <table class="table table-bordred table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nombre/s</th>
                        <th scope="col">Apellido/s</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Perfil</th>
                        <th scope="col">Editar</th>                         
                        <th scope="col">Agregar/Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($usuarios as $unUsuario) { ?>
                        <tr>
                           
                            <td><?php echo $unUsuario['usuario_nombre'];?></td>
                            <td><?php echo $unUsuario['usuario_apellido'];?></td>
                            <td><?php echo $unUsuario['usuario_email'];?></td>
                            <td><?php echo $unUsuario['provincia_localidad'];?></td>
                            <td><?php echo $unUsuario['usuario_telefono'];?></td>
                            <td><?= ($unUsuario['perfil_id'] == 1) ? 'Administrador' : 'Cliente' ?></td>
                            <td>
                                <a class="btn btn-outline-dark px-3 bg-light text-dark" href="<?php echo base_url('form_editar_usuario'.$unUsuario['id_usuario']);?>"><img class="me-2" src="assets/img/icons/pencil-fill.svg" alt="">Modificar</a>
                            </td>
                            <?php
                                if($unUsuario['usuario_estado'] == 1) { ?>
                                    <td>
                                        <a class="btn btn-outline-danger  bg-light text-danger" href="<?php echo base_url('dar_Baja_User'.$unUsuario['id_usuario']);?>"> <img src="assets/img/icons/trash.svg" alt="">Dar de Baja</a>
                                    </td>
                                <?php }else { ?>
                                    <td>
                                        <a class="btn btn-outline-success  bg-light text-success" href="<?php echo base_url('dar_Alta_User'.$unUsuario['id_usuario']);?>"><img src="assets/img/icons/plus.svg" alt="">Agregar</a>
                                    </td>
                            <?php } ?>
                        </tr>

                    <?php }?>

                    
                </tbody>
            </table>
        </div>
    </div>
</section>
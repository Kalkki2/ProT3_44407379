<section class="container">
    <h2 class="text-center">Lista de Mensajes</h2>
    <hr>
    <div class="row">
        <div class="col table-responsive">
            <table class="table table-bordred table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Motivo</th>
                        <th scope="col">Consulta</th>
                        <th scope="col">Leido/NoLeido</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php foreach($consultas as $unaConsulta) { ?>
                        <tr>
                            <td><?php echo $unaConsulta['mensaje_nombre'];?></td>
                            <td><?php echo $unaConsulta['mensaje_email'];?></td>
                            <td><?php echo $unaConsulta['mensaje_motivo'];?></td>
                            <td><?php echo $unaConsulta['mensaje_consulta'];?></td>
                            <?php
                                if($unaConsulta['mensaje_estado'] == 1) { ?>
                                    <td>
                                        <a class="btn btn-outline-success bg-light text-success" href="<?php echo base_url('leer_mensaje'.$unaConsulta['id_mensaje']);?>">Leer</a>
                                    </td>
                                <?php }else { ?>
                                    <td class="text-primary"><img src="assets/img/icons/check2-all.svg" alt="">Leido</td>
                            <?php } ?>
                        </tr>

                    <?php }?>

                </tbody>
            </table>
        </div>
    </div>
</section>
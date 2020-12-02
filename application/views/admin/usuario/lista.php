<div class="site-section">
        <div class="container">
        
            <section >
                <br>
                <h1 class="text-center">
                USUARIOS
                </h1>
            </section>
            <br>
            <center><section>
                <?php echo form_open_multipart('usuarios/agregar'); ?>
                <button type="submit" class="btn btn-round btn-primary">Agregar Nuevo Usuario <i class="fa fa-plus "></i></button>

                <a href="<?=base_url()?>reporte/listaUsuarioPDF" class="btn btn-round btn-danger" type="submit">Exportar a PDF <i class="fa fa-file-pdf-o "></i></a>
                <?php echo form_close(); ?>
            </section></center>
            <br>
            <!-- Main content -->

            <section>
            <div class="col-md-12">
                <div class="col-md-12 section-bggg">
                    <br>

                    <div class="table-responsive">
                        <table class="table table-striped table-inverse " id="tabel">
                            
                            <thead class="thead-inverse">
                                    <th style="width: 2%">Nº</th>
                                    <th style="width: 5%">IMAGEN</th>
                                    <th>NOMBRE COMPLETO</th>                       
                                    <th>C.I.</th>
                                    <th>TELEFONO</th>
                                    <th>ROL</th>
                                    <th>DIRECCIÓN</th>
                                    <th style="width: 280px">OPCIONES</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $indice=1;
                                foreach ($usuario->result() as $row) {
                                ?>
                                    <tr>
                                        <td><?php echo $indice; ?></td>
                                        <td><a href="<?=base_url().'assets/ImagenesBDD/usuarios/'.$row->imagen;?>" target="_blank"><img src="<?=base_url().'assets/ImagenesBDD/usuarios/'.$row->imagen;?>" width="70" class="img-circle"></a></td>
                                        
                                        <td><?php echo $row->nombre." ".$row->primerApellido." ".$row->segundoApellido; ?></td>                 
                                        <td><?php echo $row->ci; ?></td>
                                        <td><?php echo $row->telefono; ?></td>
                                        <td><?php echo $row->nombreRol; ?></td>
                                        <td><?php echo $row->direccion; ?></td>

                                        <td>
                                            <div class="btn-group">
                                            <?php echo form_open_multipart('usuarios/modificar'); ?>
                                                <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario; ?>">
                                                <button class="btn btn-warning btn btn-round  " type="submit" name="action"><i class="fa fa-pencil"></i></button>
                                                <?php echo form_close(); ?>
                                            </div>

                                            <div class="btn-group">
                                                <?php echo form_open_multipart('usuarios/eliminardb'); ?>
                                                    <input type="hidden" name="idUsuario" id="id"value="<?php echo $row->idUsuario; ?>">

                                                    <input type="hidden" name="imagen" value="<?php echo $row->imagen; ?>">
                                                    <input type="hidden" name="nombre" value="<?php echo $row->nombre; ?>">
                                                    <input type="hidden" name="primerApellido" value="<?php echo $row->primerApellido; ?>">
                                                    <input type="hidden" name="segundoApellido" value="<?php echo $row->segundoApellido; ?>">
                                                    <input type="hidden" name="ci" value="<?php echo $row->ci; ?>">
                                                    <input type="hidden" name="telefono" value="<?php echo $row->telefono; ?>">
                                

                                                    <button type="submit" class="btn btn-danger btn btn-round  btn-btnEliminar"><i class="fa fa-trash"></i></button>
                                                <?php echo form_close(); ?>
                                            </div>

                                            <div class="btn-group">
                                            <?php echo form_open_multipart('usuarios/restableserPassword'); ?>
                                                <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario; ?>">
                                                <input type="hidden" name="ci" value="<?php echo $row->ci; ?>">
                                                <button class="btn btn-info btn btn-round" id="btn-restablecerPassword" type="submit" name="action">Reestableser Contraseña <i class="fa fa-pencil"></i></button>
                                                <?php echo form_close(); ?>
                                            </div>
                                        </td>
                                    </tr>
                                        
                                <?php
                                $indice++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                
                </div>
                </div>     
            </section>
        </div>        
        
   
    </div>
</div> 
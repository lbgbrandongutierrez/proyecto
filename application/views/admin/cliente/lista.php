<div class="site-section">
        <div class="container">

            
            <section class="content-header">
                <br>
                <h1 class="text-center">
                LISTA DE CLIENTES
                </h1>
            </section>
            <br>

            <center><section class="content-header">
                <?php echo form_open_multipart('cliente/agregar'); ?>
                <button type="submit" class="btn btn-round btn-primary">Agregar Un Nuevo Cliente <i class="fa fa-plus "></i></button>

                <a href="<?=base_url()?>reporte/listaClientePDF" class="btn btn-round btn-danger" type="submit">Exportar a PDF <i class="fa fa-file-pdf-o "></i></a>
                <?php echo form_close(); ?>
            </section>
            <br>

            <section>
            <div class="col-md-12">
                <div class="col-md-2"></div>
                <div class="col-md-8 section-bggg">
                    <br>
                        
                        <table class="table table-striped table-inverse table-responsive" id="tabel">
                            
                            <thead class="thead-inverse">
                                <tr>
                                <th>#</th>
                                <th>RAZON SOCIAL</th>
                                <th>NIT-CI</th>
                                <th style="width: 80px">OPCIONES</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $indice=1;
                                foreach ($cliente->result() as $row) {
                                ?>
                                    <tr>
                                        <td><?php echo $indice; ?></td>
                                        <td><?php echo $row->razonSocial; ?></td>
                                        <td><?php echo $row->nit; ?></td>
                                        
                                        <td>
                                            <div class="btn-group">
                                                <?php echo form_open_multipart('cliente/modificar'); ?>
                                                <input type="hidden" name="idCliente" value="<?php echo $row->idCliente; ?>">
                                                <button class="btn btn-warning btn btn-round" type="submit" name="action"><i class="fa fa-pencil"></i></button>
                                                <?php echo form_close(); ?>
                                            </div>

                                            <div class="btn-group">
                                                <?php echo form_open_multipart('cliente/eliminardb'); ?>
                                                    <input type="hidden" name="idCliente" value="<?php echo $row->idCliente; ?>">
                                                    <input type="hidden" name="razonSocial" value="<?php echo $row->razonSocial; ?>">
                                                    <input type="hidden" name="nit" value="<?php echo $row->nit; ?>">
                                                    <button type="submit" class="btn btn-danger btn btn-round  btn-btnEliminar"><i class="fa fa-trash"></i></button>
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
                    <div class="col-md-2"></div>
                    </div>
                </div>     
            </section>
        </div>


    </div>
</div>
       


<div class="site-section">
        <div class="container">

            
            <section class="content-header">
                <br>
                <h1 class="text-center">
                CATEGORIA DE PRODUCTOS
                </h1>
            </section>
            <br>
            <section class="content-header">
                <?php echo form_open_multipart('categoria/agregar'); ?>
                <center><button type="submit" class="btn btn-round btn-primary">Agregar Una Nueva Categoria <i class="fa  fa-plus "></i></button>

                <a href="<?=base_url()?>reporte/listaCategoriaPDF" class="btn btn-round btn-danger" type="submit">Exportar PDF <i class="fa fa-file-pdf-o "></i></a>
                <?php echo form_close(); ?>
            </section>
            <br>

            <section>
            <div class="col-md-12">
                <div class="col-md-2"></div>
                <div class="col-md-8 section-bggg">
                    <br>

                    <div class="table-responsive">
                        <table class="table table-striped table-inverse " id="tabel">
                            
                            <thead class="thead-inverse">
                                <tr>
                                <th>#</th>
                                <th>NOMBRE</th>
                                <th>DESCRIPCION</th>
                                <th style="width: 130px">OPCIONES</th>
                                
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $indice=1;
                                foreach ($categoria->result() as $row) {
                                ?>
                                    <tr>
                                        <td><?php echo $indice; ?></td>
                                        <td><?php echo $row->nombreCategoria; ?></td>
                                        <td><?php echo $row->descripcion; ?></td>
                                        <?php $dataCategoria = $indice."*".$row->nombreCategoria."*".$row->descripcion;?>
                    
                                        <td>
                                            <div class="btn-group">
                                                <?php echo form_open_multipart('categoria/modificar'); ?>
                                                <input type="hidden" name="idCategoria" value="<?php echo $row->idCategoria; ?>">
                                                <button class="btn btn-warning  btn btn-round" type="submit" name="action"><i class="fa fa-pencil"></i></button>
                                                <?php echo form_close(); ?>
                                            </div>

                                            <div class="btn-group">
                                                <?php echo form_open_multipart('categoria/eliminardb'); ?>
                                                    <input type="hidden" name="idCategoria" value="<?php echo $row->idCategoria; ?>">
                                                    <input type="hidden" name="nombreCategoria" value="<?php echo $row->nombreCategoria; ?>">
                                                    <input type="hidden" name="descripcion" value="<?php echo $row->descripcion; ?>">
                                                    <button type="submit" class="btn btn-danger btn btn-round"><i class="fa fa-trash"></i></button>
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

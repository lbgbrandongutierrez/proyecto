<div class="site-section">
    <div class="container">

            
            <section class="content-header">
                <br>
                <h1 class="text-center">
                PRODUCTOS
                </h1>
            </section>
            <section class="content-header">
                <?php echo form_open_multipart('venta/listaCarroProducto'); ?>
                <button type="submit" class="btn btn-round btn-primary">Ir a Detalle Venta <i class="fa fa-user "></i></button>

                <a href="<?=base_url()?>admin/listaUsuarioPdf" class="btn btn-round btn-danger" type="submit">Exportar a PDF <i class="fa fa-file-pdf-o "></i></a>
                <?php echo form_close(); ?>
            </section>
            <!-- Main content -->

            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                        </div>
                        
                        <table class="table table-striped table-inverse table-responsive" id="tabel">
                            
                            <thead class="thead-inverse">
                                    <th style="width: 3%">Nº</th>
                                    <th style="width: 7%">IMAGEN</th> 
                                    <th>CODIGO</th>                                    
                                    <th>NOMBRE</th>                        
                                    <th>PRECIO/Bs</th>
                                    <th>CANTIDAD</th>
                                    <th style="width: 2%">AGREGAR</th>
                                
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $indice=1;
                                foreach ($producto->result() as $row) {
                                ?>
                                    <tr>
                                        <td><?php echo $indice; ?></td>
                                        <td><a href="<?=base_url().'assets/ImagenesBDD/productos/picture/'.$row->imagen;?>" target="_blank"><img src="<?=base_url().'assets/ImagenesBDD/productos/picture/'.$row->imagen;?>" width="50" ></a></td>
                                        <td><?php echo $row->codigo?></td> 
                                        <td><?php echo $row->nombreProducto; ?></td>                           
                                        <td><?php echo $row->precioVenta; ?></td>
                                        <td>
                                        <?php echo form_open_multipart('catalogoVenta/agregarCatalogo'); ?>
                                                <input  type="text" name="cantidad" class="form-control" id="cantidad" pattern="[0-9]+" required="" title="Solo puede contener números.">
                                            
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                
                                                    <input type="hidden" name="idProducto" value="<?php echo $row->idProducto; ?>">
                                                    <input type="hidden" name="codigo" value="<?php echo $row->codigo; ?>">
                                                    <input type="hidden" name="nombreProducto" value="<?php echo $row->nombreProducto; ?>">
                                                    <input type="hidden" name="precioVenta" value="<?php echo $row->precioVenta; ?>">
                                                    
                                                     <button class="btn btn-danger btn btn-round " type="submit" name="action"><i class="fa fa-check-square-o"></i></button>
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
            </section>
        </div>


    </div>
</div>
       
<div class="site-section">
        <div class="container">
            
            <center><section class="content-header">
                <br>
                <h1 class="text-center">
                 LISTADO DE PRODUCTO
                </h1>
            </section>
            <br>
            <center><section class="content-header">
                <?php echo form_open('producto/agregar'); ?>
                <button type="submit" class="btn btn-round btn-primary">Agregar Un Nuevo Registro de Producto <i class="fa fa-plus "></i></button>

                <a href="<?=base_url()?>reporte/listaProductoPDF" class="btn btn-round btn-danger" type="submit">Exportar a PDF <i class="fa fa-file-pdf-o "></i></a>
                <?php echo form_close(); ?>
            </section>

            <br>
            <section>
                <div class="col-md-1"></div>
                <div class="col-md-10 section-bggg">
                    <br>

                        <div class="table-responsive">
                        <table class="table table-striped table-inverse " id="tabel">
                            
                            <thead class="thead-inverse">
                                    <th style="width: 3%">Nº</th>
                                    <th style="width: 5%">IMAGEN</th>
                                    <th>CATEGORIA</th>
                                    <th>CODIGO</th>                                    
                                    <th>NOMBRE</th>                       
                                    <th>PRECIO/Bs</th>
                                    <th>STOCK</th>
                                    <th style="width: 100px">OPCIONES</th>
                                
                                
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
                                        <td><?php echo $row->categori; ?></td>
                                        <td><?php echo $row->codigo; ?></td>
                                        <td><?php echo $row->nombreProducto; ?></td> 
                                                                      
                                        <td><?php echo $row->precioVenta; ?></td>
                                        <td><?php echo $row->stock; ?></td>
                                        

                                        <td>
                                        
                                           

                                            <div class="btn-group">
                                                <?php echo form_open_multipart('producto/modificar'); ?>
                                                <input type="hidden" name="idProducto" value="<?php echo $row->idProducto; ?>">
                                                <button class="btn btn-warning btn btn-round" type="submit" name="action"><i class="fa fa-pencil"></i></button>
                                                <?php echo form_close(); ?>
                                            </div>

                                            <div class="btn-group">
                                                <?php echo form_open_multipart('producto/eliminardb'); ?>
                                                    <input type="hidden" name="idProducto" value="<?php echo $row->idProducto; ?>">

                                                    <input type="hidden" name="codigo" value="<?php echo $row->codigo; ?>">
                                                    <input type="hidden" name="imagen" value="<?php echo $row->imagen; ?>">
                                                    <input type="hidden" name="nombreProducto" value="<?php echo $row->nombreProducto;?>">
                                                    
                                                    <input type="hidden" name="precioVenta" value="<?php echo $row->precioVenta; ?>">
                                                    <input type="hidden" name="stock" value="<?php echo $row->stock; ?>">
                                

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
                    <div class="col-md-1"></div>
                    </div>
            </section>
        </div>
       
    </div>
</div>   



<div class="modal fade" id="modal-vistaproducto">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <center><h4><b>INFORMACION DEL PRODUCTO</b></h4></center>
                                
        
        <div class="modal-body">
            
                                
        </div>
    </div>
    </div>
  </div>
</div>



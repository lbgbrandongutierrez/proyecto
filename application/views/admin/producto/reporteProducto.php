<div class="site-section">
        <div class="container">

            
            <section class="content-header">
                <br>
                <h1 class="text-center">
                REPOTE DE PRODUCTOS CON STOCK ACTUAL
                </h1>
            </section>
            <!-- Main content -->
            <?php echo form_open_multipart('reporte/reporteProductoStockActualPDF'); ?>
            <center><button type="submit" class="btn btn-round btn-danger">Exportar PDF  <i class="fa fa-file-pdf-o "></i></button>
            <?php echo form_close(); ?>
            <br><br>
            
            <section>
            <div class="col-md-12">
                <div class="col-md-2"></div>
                <div class="col-md-8 section-bggg">
                    <br>

                        <div class="table-responsive">
                        <table class="table table-striped table-inverse " id="tabel">
                            
                            <thead class="thead-inverse">
                                    <th style="width: 3%">Nº</th>
                                    <th style="width: 5%">IMAGEN</th>
                                    <th>CATEGORIA</th>
                                    <th>CODIGO</th>                                    
                                    <th>NOMBRE</th> 
                                    <th>PRECIO</th> 
                                    <th>STOCK</th>
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
                                                <?php if ($row->stock <=50): ?>
                                                    <td style="color: green;"><b><?php echo $row->stock;?></b></td>
                                                <?php else:?>
                                                    <td style="color: green;"><b><?php echo $row->stock;?></b></td>
                                                <?php endif ?>
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
       
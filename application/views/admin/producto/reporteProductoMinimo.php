<div class="site-section">
        <div class="container">

            
            <section class="content-header">
                <br>
                <h1 class="text-center">
                REPOTE DE PRODUCTOS CON STOCK MINIMO
                </h1>
            </section>
            <br>

            <section>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="col-md-9">
                    <center><form action="<?php echo current_url();?>" method="POST" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="">Ver productos menores y/o iguales al Stock de :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="stockMin" pattern="[0-9 ]+" value="<?php echo !empty($stockMin) ? $stockMin:" ";?>">
                            </div>

                            <div class="col-md-6">
                                <input type="submit" name="buscar" value="Buscar" class="btn btn-round btn btn-primary">
                                <a href="<?=base_url()?>index.php/reporte/reporteProductoMinimo" class="btn btn-round btn btn-warning"><i class="fa fa-refresh "></i></a>
                            </div>
                        </div>
                    </form>
                </div>

                <center><div class="col-md-3">
                    <?php echo form_open_multipart('reporte/reporteProductoStockMinimoPDF'); ?>
                        <input type="hidden" class="form-control" name="stockMinn" value="<?php echo !empty($stockMin) ? $stockMin:" ";?>">
                        <button type="submit" class="btn btn-round btn-danger">Exportar PDF <i class="fa fa-file-pdf-o"></i></button>
                    <?php echo form_close(); ?> 
                </div>
            </div>
            <div class="col-md-2"></div>
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
                                    <th style="width: 3%">Nº</th>
                                    <th style="width: 5%">IMAGEN</th>
                                    <th>CATEGORIA</th>
                                    <th>CODIGO</th>                                    
                                    <th>NOMBRE</th> 
                                    <th>PRECIO BS</th> 
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
                                                <?php if ($row->stock <=10): ?>
                                                    <td style="color: red;"><b><?php echo $row->stock;?></b></td>
                                                <?php else:?>
                                                    <td style="color: red;"><b><?php echo $row->stock;?></b></td>
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
       
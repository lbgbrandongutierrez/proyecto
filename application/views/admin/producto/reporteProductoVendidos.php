<div class="site-section">
    <div class="container">


    <section class="content-header">
        <center><h2> REPORTE DE PRODUCTOS VENDIDOS</h2>
    </section>
            <br>
            <section>
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="col-md-10">
                    <form action="<?php echo current_url();?>" method="POST" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="col-md-6">
                                    <label for="" class="col-md-3 control-label">Desde:</label>
                                    <div class="col-md-12">

                                        <!-- <div class="col-md-9"> -->
                                            <input type="date" class="col-md-6 form-control" name="fechainicio" value="<?php echo !empty($fechainicio) ? $fechainicio:date("Y-m-d");?>">
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="col-md-3 control-label">Hasta:</label>
                                    <div class="col-md-12">

                                        <!-- <div class="col-md-9"> -->
                                            <input type="date" class="form-control" name="fechafin" value="<?php  echo !empty($fechafin) ? $fechafin:date("Y-m-d");?>">
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                            <br>
                            <center><div class="col-md-4">
                                <input type="submit" name="buscar" value="Buscar" class="btn btn-round btn btn-primary">
                                <a href="<?=base_url()?>index.php/reporte/reporteProductoVendido" class="btn btn-round btn btn-warning"><i class="fa fa-refresh "></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <br>
                <center><div class="col-md-2">
                    <?php echo form_open_multipart('reporte/reporteProductoVendidosPDF'); ?>
                        <input type="hidden" class="form-control" name="ffechainicio" value="<?php echo !empty($fechainicio) ? $fechainicio:"";?>">
                        <input type="hidden" class="form-control" name="ffechafin" value="<?php  echo !empty($fechafin) ? $fechafin:"";?>">
                        <button type="submit" class="btn btn-round btn-danger">Exportar PDF <i class="fa fa-file-pdf-o"></i></button>
                    <?php echo form_close(); ?> 
                </div>
            </div>
            <div class="col-md-1"></div>
            </section>
            <br>

            <section>
            <div class="col-md-12">
                <div class="col-md-1"></div>
                <div class="col-md-10 section-bggg">
                    <br>

                        <div class="table-responsive">
                        <table class="table table-striped table-inverse " id="tabell">
                            <thead>
                                <tr>
                                    <th>Nª</th>
                                    <th>PRODUCTO</th>
                                    <!-- <th>Stock</th> -->
                                    <th>CANTIDAD</th>
                                    <th>PRECIO</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $indice=1;
                                $total=0;
                                foreach ($producto->result() as $row) {
                                ?>
                                        <tr>
                                            <td><?php echo $indice; ?></td>
                                            <td><?php echo $row->nombreProducto;?></td>
                                            <!-- <td></?php echo $row->stock;?></td> -->
                                            <td><?php echo $row->totalVendidos;?></td>
                                            <td><?php echo $row->precioVenta;?></td>
                                            <td><?php echo number_format($row->precioVenta * $row->totalVendidos, 2, '.', '');?></td>
                                        </tr>
                                <?php
                                $indice++;
                                $total= $total+($row->precioVenta * $row->totalVendidos);
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                    <th colspan="4" class="text-right">Importe Total de Productos Vendidos Bs: </th>
                                        <td><?php echo number_format($total, 2, '.', ''); ?></td>
                                    </tr>
                            </tfoot>
                        </table>
                        </div>
                    <div class="col-md-1"></div>
                    </div>
                </div> 
            </section>
        </div>



    </div>
</div>




<div class="modal fade" id="modal-venta">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion de la venta</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary btn-print"><span class="fa fa-print"> </span>Imprimir</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

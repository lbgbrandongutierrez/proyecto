<div class="site-section">
    <div class="container">

            
            <center><section class="content-header">
                <br>
                <h1 class="text-center">
                VENTAS A CLIENTES
                </h1>
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
                                <a href="<?=base_url()?>index.php/reporte/reporteClienteVenta" class="btn btn-round btn btn-warning">Restablecer</a>
                            </div>
                        </div>
                    </form>
                </div>
                <br>
                <center><div class="col-md-2">
                    <?php echo form_open_multipart('reporte/reporteClienteVentaPDF'); ?>
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
                <div class="col-md-2"></div>
                <div class="col-md-8 section-bggg">
                    <br>
                        <div class="table-responsive">
                            <table class="table table-striped table-inverse " id="tabell">

                                <thead class="thead-inverse">
                                    <tr>
                                    <th>Nª</th>
                                    <th>NOMBRE DEL CLIENTE</th>
                                    <th>TOTAL IMPORTE/BS</th>
                                    <!-- <th style="width: 50px">OPCIONES</th> -->

                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                    $indice=1;
                                    $total=0;
                                    foreach ($venta->result() as $row) {
                                    ?>
                                        <tr>
                                            <td><?php echo $indice; ?></td>
                                            <td><?php echo $row->razonSocial; ?></td>
                                            <td><?php echo $row->total; ?></td>
                                            <!-- <td>
                                            <div class="btn-group">
                                                <//?php echo form_open_multipart('venta/view'); ?>
                                                     <button type="button" class="btn btn-info btn-view-venta" data-target="#modal-default" data-toggle="modal" value="<?php echo $row->idVenta; ?>">
                                                     <span class="fa fa-search"></span>
                                                     </button>
                                                 <//?php echo form_close(); ?>

                                                <button type="button" class="btn btn-round btn btn-info btn-view-venta" data-target="#modal-default" data-toggle="modal">
                                                     <span class="fa fa-search"></span>
                                                </button>
                                            </div> 
                                            </td>-->
                                        </tr> 
                                    <?php
                                    $indice++;
                                    $total= $total+$row->total;
                                    }
                                    ?>
                                </tbody>
                                

                                <tfoot>
                                    <br>
                                    <tr>
                                        <th colspan="2" class="text-right">Importe Total Bs:</th>
                                            <td><?php echo $total; ?></td>
                                        </tr>
                                    
                                </tfoot>

                            </table>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>       
            </section>
        </div>

    </div>
</div> 

        <!-- /.modal para mostrar los productos vendidos -->
        <!-- <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Productos Vendidos </h4>
              </div>
              <div class="modal-body">
               



              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
               </div>
            </div>
          </div>
        </div> -->
 
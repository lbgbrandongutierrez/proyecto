<div class="site-section">
    <div class="container">

            
            <center><section class="content-header">
                <br>
                <h1 class="text-center">
                REPORTE DE VENTAS MENSUALES
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
                                <a href="<?=base_url()?>index.php/reporte/reporteVentaMensual" class="btn btn-round btn btn-warning"><i class="fa fa-refresh "></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <br>
                <center><div class="col-md-2">
                    <?php echo form_open_multipart('reporte/reporteVentaMensualPDF'); ?>
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
                                    <th>MES</th>
                                    <th>TOTAL IMPORTE /BS</th>

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
                                            <td><?php echo $row->fechaRegistro; ?></td>
                                               <td><?php echo $row->total; ?></td>
                                            
                                        </tr> 
                                    <?php
                                    $indice++;
                                    $total= $total+$row->total;
                                    }
                                    ?>
                                </tbody>
                                

                                <tfoot>
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
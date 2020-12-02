<div class="site-section">
    <div class="container">

            
            <section class="content-header">
                <br>
                <h1 class="text-center">
                LISTA DE VENTAS
                </h1>
            </section>
            <br>
            <center><section class="content-header">
            <?php echo form_open_multipart('venta/listaDetVenta'); ?>
                <button type="submit" class="btn btn-round btn-primary">Agregar Una Nueva Venta <i class="fa fa-plus "></i></button>

                <!-- <a href="<?=base_url()?>admin/listaUsuarioPdf" class="btn btn-round btn-danger" type="submit">Exportar a PDF <i class="fa fa-file-pdf-o "></i></a> -->
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
                                <th>Nª</th>
                                <th>NOMBRE DEL CLIENTE</th>
                                <th>TOTAL IMPORTE/BS</th>
                                <th>FECHA DE VENTA</th>
                                <th style="width: 130px">Recibo</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                                $indice=1;
                                foreach ($venta->result() as $row) {
                                ?>
                                    <tr>
                                        <td><?php echo $indice; ?></td>
                                        <td><?php echo $row->razonSocial; ?></td>
                                        <td><?php echo $row->total; ?></td>
                                        <td><?php echo $row->fechaRegistro; ?></td>
                                        <td>
                                      
                                        <div class="btn-group">  
                                            <?php echo form_open_multipart('venta/recibo'); ?>
                                                <!--<input type="hidden" name="idVenta" value="<//?php echo $row->idVenta; ?>"> no afecta--> 
                                                <button type="button" class="btn btn-round btn btn-danger btn-view-venta" data-target="#modal-defaultt" data-toggle="modal" value="<?php echo $row->idVenta; ?>">
                                                <span class="fa fa-print">Recibo</span>
                                                </button>
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
             
</section>

 <!-- /.modal para mostrar los productos vendidos -->
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <center><h4 class="modal-title">Productos Vendidos </h4>
              </div>
              <div class="modal-body">
               



              </div>
              <!-- <div class="modal-footer"> -->
                <!-- <button type="button" class="btn btn-round btn btn-danger pull-left" data-dismiss="modal">Cerrar</button> -->
                <!-- <button type="button" class="btn btn-round btn btn-info btn-print"> <span class="fa fa-print">Imprimir</span></button> -->
              </div>
            </div>
          </div>
        </div>


 <!-- /.modal para mostrar los productos vendidos -->
        <div class="modal fade" id="modal-defaultt">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <center><h4 class="modal-title">RECIBO</h4>
              </div>
              <div class="modal-body">
               



              </div>
              <div>
              <!-- <center><button type="button" class="btn btn-round  btn btn-danger pull-left" data-dismiss="modal">Cerrar</button> -->
              <center><button type="button" class="btn btn-round  btn btn-info btn-printt"> <span class="fa fa-print">Imprimir</span></button>
              </div>
              <br>
            </div>
          </div>
        </div>
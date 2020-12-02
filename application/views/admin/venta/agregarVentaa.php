<div class="site-section">
    <div class="container">

    
    <section class="content-header">
        <br>
        <h1 class="text-center">
        VENTA DE PRODUCTOS
        </h1>
    </section>


    <!-- Main content -->

    <section>
    <div class="col-md-12">
        <div class="col-md-1"></div>
        <div class="col-md-10 section-bbb">
            <br>
            <?php if($this->session->flashdata("error")):?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-check"></i> <?php echo $this->session->flashdata("error");?></p>
            </div>
            <?php endif;?>
            <br>
                <?php echo form_open_multipart('venta/agregardb'); ?>
                <form id="form-guardarVenta">
                <label for="potencia">1. Seleccione al Cliente:</label>
                
                    <div class="form-group">
                        <div class="col-md-1">
                            <label for="potencia">Buscar</label>
                            <span class="input-group-btn">
                                <button class="btn btn-round btn btn-primary" type="button" data-toggle="modal" data-target="#modal-defaul" ><span class="fa fa-search"></span>....</button>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <div class=form-group>
                                <label for="potencia">Cliente </label>
                                <input type="hidden" name="idCliente" id="idCliente">
                                <input type="text" class="form-control"  required id="cliente" readonly></div >
                            
                        </div>
                        <div class="col-md-5">
                            <div class=form-group>
                                <label for="potencia">NIT </label>
                                <input type="text" class="form-control" required  id="nit" readonly>
                            
                        </div>
                    </div>
                
                <br><br><br><br><br><br>
                <label for="potencia">2. Seleccione el Producto:</label>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="potencia">Buscar Producto</label>
                            <div class="input-group barcode">
                                <div class="input-group-addon">
                                    <i class="fa fa-search"></i>
                                </div>
                                <input type="text" class="form-control" id="inputProductoVenta" placeholder="Buscar por codigo o nombre de producto">
                            </div>
                        </div>
                    </div> 
                    <br>
                    
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="tbventas" class="table table-striped table-inverse ">   
                            <thead class="thead-inverse">

                                    <th style="width: 5%">IMAGEN</th>
                                    <th>PRODUCTO</th>                                            
                                    <th>STOCK MAX</th>
                                    <th>PRECIO/Bs</th>
                                    <th>CANTIDAD</th>
                                    <th>IMPORTE</th>
                                
                                <th style="width: 130px"></th>

                                </tr>
                            </thead>
                            <tbody>
                               



                            </tbody>
                        </table>
                    </div>
                </div>
                    <br>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">Total:</span>
                                <input type="text" class="form-control" name="total" readonly="readonly">
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="text-center">
                        <center>
                        <div class="input-group">
                            <button type="submit" id="btn-guardar-venta" class="btn btn-round btn-primary btn-guardar" disabled="disabled"><i class="fa fa-save"></i> Confirmar Venta</button>
                            
                            <a href="<?=base_url()?>venta/listaVenta" class="btn btn-round btn-danger" type="submit">Cancelar <i class="fa fa-close"></i></a>
                
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                       
                </div>
            </div>         
            </form>
        </div>
        <div class="col-md-1"></div>
        </div>
    </div> 
    </section>
</div>


</div>
</div>





<div class="modal fade" id="modal-defaul">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">CLIENTES</h4>
            </div>
            <div class="modal-body">

            <center><section class="content-header">
                <?php echo form_open_multipart('cliente/agregarClie'); ?>
                    <button type="submit" class="btn btn-round btn-primary">Agregar Un Nuevo Cliente <i class="fa fa-plus "></i></button>
                <?php echo form_close(); ?>
            </section>


                <div class="table-responsive">
                <table class="table table-striped table-inverse " id="tabel">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>RAZON SOCIAL</th>
                            <th>NIT-CI</th>
                            <th>OPCIÓN</th>
                        </tr>
                    </thead>
                     <tbody>
                        <?php
                        $indice=1;
                        foreach ($cliente->result() as $row) {
                        ?>
                    <tr>
                    <td> <?php echo $indice;?></td>
                    <td><?php echo $row->razonSocial;?></td>
                    <td><?php echo $row->nit;?></td>
                        
                    <?php $datacliente = $row->idCliente."*".$row->razonSocial."*".$row->nit;?>
                        
                    <td>
                        <button type="button" class="btn btn-round btn-danger btn-check" value="<?php echo $datacliente;?>">
                        <i class="fa fa-check-square-o"></i>
                        </button>
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
            <center><div class="modal-footer">
                <button type="button" class="btn btn-round btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            </div>
        </div>          
    </div>
</div>







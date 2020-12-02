
<div class="col-md-12">
    <div class="form-group text-center col-md-4">
		<p><img src="<?php echo base_url();?>assets/template/panelCel/images/poterr.jpg" height="200" width="150"> </p>
        
    </div>

    <div class="form-group text-center col-md-8">
        SENDING CLEAN CALIDAD EN PRODUCTOS
        <br>
		Calle Luis Montaño Milan entre 
    <br>
     Av.Segunda y Parque Villa Victoria
        <br>
		Cochabamba-Bolivia
        <br>
    Tel. 4378905
	</div>
</div>
<hr>
	<div class="form-group text-center">
		<label for="">RECIBO</label><br>000<?php echo $venta->idVenta;?>
	</div>
    
    <div class="form-group col-md-10">
		<p><b>Cliente: </b><?php echo $venta->razonSocial;?></p>
		<p><b>NIT: </b><?php echo $venta->nit;?></p>
		<p><b>Fecha: </b><?php echo $venta->fechaRegistro;?></p>
	</div>
      

                 <div class="table-responsive">
                   <table class="table table-striped table-inverse ">
                                
                       <thead>
                           <tr>
                               <th>CODIGO</th>
                               <th>PRODUCTO</th> 
                               <th>P/U</th> 
                               <th>CANTIDAD</th>
                               <th>IMPORTE</th>
                            
                           </tr>
                       </thead>
                        <tbody>
                          <?php
                           foreach ($detalleventa->result() as $row) {
                           ?>
                       <tr>
                           
                           <td><?php echo $row->codigo; ?></td>
                           <td><?php echo $row->nombreProducto; ?></td>                               
                           <td><?php echo $row->precio; ?></td>
                           <td><?php echo $row->cantidad; ?></td>
                           <?php $importe= $row->cantidad*$row->precio; ?>
                           <td><?php echo $importe; ?></td>
                       </tr>
        
                         <?php
                         }
                         ?>  
                       </tbody>
                       <tfoot>
                        <th colspan="4" class="text-right">Importe Total Bs:</th>
                            <td><?php echo $venta->total; ?></td>
                        
                        <hr>
                        </tfoot>
                   </table>
                   </div>
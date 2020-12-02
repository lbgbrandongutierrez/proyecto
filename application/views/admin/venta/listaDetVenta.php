
                 <div class="table-responsive  section-bggg">
                   <table class="table table-striped table-inverse ">
                                
                       <thead>
                           <tr>
                               <th style="width: 5%">#</th>
                               <th>IMAGEN</th>
                               <th>PRODUCTO</th>      
                               <th>PRECIO/Bs</th>
                               <th>CANTIDAD</th>
                            
                           </tr>
                       </thead>
                        <tbody>
                          <?php
                           $indice=1;
                           foreach ($detalleventa->result() as $row) {
                           ?>
                       <tr>
                           <td><?php echo $indice; ?></td>
                           <td><a href="<//?=base_url().'assets/ImagenesBDD/productos/picture/'.$row->imagen;?>" target="_blank"><img src="<?=base_url().'assets/ImagenesBDD/productos/picture/'.$row->imagen;?>" width="50" ></a></td>
                           
                           <td><?php echo $row->nombreProducto; ?></td>                               
                           <td><?php echo $row->precio; ?></td>
                           <td><?php echo $row->cantidad; ?></td>
                       </tr>
        
                         <?php
                         $indice++;
                         }
                         ?>  
                       </tbody>
                   </table>
                   </div>
              
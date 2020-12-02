<div class="site-section">
        <div class="container">


            <section class="content-header">
                <center><h1>
                  MODIFICANDO DATOS DE PRODUCTO
                </h1>
            </section>
            <a href="<?php echo base_url();?>index.php/producto/listaProducto">Ir atras</a>
            <!-- Main content -->
            <section class="content">
                <div class="col-md-12 section-bbb">
                                <?php
                                foreach ($codigo->result() as $row) {
                                ?>
                                <?php echo form_open_multipart('producto/modificardb'); ?>
                            
                                <form>
                                    <div class=form-group>
                                        <input type="hidden" name="idProducto" value="<?php echo $row->idProducto; ?>">
                                     </div >

                                     <div class="col-md-4">
                                    <div class=form-group>
                                        <!--<label for="imagen">Imagen: </label>-->
                                        
                                        <a href="#" class="thumbnail">
                                             <img src="<?=base_url()?>assets/ImagenesBDD/productos/picture/<?=$row->imagen?>" alt="imagen">
                                        </a>
                                        <input type="file" name="fotopost">                            
                                        <input type="hidden" name="filelama" value="<?=$row->imagen?>">
                                    </div >  
                                    </div >
                                     <div class="col-md-6">
                                    <div class=form-group>
                                        <label for="categori">Categoria: </label>
                                        <select name="categori" class="form-control" id="categori" >
                                           
                                            
                                            <?php foreach($categoria as $categori):?>
                                            <?php if($categori->idCategoria == $producto->idCategoria):?>
                                            
                                            <option value="<?php echo $categori->idCategoria;?>" selected ><?php echo $categori->nombreCategoria;?></option>
                                            <?php else:?>
                                            <option value="<?php echo $categori->idCategoria;?>" ><?php echo $categori->nombreCategoria;?></option>
                                            <?php endif; ?>
                                            <?php endforeach;?>




                                        </select> 
                                    </div >
                                    </div >

                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="codigo">Codigo: </label>
                                        <input type="text" name="codigo" placeholder="Ingrese el codigo.."class="form-control" id="codigo" pattern="[A-Za-z0-9 ]+"maxlength="15" required="" title="Solo puede contener letras y números."value="<?php echo $row->codigo; ?>">
                                    </div >
                                    </div >

                                    

                                    <br>
                                    <div class="col-md-6">
                                    <div class=form-group>
                                        <label for="nombreProducto">Nombre: </label>
                                        <input type="text" name="nombreProducto" placeholder="Ingrese el nombre de producto.."class="form-control" id="nombreProducto" onkeyup = "this.value=this.value.toUpperCase()" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ0-9 ]+" maxlength="50"required="" title="Solo puede contener caracteres alfaveticos." value="<?php echo $row->nombreProducto; ?>">
                                    </div >
                                    </div > 

                                  

                                    <div class="col-md-6">
                                    <div class=form-group>
                                        <label for="descripcion">Descripcion: </label>
                                        <input type="text" name="descripcion" placeholder="Ingrese la descripcion"class="form-control" id="descripcion" pattern="[A-Za-z0-9 ]+"maxlength="10" required="" title="Solo puede contener números."value="<?php echo $row->descripcion; ?>">
                                    </div > 
                                    </div >

                                    <div class="col-md-3">
                                    <div class=form-group>
                                        <label for="peso">Peso: </label>
                                        <input type="text" name="peso" placeholder="Ingrese el peso"class="form-control" id="peso" onkeyup = "this.value=this.value.toUpperCase()" pattern="[0-9 ]+" maxlength="5"required="" title="Solo puede contener números." value="<?php echo $row->peso; ?>">
                                    </div >
                                    </div >

                                  
                                    <br>

                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label class="col-md-12" for="precioCompra">Precio de Compra: </label>
                                        <div class="col-md-11">
                                        <input type="text" name="precioCompra" placeholder="Ingrese el precio.."class="form-control" id="precioCompra" pattern="[A-Za-z0-9. ]+"maxlength="10" required="" title="Solo puede contener números y 00.00 bs." value="<?php echo $row->precioCompra; ?>">
                                        </div >
                                        <label for="stock">-Bs.</label>
                                    </div > 
                                    </div >

                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label class="col-md-12" for="precioVenta">Precio de Venta: </label>
                                        <div class="col-md-11">
                                        <input type="text" name="precioVenta" placeholder="Ingrese el precio.."class="form-control" id="precioVenta" pattern="[A-Za-z0-9. ]+"maxlength="10" required="" title="Solo puede contener números y 00.00 bs." value="<?php echo $row->precioVenta; ?>">
                                        </div >
                                        <label  for="stock">-Bs.</label>
                                        
                                    </div >
                                    </div >

                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label class="col-md-12" for="stock">Stock: </label>
                                        <div class="col-md-10">
                                        <input type="text" name="stock" placeholder="Ingrese el stock.."class="form-control" id="stock" pattern="[A-Za-z0-9]+" maxlength="10"required="" title="Solo puede contener números y 00.00 bs." value="<?php echo $row->stock; ?>">
                                        </div >
                                        <label for="und">-Und.</label>
                                    </div >
                                    </div >
                                    
                                    
                                    <div class="col-md-12">
                                    <br>
                                    <br>
                                    <center><div>
                
                                        <button type="submit" class="btn btn-round btn-primary">Registrar</button>
                                        <?php echo form_close(); ?>

                                        <a href="<?=base_url()?>index.php/producto/listaProducto" class="btn btn-round btn-danger" type="submit">Cancelar</a>
                                    </div >
                                    <br> 
                                    </div >

                                    <?php echo form_close(); ?>
                                    <?php
                                    }
                                    ?>
                                 </form>
                </div>
                        
            </section>
            <!-- /.content -->
        </div>


    </div>
</div>
       

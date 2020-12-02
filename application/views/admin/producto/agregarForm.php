<div class="site-section">
    <div class="container">


            <section class="content-header">
                <a href="<?php echo base_url();?>index.php/producto/listaProducto">Ir atras</a>
            </section>
            <section class="content-header">
               <center><h1>
                REGISTRO DE UN NUEVO PRODUCTO
                </h1>
            </section>

           
            <section class="content">
                        <div class="col-md-12 section-bbb">
                            <br>
                                <?php if($this->session->flashdata("error")):?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <p><i class="icon fa fa-check"></i> <?php echo $this->session->flashdata("error");?></p>
                                </div>
                                <?php endif;?>

                                <?php echo form_open_multipart('producto/agregardb'); ?>
                                <div>

                                <form>
                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label for="categori">Categoria: </label>
                                        <select name="categori" class="form-control" id="categori" >
                                            <?php foreach($categoria as $categori):?>
                                                <option value="<?php echo $categori->idCategoria;?>"><?php echo $categori->nombreCategoria; ?></option>
                                            <?php endforeach;?> 
                                        </select> 
                                    </div >
                                    </div >

                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="codigo">Codigo: </label>
                                        <input type="text" name="codigo" placeholder="Ingrese el codigo.."class="form-control" id="codigo" value="<?php echo set_value("codigo");?>" pattern="[A-Za-z0-9 ]+" maxlength="15" required="" title="Solo puede contener letras y números.">
                                    </div >
                                    </div >

                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label for="imagen">Imagen: </label>
                                        
                                        <input type="file" name="fotopost">
                                    </div >  
                                    </div >

                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                    <div class=form-group>
                                        <label for="nombreProducto">Nombre: </label>
                                        <input type="text" name="nombreProducto" placeholder="Ingrese el nombre de producto.."class="form-control" id="nombreProducto" onkeyup = "this.value=this.value.toUpperCase()" value="<?php echo set_value("nombreProducto");?>" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ0-9 ]+" maxlength="30" required="" title="Solo puede contener caracteres alfaveticos." >
                                        <?php echo form_error("nombreProducto","<span class='help-block'>","</span>");?>
                                    </div >
                                    </div > 

                                    <div class="col-md-6">
                                    <div class=form-group>
                                        <label for="descripcion">Descripcion: </label>
                                        <input type="text" name="descripcion" placeholder="Ingrese la descripcion"class="form-control" id="descripcion" onkeyup = "this.value=this.value.toUpperCase()" value="<?php echo set_value("descripcion");?>" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ0-9]+" maxlength="30" required="" title="Solo puede contener números.">
                                    </div > 
                                    </div >
                                    <br>
                                    <br>

                                    <div class="col-md-3">
                                    <div class=form-group>
                                        <label for="peso">Peso: </label>
                                        <input type="text" name="peso" placeholder="Ingrese el peso.."class="form-control" id="peso" value="<?php echo set_value("peso");?>" pattern="[0-9 ]+" maxlength="5" required="" title="Solo puede contener números." >
                                    </div >
                                    </div > 

                                    <br>

                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label class="col-md-12" for="precioCompra">Precio de Compra: </label>
                                        <div class="col-md-11">
                                        <input type="text" name="precioCompra" placeholder="Ingrese el precio.."class="form-control" id="precioCompra" value="<?php echo set_value("precioCompra");?>" pattern="[0-9. ]+"min="1" maxlength="10" required="" title="Solo puede contener números y 00.00 bs." >
                                        </div >
                                        <label for="stock">-Bs.</label>
                                    </div > 
                                    </div >

                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label class="col-md-12" for="precioVenta">Precio de Venta: </label>
                                        <div class="col-md-11">
                                        <input type="text" name="precioVenta" placeholder="Ingrese el precio.."class="form-control" id="precioVenta" value="<?php echo set_value("precioVenta");?>" pattern="[0-9. ]+" min="1" required="" title="Solo puede contener números y 00.00 bs." >
                                        </div >
                                        <label  for="stock">-Bs.</label>
                                        
                                    </div >
                                    </div >

                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label class="col-md-12" for="stock">Stock: </label>
                                        <div class="col-md-10">
                                        <input type="text" name="stock" placeholder="Ingrese el stock.."class="form-control" id="stock" value="<?php echo set_value("stock");?>" pattern="[0-9.\s]+" min="1" required="" title="Solo puede contener números" >
                                        </div >
                                        <label for="und">-Und.</label>
                                    </div >
                                    </div >
                                    
                                    
                                    <div class="col-md-12">
                                    <br>
                                    
                                    <center><div>
                
                                        <button type="submit" class="btn btn-round btn-primary">Registrar</button>
                                        <?php echo form_close(); ?>

                                        <a href="<?=base_url()?>index.php/producto/listaProducto" class="btn btn-round btn-danger" type="submit">Cancelar</a>
                                    </div > <br>
                                    </div > 
                                    
                                </form>
                        </div>
                    
            </section>
            <!-- /.content -->
        </div>
    
    
    </div>
</div>
       

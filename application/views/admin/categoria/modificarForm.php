<div class="site-section">
        <div class="container">


            <section class="content-header">
                <h1 class="text-center">
                  MODIFICANDO
                </h1> 
            </section>
            <br>

            <section>
            <div class="col-md-12">
                <div class="col-md-3"></div>
                <div class="col-md-6 section-bgg">
                    <br>

                                <?php
                                foreach ($nombreCategoria->result() as $row) {
                                ?>
                                <?php echo form_open_multipart('categoria/modificardb'); ?>
                            
                                <form action="/action_page.php">
                                    <div class=form-group>
                                    <input type="hidden" name="idCategoria" value="<?php echo $row->idCategoria; ?>">
                                     </div >
                                    <div class=form-group>
                                        <label for="nombreCategoria">Categoria: </label>
                                        <input type="text" name="nombreCategoria" class="form-control" id="nombreCategoria" onkeyup = "this.value=this.value.toUpperCase()" maxlength="70" value="<?php echo $row->nombreCategoria; ?>"pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ-() ]+" required="" title="Solo puede contener caracteres alfavetico.">
                                    </div >        
                                    <div class=form-group>
                                        <label for="descripcion">Descripción: </label>
                                        <input type="text" name="descripcion" placeholder="Descripción del producto.."class="form-control" id="descripcion" onkeyup = "this.value=this.value.toUpperCase()" maxlength="100" value="<?php echo $row->descripcion; ?>" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ.,- ]+" required="" title="Solo puede contener caracteres alfavetico.">
                                    </div >         
                                    <hr>  
                                    <br>

                                    <center><div class=form-group>
                                    
                                        <button type="submit" class="btn btn-round btn-primary pull-center">Registrar</button>
                                        <?php echo form_close(); ?>
                                    
                                    <a href="<?=base_url()?>index.php/categoria/listaCategoria" class="btn btn-round btn-danger" type="submit">Cancelar</a>
                                    </div >  
                                          
                                    <?php
                                    }
                                    ?>
                                 </form>
                            </div>
                        </div>
                    <div class="col-md-3"></div>
                    </div>
                </div>     
            </section>
        </div>
    
    
    
    
    </div>
</div> 

<div class="site-section">
        <div class="container">


            <section class="content-header">
                <a href="<?php echo base_url();?>index.php/categoria/listaCategoria">Ir atras</a>
            </section>
            <section class="content-header">
                <center><h1>
                REGISTRO DE UN NUEVO CATEGORIA
                </h1>
            </section>
            <br>

            <section>
            <div class="col-md-12">
                <div class="col-md-3"></div>
                <div class="col-md-6 section-bgg">
                    <br>

                                <?php if($this->session->flashdata("error")):?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <p><i class="icon fa fa-ban"></i> <?php echo $this->session->flashdata("error");?></p>
                                </div>
                                <?php endif;?>

                                 <?php echo form_open_multipart('categoria/agregardb'); ?>
                                
                                 <div>
                                      
                                    <form method="POST">
                                    
                                        <div class="form-group">
                                            <label for="nombreCategoria">Categoria: </label>
                                            <input type="text" name="nombreCategoria" placeholder="Ingrese el nombre de la categoria.."class="form-control" id="nombreCategoria" value="<?php echo set_value("nombreCategoria");?>" onkeyup = "this.value=this.value.toUpperCase()" maxlength="70" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ-() ]+" required="" title="Solo puede contener caracteres alfavetico.">
                                            <?php echo form_error("nombreCategoria","<span class='help-block'>","</span>");?>
                                        </div >
                                        <div class=form-group>
                                            <label for="descripcion">Descripción: </label>
                                            <input type="text" name="descripcion" placeholder="Descripción de la categoria .."class="form-control" id="descripcion" value="<?php echo set_value("descripcion");?>" onkeyup = "this.value=this.value.toUpperCase()" maxlength="100" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ-()., ]+">
                                        </div >  
                                        <br>              
                                        <center><div>
                    
                                            <button type="submit" class="btn btn-round btn-primary">Registrar</button>
                                            <?php echo form_close(); ?>

                                            <a href="<?=base_url()?>index.php/categoria/listaCategoria" class="btn btn-round btn-danger" type="submit">Cancelar</a>
                                        </div > 
                                        <br> 
                                        
                                    </form>
                            </div>
                        </div>
                    <div class="col-md-3"></div>
                    </div>
                </div>     
            </section>
            <br>
        </div>


    </div>
</div> 
       

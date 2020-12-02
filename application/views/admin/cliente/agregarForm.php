<div class="site-section">
        <div class="container">


            <center><section class="content-header">
                <h1>
                REGISTRO DE UN NUEVO CLIENTE
                </h1>
            </section>
            <br>


            <section>
            <div class="col-md-12">
                <div class="col-md-3"></div>
                    <div class="col-md-6 section-bbb">
                    <br>

                                <?php if($this->session->flashdata("error")):?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <p><i class="icon fa fa-ban"></i> <?php echo $this->session->flashdata("error");?></p>
                                </div>
                                <?php endif;?>

                                 <?php echo form_open_multipart('cliente/agregardb'); ?>
                                
                                 <div>
                                      
                                    <form method="POST">
                                    
                                        <div class="form-group">
                                            <label for="razonSocial">Razon Social: </label>
                                            <input type="text" name="razonSocial" placeholder="Ingrese Razon Social.."class="form-control" id="razonSocial" value="<?php echo set_value("razonSocial");?>" onkeyup = "this.value=this.value.toUpperCase()" maxlength="70"pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ0-9 ]+" required="" title="Solo puede contener caracteres alfavetico.">
                                        </div >
                                        <div class=form-group>
                                            <label for="nit">NIT-CI: </label>
                                            <input type="text" name="nit" placeholder="Descripción de la nit.."class="form-control" id="nit" value="<?php echo set_value("nit");?>" onkeyup = "this.value=this.value.toUpperCase()" maxlength="20" pattern="[A-Z0-9 ]+" title="Solo puede contener caracteres numéricos." >
                                            <?php echo form_error("nit","<span class='help-block'>","</span>");?>
                                        </div > 
                                        <br>               
                                        <center><div>
                    
                                            <button type="submit" class="btn btn-round btn-primary">Registrar</button>
                                            <?php echo form_close(); ?>

                                            <a href="<?=base_url()?>index.php/cliente/listaCliente" class="btn btn-round btn-danger" type="submit">Cancelar</a>
                                        </div > 
                                        <br> 
                                        
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
       

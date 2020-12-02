<div class="site-section">
        <div class="container">


            <center><section class="content-header">
                <h1>
                  MODIFICANDO EL CLIENTE 
                </h1> 
            </section>
            <br>

            <section>
                <div class="col-md-12">
                    <div class="col-md-3"></div>
                        <div class="col-md-6 section-bbb">
                        <br>

                                <?php
                                foreach ($razonSocial->result() as $row) {
                                ?>
                                <?php echo form_open_multipart('cliente/modificardb'); ?>
                            
                                <form action="/action_page.php">
                                    <div class=form-group>
                                    <input type="hidden" name="idCliente" value="<?php echo $row->idCliente; ?>">
                                     </div >
                                    <div class=form-group>
                                        <label for="razonSocial">Razon Social: </label>
                                        <input type="text" name="razonSocial" class="form-control" id="razonSocial" value="<?php echo $row->razonSocial; ?>" onkeyup = "this.value=this.value.toUpperCase()" maxlength="70" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ0-9 ]+" required="" title="Solo puede contener caracteres alfavetico.">
                                    </div >        
                                    <div class=form-group>
                                        <label for="nit"> NIT-CI: </label>
                                        <input type="text" name="nit" class="form-control" id="nit" value="<?php echo $row->nit; ?>" onkeyup = "this.value=this.value.toUpperCase()" maxlength="20"pattern="[A-Z0-9 ]+" title="Solo puede contener caracteres alfanumerico.">
                                    </div >         
                                    <hr>                   
                                    <center><div class=form-group>
                                    
                                        <button type="submit" class="btn btn-round btn-primary pull-center">Registrar</button>
                                        <?php echo form_close(); ?>
                                    
                                    <a href="<?=base_url()?>index.php/cliente/listaCliente" class="btn btn-round btn-danger" type="submit">Cancelar</a>
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
       

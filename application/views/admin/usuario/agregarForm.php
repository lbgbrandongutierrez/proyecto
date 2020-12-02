<div class="site-section">
    <div class="container">

            <section class="content-header">
                <h1 class="text-center">
                NUEVO USUARIO
                </h1>
                <br>
                
            </section>

           
            <section>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                        <div class="col-md-8 section-bgg">
                            <br>
                                <small><b>Ingrese los Siguentes Datos.</b></small>

                                <?php if($this->session->flashdata("error")):?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <p><i class="icon fa fa-check"></i> <?php echo $this->session->flashdata("error");?></p>
                                </div>
                                <?php endif;?>

                                <?php echo form_open_multipart('usuarios/agregardb'); ?>
                                <div>

                                <form>
                                    <br>
                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label for="nombre">Nombre: </label>
                                        <input type="text" name="nombre" placeholder="Ingrese nombre..."class="form-control" id="nombre" value="<?php echo set_value("nombre");?>"  onkeyup = "this.value=this.value.toUpperCase()" required maxlength="30" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+[A-Za-zñÑáéíóúÁÉÍÓÚ]$"  title="Solo puede contener caracteres alfabeticos." >
                                    </div > 
                                    </div >

                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label for="primerApellido">Primer Apellido: </label>
                                        <input type="text" name="primerApellido"  placeholder="Ingrese el primer apellido.."class="form-control" id="primerApellido" value="<?php echo set_value("primerApellido");?>" onkeyup = "this.value=this.value.toUpperCase()" required maxlength="20" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+[A-Za-zñÑáéíóúÁÉÍÓÚ]$" title="Solo puede contener caracteres alfabeticos." >
                                    </div > 
                                    </div >                                

                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label for="segundoApellido">Segundo Apellido: </label>
                                        <input type="text" name="segundoApellido" placeholder="Indrese el segundo apellido.."class="form-control" id="segundoApellido" value="<?php echo set_value("segundoApellido");?>" onkeyup = "this.value=this.value.toUpperCase()" required maxlength="20" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+[A-Za-zñÑáéíóúÁÉÍÓÚ]$" title="Solo puede contener caracteres alfabeticos." >
                                    </div > 
                                    </div >
                                    <br>

                                    
                                    <div class="col-md-4">
                                    <!-- <div class=form-group <-?php echo !empty(form_error("ci"))? 'has-error':'';?>> -->
                                        <div class=form-group>
                                        <label for="ci">Carnet de Identidad: </label>
                                        <input type="text" name="ci" placeholder="Ingrese su número de identificacion C.I..."class="form-control" id="ci" value="<?php echo set_value("ci");?>"  is_unique maxlength="20" pattern="[A-Za-z0-9-\s]+" required title="Solo puede contener caracteres alfa númericos." >
                                        <?php echo form_error("ci","<span class='help-block'>","</span>");?>
                                    </div > 
                                    </div >

                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label for="telefono">Telefono/Celular: </label>
                                        <input type="text" name="telefono"   placeholder="Ingrese número de tel-cel..."class="form-control" id="telefono" value="<?php echo set_value("telefono");?>" pattern="^[7|6|4|3|2]\d{6,7}$" maxlength="10" required title="Solo puede contener caracteres númericos" >
                                    </div > 
                                    </div >                                

                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label for="roll">Categoria: </label>
                                        <select name="roll" class="form-control" id="roll" >
                                            <?php foreach($rol as $roll):?>
                                                <option value="<?php echo $roll->idRol;?>"><?php echo $roll->nombreRol; ?></option>
                                            <?php endforeach;?> 
                                        </select> 
                                    </div >
                                    </div >
                                    <br>
                               
                                    <div class="col-md-12">
                                    <div class=form-group>
                                        <label for="direccion">Dirección: </label>
                                        <input type="text" name="direccion" placeholder="Describa su Direccion...."class="form-control" id="direccion" value="<?php echo set_value("direccion");?>" onkeyup = "this.value=this.value.toUpperCase()" maxlength="70" pattern="^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ,.]+[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ,.\s]+[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ,.]$" required="" title="Solo puede contener caracteres alfa númericos." >
                                    </div >
                                    </div >
                                    <div class="col-md-1">
                                    <div class=form-group>
                                        <label for="imagen">Imagen: </label>
                                        
                                        <input type="file" required name="fotopost">
                                    </div >  
                                    </div >

                                     

                            
                                    
                                    <div class="col-md-12">
                                        <br>
                                        <center><div>

                                            <button type="submit" class="btn btn-round btn-primary">Registrar</button>
                                            <?php echo form_close(); ?>

                                            <a href="<?=base_url()?>index.php/usuarios/listaUsuario" class="btn btn-round btn-danger" type="submit">Cancelar</a>
                                        </div > </center> 
                                        <br>
                                    </div >
                                    
                                </form>
                                
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
    
    
    </div>
</div>
       



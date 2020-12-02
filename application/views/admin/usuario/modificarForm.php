<div class="site-section">
    <div class="container">


            <section class="content-header">
                <h1 class="text-center">
                  MODIFICANDO DATOS DEL USUARIO
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                        <div class="col-md-8 section-bgg">
                            <br>
                                <?php
                                foreach ($nombre->result() as $row) {
                                ?>
                                <?php echo form_open_multipart('usuarios/modificardb'); ?>
                            
                                <form>
                                    <div class=form-group>
                                        <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario; ?>">
                                     </div >
                                     <div class="col-md-12">
                                    <div class="form-group">
                                        <!--<label for="imagen">Imagen: </label>-->
                                        
                                        <a href="#" class="thumbnail">
                                             <img src="<?=base_url()?>assets/ImagenesBDD/usuarios/<?=$row->imagen?>" alt="imagen" style="width: 20%">
                                        </a>
                                        <!-- <input type="file" name="fotopost">                             -->
                                        <input type="hidden" name="filelama" value="<?=$row->imagen?>">
                                    </div >  
                                    </div >
                                    <br>

                                    <br>
                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label for="nombre">Nombre: </label>
                                        <input type="text" name="nombre" placeholder="Ingrese nombre..."class="form-control" id="nombre" onkeyup = "this.value=this.value.toUpperCase()" required maxlength="30" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+[A-Za-zñÑáéíóúÁÉÍÓÚ]$"  title="Solo puede contener caracteres alfabeticos." value="<?php echo $row->nombre; ?>">
                                    </div > 
                                    </div >

                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label for="primerApellido">Primer Apellido: </label>
                                        <input type="text" name="primerApellido" placeholder="Ingrese el primer apellido.."class="form-control" id="primerApellido" onkeyup = "this.value=this.value.toUpperCase()" required maxlength="20" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+[A-Za-zñÑáéíóúÁÉÍÓÚ]$" title="Solo puede contener caracteres alfabeticos." value="<?php echo $row->primerApellido; ?>">
                                    </div > 
                                    </div >                                

                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label for="segundoApellido">Segundo Apellido: </label>
                                        <input type="text" name="segundoApellido" placeholder="Indrese el segundo apellido.."class="form-control" id="segundoApellido" onkeyup = "this.value=this.value.toUpperCase()" required maxlength="20" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+[A-Za-zñÑáéíóúÁÉÍÓÚ]$"  title="Solo puede contener caracteres alfabeticos." value="<?php echo $row->segundoApellido; ?>">
                                    </div > 
                                    </div >
                                    <br>

                                    
                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label for="ci">Carnet de Identidad: </label>
                                        <input type="text" name="ci" placeholder="Ingrese su número de identificacion C.I..."class="form-control" id="ci" maxlength="15" pattern="[A-Za-z0-9-\s]+" required title="Solo puede contener caracteres alfa númericos." value="<?php echo $row->ci; ?>">
                                    </div > 
                                    </div >

                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label for="telefono">Telefono/Celular: </label>
                                        <input type="text" name="telefono" placeholder="Ingrese número de tel-cel..."class="form-control" id="telefono" pattern="^[7|6|4|3|2]\d{6,7}$" maxlength="10" required title="Solo puede contener caracteres númericos" value="<?php echo $row->telefono; ?>">
                                    </div > 
                                    </div >                                

                                    <div class="col-md-4">
                                    <div class=form-group>
                                        <label for="roll">Rol: </label>
                                        <select name="roll" class="form-control" id="roll" >
                                           
                                            
                                            <?php foreach($rol as $roll):?>
                                            <?php if($roll->idRol == $usuario->idRol):?>
                                            
                                            <option value="<?php echo $roll->idRol;?>" selected ><?php echo $roll->nombreRol;?></option>
                                            <?php else:?>
                                            <option value="<?php echo $roll->idRol;?>" ><?php echo $roll->nombreRol;?></option>
                                            <?php endif; ?>
                                            <?php endforeach;?>

                                        </select> 
                                    </div >
                                    </div >
                               
                                    <div class="col-md-12">
                                    <div class=form-group>
                                        <label for="direccion">Dirección: </label>
                                        <input type="text" name="direccion" placeholder="Descriva su Direccion...."class="form-control" id="direccion" onkeyup = "this.value=this.value.toUpperCase()" maxlength="70" pattern="^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ,.]+[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ,.\s]+[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ,.]$" required="" title="Solo puede contener caracteres alfa númericos." value="<?php echo $row->direccion; ?>">
                                    </div >
                                    </div >

                                    
                                    <div class="col-md-12">
                                    <br>
                                    <center><div>
                
                                        <button type="submit" class="btn btn-round btn-primary">Registrar</button>
                                        <?php echo form_close(); ?>

                                        <a href="<?=base_url()?>index.php/usuarios/listaUsuario" class="btn btn-round btn-danger" type="submit">Cancelar</a>
                                    </div > 
                                    <br>
                                    </div >
                                    <?php
                                    }
                                    ?>
                                 </form>
                            
                        
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </section>
        </div>
        
    
    </div>
</div>

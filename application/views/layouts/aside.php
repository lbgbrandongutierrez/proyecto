






<!-- =============================================== -->
    
<!--
<div class="modal fade" id="modal-password">
  
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <center><h4 class="modal-title">CAMBIAR CONTRASEÑA</h4></center>
      </div>
      <form action="#" method="POST" id="form-camb-password">
      <div class="modal-body">

            <input type="hidden" name="idusuario">
            <div class="error"></div>
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div>
                           <center><img align="center" src="<?=base_url().'assets/ImagenesBDD/usuarios/'. $this->session->userdata("imagen");?>" alt="Avatar" width="150" height="150" class="img-thumbnail img-circle">
                           <br>
                           <span align="center" class="user-block-name item-text"><b>Nombre: </b> <?php echo $this->session->userdata("nombre"," ","primerApellido")?></span>
                           <br>
                           <span align="center" class="user-block-name item-text"><b>Apellidos: </b><?php echo $this->session->userdata("primerApellido")?></span>
                           <span align="center" class="user-block-name item-text"><?php echo $this->session->userdata("segundoApellido")?></span>
                        </div>
                    </div>

                    <div class="col-md-8">
                         <div class="form-group">
                            <center><label for="">Contraseña Actual:</label>
                            <input type="password" class="form-control" name="actPassword" id="actPassword" placeholder="Contraseña Actual" required>
                        </div> 
                        <div class="form-group">
                            <center> <label for="">Nueva Contraseña:</label>
                            <input type="password" class="form-control" name="nuevPassword" id="nuevPassword" placeholder="Nueva Contraseña" required>
                        </div>
                        <div class="form-group">
                            <center> <label for="">Repetir Nueva Contraseña:</label>
                            <input type="password" class="form-control" name="repPassword" id="nuevPassword" placeholder="Repetir Nueva Contraseña" required>
                        </div>
                        <center><button type="submit" class="btn btn-round btn btn-success">Guardar</button>
                    </div>
                </div>
      </div>
      
      </form>
    </div>
  </div>
</div>
-->


      

<div class="modal fade" id="modal-cerrarSeccion">
  <div class="modal-dialog">
    <div class="modal-content">
   
      <form action="#">
      <div class="modal-body">
                <div class="col-md-12">
                    
                        <div>
                           <center><img align="center" src="<?=base_url().'assets/ImagenesBDD/usuarios/'. $this->session->userdata("imagen");?>" alt="Avatar" width="150" height="150" class="img-thumbnail img-circle">
                           <br><br>
                        </div>
                    
                        <center><h4 class="modal-title"><b>ESTA SEGURO/A DE CERRAR LA SESIÓN...?</b></h4>
                        <br>
                        
                </div>
      </div>
      <div>
        <br>
        <br>
        <center><a href="<?=base_url()?>index.php/usuarios/logout" class="btn btn-round btn-danger" type="submit">........<b>SI</b>........</a>
        <br> 
        <br>    
      ´</div>
      
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="modal-cambImagen">
  <div class="modal-dialog">
    <div >
    <center><h1 ><b>CAMBIAR PERFIL</b></h1>
      
      <?php echo form_open_multipart('usuarios/cambImagen'); ?>
      <form action="#">
      <div class="modal-body">
            <input type="hidden" name="idusuario">
            <div class="error"></div>
                <div class="col-md-12">
                   
                        <div>
                           <center><img align="center" src="<?=base_url().'assets/ImagenesBDD/usuarios/'. $this->session->userdata("imagen");?>" alt="Avatar" width="150" height="150" class="img-thumbnail img-circle">
                           <br>
                           <div class="col-md-4"></div>
                                <div class="col-md-4">
                                <center><input type="file" required name="fotopost">                            
                                <center><input type="hidden" name="filelama" value="<?php echo $this->session->userdata("imagen")?>">
                                    
                                </div>
                           <div class="col-md-4"></div>
                        </div > 
                        <br>
                        <br> 
                        <div class="col-md-12">
                            <div>
                                <input type="hidden" name="idUsuario" value="<?php echo $this->session->userdata("idUsuario"); ?>">
                                <center><button class="btn btn-round btn btn-warning  " type="submit" name="action"> Guardar <i class="fa fa-pencil"> </i></button>
                                <?php echo form_close(); ?>
                            </div>
                        </div> 
                </div>
        </div>
      
      </form>
    </div>
  </div>
</div>  






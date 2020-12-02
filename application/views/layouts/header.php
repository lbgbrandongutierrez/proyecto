<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SENDING CLEAN</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/template/dist/css/AdminLTE.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/dist/css/skins/_all-skins.min.css">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <!-- Template Main CSS File -->
  


    <!-- panel de usuario logueo y los botones con estilo -->
    <!--<link rel="stylesheet" href="<?=base_url()?>assets/libreria/panell/css/normalize.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/libreria/panell/css/sweetalert2.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/libreria/panell/css/material.min.css">-->
	<link rel="stylesheet" href="<?=base_url()?>assets/template/panelLogin/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/template/panelLogin/css/main.css">
	<!--<script>window.jQuery || document.write('<script src="<?=base_url()?>assets/libreria/panell/js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="<?=base_url()?>assets/libreria/panell/js/sweetalert2.min.js" ></script>
	<script src="<?=base_url()?>assets/libreria/panell/js/main.js" ></script>-->
    <!--De narvar para dar pinta a lavel-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/bootstrap/css/bootstrap.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/datatables.net-bs/css/dataTables.bootstrap.css"> 
    <!-- AutoComplet en el imput y el otro para select -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/select2/dist/css/select2.min.css">

    <!-- para mensajes de alert de error -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/alertify/themes/alertify.core.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/alertify/themes/alertify.default.css">
    <!-- para la tabla de reportes -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/datatables-export/css/buttons.dataTables.min.css">

            <!-- para el catalogo -->
            <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/template/hidee/css/magnific-popup.css"> -->
			<!--<link rel="stylesheet" href="<?php echo base_url();?>assets/template/hidee/css/main.css">-->
<!-- para el narvar celeste -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/panelCel/fonts/icomoon/style.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/template/panelCel/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/panelCel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/panelCel/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/panelCel/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/estilos.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" >

  <div class=" bg-primary"  >

    <div class="site-mobile-menu site-navbar-target" >
                <div class="col-lg-6 text-left">
            <a href="index.html">
              <img src="<?php echo base_url();?>assets/template/panelCel/images/poterr.png" width="250" height="70" alt="Image" class="img-fluid">
            </a>
          </div>
      <div class="site-mobile-menu-header">

        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <div class="header-top bg-light">
      <div class="bg-primary"><!-- class=S container-->
        <div class="row align-items-center">

          <div class="col-lg-6 text-left">
            <a href="index.html">
              <img src="<?php echo base_url();?>assets/template/panelCel/images/poterr.png" width="350" height="100" alt="Image" class="img-fluid">
            </a>
          </div>
 
          <div class="col-lg-6 d-none d-lg-block text-right" >
             <button id="camb-imagen" value="<?php echo $this->session->userdata("idUsuario")?>" type="buttton"  class="btn btn-round btn btn-primary btn btn-default" data-toggle="modal" data-target="#modal-cambImagen"><i class="fa fa-picture-o"></i></button>
             <button id="camb-password" value="<?php echo $this->session->userdata("idUsuario")?>" type="buttton"  class="btn btn-round btn btn-primary btn btn-default" data-toggle="modal" data-target="#modal-password"><i class="fa fa-cogs"></i></button>
             <button type="buttton"  class="btn btn-round btn btn-primary btn btn-default" data-toggle="modal" data-target="#modal-cerrarSeccion"><i class="fa fa-power-off"></i></button>
             
             <span class="user-block-name"><?php echo $this->session->userdata("nombre")?></span>
             <span class="user-block-name"><b> </b><?php echo $this->session->userdata("primerApellido")?></span>
             <img src="<?=base_url().'assets/ImagenesBDD/usuarios/'. $this->session->userdata("imagen");?>" alt="Avatar" width="60" height="60" class="img-circle">
             <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
          
          </div>
                                    
          <!-- <div class="col-6 d-block d-lg-none text-right">
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
          </div> -->
        </div>
      </div>
       
    
    <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

      <div class="btn-primary">
        <div class="d-flex align-items-center">
          
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block text-center">
                <li>
                  <a class="fa fa-home" href="<?=base_url()?>index.php/Welcome/inicio" class="nav-link text-left">INICIO</a>
                </li>
                <li>
                  <a class="fa fa-pencil" href="<?=base_url()?>index.php/Welcome/mantenimiento" style="display:<?php if ($this->session->userdata("idRol")==5): ?>none<?php endif ?>" class="nav-link text-left ">REGISTROS</a>
                </li>
                <li>
                  <a class="fa fa-usd" href="<?=base_url()?>index.php/Welcome/ventas" class="nav-link text-left">VENTAS</a>
                </li>
                <li>
                   
                  <a class="fa fa-file-text"  href="<?=base_url()?>index.php/Welcome/reporte" style="display:<?php if ($this->session->userdata("idRol")==5): ?>none<?php endif ?>" class="nav-link text-left">REPORTES</a>
                </li>
                
                <li>
                  <a  class="fa fa-columns" href="<?=base_url()?>index.php/catalogo/listaCatalogo" class="nav-link text-left">CATÁLOGO</a>
                  
                </li>
                
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
          
         
        </div>
      </div>

    </div>
  
    
    
  </div>
</div>





















<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/template/panelLogin/css/normalize.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/template/panelLogin/css/sweetalert2.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/template/panelLogin/css/material.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/template/panelLogin/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/template/panelLogin/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/template/panelLogin/css/main.css">
	<script src="<?=base_url()?>assets/template/panelLogin/ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?=base_url()?>assets/template/panelLogin/js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="<?=base_url()?>assets/template/panelLogin/js/material.min.js" ></script>
	<script src="<?=base_url()?>assets/template/panelLogin/js/sweetalert2.min.js" ></script>
	<script src="<?=base_url()?>assets/template/panelLogin/js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="<?=base_url()?>assets/template/panelLogin/js/main.js" ></script>
</head>
<body>
	<div class="login-wrap cover">
		<div class="container-login">
		
			<p class="text-center" style="font-size: 80px;">
				<i class="zmdi zmdi-account-circle"></i>
			</p>
			<?php echo form_open_multipart('usuarios/validarusuario'); ?>
			
			<p class="text-center text-condensedLight"><b>INICIAR SESIÓN</b></p>

			<?php if($this->session->flashdata("error")):?>
              <center><div class="alert alert-danger" style="color: #000; background: #ff00004f; border-radius: 10px;">
                <p><?php echo $this->session->flashdata("error")?></p>
              </div>
            <?php endif; ?>
			
			
			<form >
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="text" name="userName">
				    <label class="mdl-textfield__label">Usuario</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="password" name="password" >
				    <label class="mdl-textfield__label">Password</label>
				</div>

				<!-- </?php echo form_open_multipart('usuarios/validarusuario'); ?> -->
				<button class="btn btn-round btn btn-info btn btn-default" style="color: #3F51B5; margin: 0 auto; display: block;"><b>INGRESAR</b></button>
				
				<?php echo form_close(); ?>

			</form>
			
		</div>
	</div>
</body>
</html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	

//todo esto es para seccion de usuario-login
	public function index()
	{
		if($this->session->userdata('userName'))
		{
			redirect('usuarios/panel','refresh');
		}
		else
		{	
		$this->load->view('login');
		}
	}
	public function validarusuario()
	{
		$userName=$_POST['userName'];
		$password=md5($_POST['password']);

		$consulta=$this->usuario_model->validar($userName,$password);

		if($consulta->num_rows()>0)
		{
			foreach ($consulta->result() as $row)
			{
				$this->session->set_userdata('userName', $row->userName);
				$this->session->set_userdata('idUsuario', $row->idUsuario);
				$this->session->set_userdata('nombre', $row->nombre);
				$this->session->set_userdata('primerApellido', $row->primerApellido);
				$this->session->set_userdata('segundoApellido', $row->segundoApellido);
				$this->session->set_userdata('idRol', $row->idRol);
				$this->session->set_userdata('imagen', $row->imagen);
				redirect('usuarios/panel','refresh');
			}
		}
		else
		{
			$this->session->set_flashdata("error","<h6>El usuario y/o contraseña son incorrectos</h6>");
			redirect('usuarios/index','refresh');
		}
	}
	public function panel()
	{
		if($this->session->userdata('userName'))
		{
			$this->load->view('layouts/header');
			$this->load->view('layouts/aside');
			$this->load->view('container');
			$this->load->view('layouts/footer');
		}
		else
		{
			redirect('usuarios/index','refresh');
		}	
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('usuarios/index','refresh');
	}

	//GRUD de usuario insetar, modificar, eliminar usuario
	public function listaUsuario()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$data['usuario']=$this->usuario_model->retornarUsuario();
		$this->load->view('admin/usuario/lista',$data);
		$this->load->view('layouts/footer');
	}

	public function agregar()
	{
		$data['rol']=$this->usuario_model->getRol();
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/usuario/agregarForm',$data);
		$this->load->view('layouts/footer');
	}


	public function agregardb()
	{
		$nombre=ucwords($_POST['nombre']);
		$primerApellido=ucwords($_POST['primerApellido']);
		$segundoApellido=ucwords($_POST['segundoApellido']);
		$ci=$_POST['ci'];
		$roll=$_POST['roll'];
		$telefono=$_POST['telefono'];
		$direccion=ucfirst($_POST['direccion']);

		$a=strtoupper(substr($nombre,0,1));
		$n=strtoupper($primerApellido);
		$c=$ci;
		
		$userName=$a.$c;
		$password=md5($c);


		$this->form_validation->set_rules("ci","CI", "required|is_unique[usuario.ci]");

		// $this->form_validation->set_rules($config);

				if($this->form_validation->run())
				{
				
									
					$config['upload_path'] = './assets/ImagenesBDD/usuarios/';
					$config['allowed_types'] = 'jpg|png|jpeg|gif';
					$config['max_size'] = '2048';  //2MB max
					$config['max_width'] = '4480'; // pixel
					$config['max_height'] = '4480'; // pixel
					$config['file_name'] = $_FILES['fotopost']['name'];

					//$this->upload->initialize($config);
					$this->load->library('upload',$config);

						if (!empty($_FILES['fotopost']['name'])) {
							if ( $this->upload->do_upload('fotopost') ) {
								$imagen = $this->upload->data();
									$data['nombre']=$nombre;
									$data['primerApellido']=$primerApellido;
									$data['segundoApellido']=$segundoApellido;
									$data['ci']=$ci;
									$data['idRol']=$roll;	
									$data['telefono']=$telefono;
									$data['direccion']=$direccion;
									$data['imagen']=$imagen['file_name'];	
									$data['userName']=$userName;
									$data['password']=$password;			
										
										
									$this->usuario_model->agregarUsuario($data);
							
								redirect("usuarios/listaUsuario",'refresh');
							}else {
							die("gagal upload");
							}
						}else {
								$this->session->set_flashdata("error","Seleccione la imagen");
								redirect("usuarios/agregar",'refresh');
						}




				}
				else
				{
					$this->agregar();
				}
		
	}


	public function modificar()
	{     
		
		$data['rol']=$this->usuario_model->getRol();

		$idUsuario=$_POST['idUsuario'];
		

		$data['nombre']=$this->usuario_model->recuperarUsuario($idUsuario);
		$data['primerApellido']=$this->usuario_model->recuperarUsuario($idUsuario);
		$data['segundoApellido']=$this->usuario_model->recuperarUsuario($idUsuario);
		$data['ci']=$this->usuario_model->recuperarUsuario($idUsuario);
		$data['idRol']=$this->usuario_model->recuperarUsuario($idUsuario);
		$data['telefono']=$this->usuario_model->recuperarUsuario($idUsuario);
		$data['direccion']=$this->usuario_model->recuperarUsuario($idUsuario);
		$data['imagen']=$this->usuario_model->recuperarUsuario($idUsuario);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/usuario/modificarForm',$data);
		$this->load->view('layouts/footer');
	}

	public function modificardb()
	{
        $idUsuario=$_POST['idUsuario'];
        
		$nombre=ucwords($_POST['nombre']);
		$primerApellido=ucwords($_POST['primerApellido']);
		$segundoApellido=ucwords($_POST['segundoApellido']);
		$ci=$_POST['ci'];
		$roll=$_POST['roll'];
		$telefono=$_POST['telefono'];
		$direccion=ucfirst($_POST['direccion']);

		$a=strtoupper(substr($nombre,0,1));
		$n=strtoupper($primerApellido);
		$c=$ci;
		
		$userName=$a.$c;
		$password=md5($c);


						$data['nombre']=$nombre;
						$data['primerApellido']=$primerApellido;
						$data['segundoApellido']=$segundoApellido;
						$data['ci']=$ci;
						$data['idRol']=$roll;	
						$data['telefono']=$telefono;
						$data['direccion']=$direccion;
						// $data['imagen']=$imagen['file_name'];	
						$data['userName']=$userName;
						$data['password']=$password;			
							

				// hapus foto pada direktori
		// 		@unlink($path.$_POST['filelama']);
					$this->usuario_model->modificarUsuario($idUsuario,$data);
					redirect('usuarios/listaUsuario','refresh');
		// 		}else {
		// 		die("gagal update");
		// 		}
		// 	}else {
		// 	echo "tidak masuk";
		// }

	}

	public function eliminardb()
	{
		$idUsuario=$_POST['idUsuario'];

		$nombre=ucwords($_POST['nombre']);
		$primerApellido=ucwords($_POST['primerApellido']);
		$segundoApellido=ucwords($_POST['segundoApellido']);
		$ci=$_POST['ci'];
		$telefono=$_POST['telefono'];

		 
		$data['nombre']=$nombre;
		$data['primerApellido']=$primerApellido;
		$data['segundoApellido']=$segundoApellido;
		$data['ci']=$ci;
		$data['telefono']=$telefono;
		

		$estado=0;
        $data['estado']=$estado;
        
        
		$this->usuario_model->eliminarUsuario($idUsuario,$data);
		redirect('usuarios/listaUsuario','refresh');

	
	}
	// para modificar imagen de perfil
	public function cambImagen()
	{
        $idUsuario=$this->session->userdata("idUsuario");
		$path = './assets/ImagenesBDD/usuarios/';


		// get foto
		$config['upload_path'] = './assets/ImagenesBDD/usuarios/';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $_FILES['fotopost']['name'];

		//$this->upload->initialize($config);		
		$this->load->library('upload',$config);

			if (!empty($_FILES['fotopost']['name'])) {
				if ( $this->upload->do_upload('fotopost') ) {
					$imagen = $this->upload->data(); 
						
						$data['imagen']=$imagen['file_name'];	
						
				// hapus foto pada direktori
				@unlink($path.$this->input->post("filelama"));
					$this->usuario_model->modificarUsuario($idUsuario,$data);
					redirect('usuarios/panel','refresh');
				}else {
				die("gagal update");
				}
			}else {
				$this->session->set_flashdata("error","Seleccione una imagen");
				redirect("usuarios/panel",'refresh');
		}

	}



		// para mosificar password
	public function cambPassword(){
		$actPassword =  md5($this->input->post("actPassword"));
		$id = $this->session->userdata("idUsuario");
		
		$nuevPassword = $this->input->post("nuevPassword");
		$repPassword = $this->input->post("repPassword");
		
		if ($this->usuario_model->comprobarPassword($actPassword)){
		//if($actPassword==$consulta)
			$data['password']=md5($nuevPassword);

			if($this->usuario_model->modificarUsuario($id,$data)){
				//echo "administrador/usuarios";
			}
			echo "0";
		}else{
    		echo "1";
    	}
	}


	//reestableser contraceña 
	public function restableserPassword()
	{
        $idUsuario=$_POST['idUsuario'];
		$ci=$_POST['ci'];
		$c=$ci;
		$password=md5($c);
		
		$data['password']=$password;

		$this->usuario_model->modificarUsuario($idUsuario,$data);
		redirect('usuarios/listaUsuario','refresh');
		
	}




}


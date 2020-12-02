<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('userName')){
			redirect('usuarios/index','refresh');
		}
	}

	public function index()
	{
		// $this->load->view('layouts/header');
		// $this->load->view('layouts/aside');
		// $this->load->view('container');
		// $this->load->view('layouts/footer');
		$this->load->view('login');
	}
	public function inicio()
	{

		$data['anios']=$this->venta_model->retornarDashboardAnual();
		$data['cantVentas']=$this->dashboard_model->rowCantidad("venta");
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('container',$data);
		$this->load->view('layouts/footer');
	}
	public function getData(){
		$anio = $this->input->post("anio");
		$resultados = $this->venta_model->montosMeses($anio);
		echo json_encode($resultados);
	}

	public function grafica()
	{

		$data['anios']=$this->venta_model->retornarDashboardAnual();
		$data['cantVentas']=$this->dashboard_model->rowCantidad("venta");
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('grafica',$data);
		$this->load->view('layouts/footer');
	}


	public function mantenimiento()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('mantenimiento');
		$this->load->view('layouts/footer');
	}
	public function login()
	{
		$this->load->view('login');
	}

	public function ventas()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('ventas');
		$this->load->view('layouts/footer');
	}

	public function reporte()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('reporte');
		$this->load->view('layouts/footer');
	}





	////PARA USUARIOS

// 	public function listaa()
// 	{
// 		$this->load->view('layouts/header');
// 		$this->load->view('layouts/aside');
// 		$data['usuario']=$this->usuario_model->retornarUsuario();
// 		$this->load->view('admin/usuario/lista',$data);
// 		$this->load->view('layouts/footer');
// 	}


// 	public function agregarr()
// 	{
// 		$data=array(
// 			'roles'=>$this->usuario_model->getRoles(),
// 		);
// 		$this->load->view('layouts/header');
// 		$this->load->view('layouts/aside');
// 		$this->load->view('admin/usuario/agregarForm',$data);
// 		$this->load->view('layouts/footer');
// 	}

// 	public function agregardbb()
// 	{
// 		$ci=$_POST['ci'];
// 		$data['ci']=$ci;
		
// 		$primerApellido=ucwords($_POST['primerApellido']);
// 		$data['primerApellido']=$primerApellido;
		
// 		$segundoApellido=ucwords($_POST['segundoApellido']);
// 		$data['segundoApellido']=$segundoApellido;
		
// 		$nombre=ucwords($_POST['nombre']);
// 		$data['nombre']=$nombre;
		
// 		$telefono=$_POST['telefono'];
// 		$data['telefono']=$telefono;

// 		$direccion=ucfirst($_POST['direccion']);
// 		$data['direccion']=$direccion;

// 		$rol=$_POST['rol'];
// 		$data['idRoles']=$rol;


// 		$a=strtoupper(substr($nombre,0,1));
// 		$n=strtoupper($primerApellido);
// 		$c=$ci;
		
// 		$userName=$n.$a.$c;
// 		$data['userName']=$userName;


// 		$password=md5($c);
// 		$data['password']=$password;

// // VALIDACIONES
// 		$config = array(
// 			array(
// 					'field' => 'ci',
// 					'label' => 'Carnet de Identidad',
// 					'rules' => 'required|alpha_numeric|is_natural',
// 					'errors' => array(
// 						'required' => 'El %s es invalido',
// 						'is_natural' => 'El %s es entero y positivo y/o alpha numerico',
// 				),
// 			),
// 			array(
// 					'field' => 'primerApellido',
// 					'label' => 'Primer Apellido',
// 					'rules' => 'required|alpha',
// 					'errors' => array(
// 						'required' => 'El %s es invalido',
// 				),
// 			),
// 			array(
// 					'field' => 'segundoApellido',
// 					'label' => 'Segundo Apellido',
// 					'rules' => 'required|alpha',
// 					'errors' => array(
// 						'required' => 'El %s es invalido solo letras',
// 				),
// 			),
// 			array(
// 					'field' => 'nombre',
// 					'label' => 'Nombre',
// 					'rules' => 'required|alpha',
// 					'errors' => array(
// 						'required' => 'El %s es invalido',
// 				),
// 			),
// 			array(
// 				'field' => 'telefono',
// 				'label' => 'Telefono',
// 				'rules' => 'required|is_natural',
// 				'errors' => array(
// 					'required' => 'El %s es invalido',
// 					'is_natural' => 'El %s es entero y positivo',
// 			),
// 		),
// 		);



// 		$this->form_validation->set_rules($config);

// 		if($this->form_validation->run()==FALSE)
// 		{
// 			//$data['nombre']=$nombre;
// 			$this->agregarr();
// 		}
// 		else
// 		{
// 			$this->usuario_model->agregarUsuario($data);
// 			redirect('Welcome/listaa','refresh');
// 		}
		

		
// 	}
// 	public function modificarr()
// 	{
// 		$data=array(
// 			'roles'=>$this->usuario_model->getRoles(),
// 		);
// 		//$data['roles']=$this->usuario_model->getRoles();

// 		$idUsuario=$_POST['idUsuario'];

// 		$data['ci']=$this->usuario_model->recuperarUsuario($idUsuario);
// 		$data['primerApellido']=$this->usuario_model->recuperarUsuario($idUsuario);
// 		$data['segundoApellido']=$this->usuario_model->recuperarUsuario($idUsuario);
// 		$data['nombre']=$this->usuario_model->recuperarUsuario($idUsuario);
// 		$data['telefono']=$this->usuario_model->recuperarUsuario($idUsuario);
// 		$data['direccion']=$this->usuario_model->recuperarUsuario($idUsuario);
// 		$data['idRoles']=$this->usuario_model->recuperarUsuario($idUsuario);


// 		$this->load->view('layouts/header');
// 		$this->load->view('layouts/aside');
// 		$this->load->view('admin/usuario/modificarForm',$data);
// 		$this->load->view('layouts/footer');
// 	}
 
// 	public function modificardbb()
// 	{
// 		$idUsuario=$_POST['idUsuario'];

// 		$ci=$_POST['ci'];
// 		$data['ci']=$ci;
		
// 		$primerApellido=ucwords($_POST['primerApellido']);
// 		$data['primerApellido']=$primerApellido;
		
// 		$segundoApellido=ucwords($_POST['segundoApellido']);
// 		$data['segundoApellido']=$segundoApellido;
		
// 		$nombre=ucwords($_POST['nombre']);
// 		$data['nombre']=$nombre;
		
// 		$telefono=$_POST['telefono'];
// 		$data['telefono']=$telefono;

// 		$direccion=ucfirst($_POST['direccion']);
// 		$data['direccion']=$direccion;

// 		$rol=$_POST['rol'];
// 		$data['idRoles']=$rol;


// 		$a=strtoupper(substr($nombre,0,1));
// 		$n=strtoupper($primerApellido,0,1);
// 		$c=$ci;
// 		$userName=$n.$a.$c;
// 		$data['userName']=$userName;


// 		$password=md5($c);
// 		$data['password']=$password;

// 		$config = array(
// 			array(
// 					'field' => 'ci',
// 					'label' => 'Carnet de Identidad',
// 					'rules' => 'required|alpha_numeric|is_natural',
// 					'errors' => array(
// 						'required' => 'El %s es invalido',
// 						'is_natural' => 'El %s es entero y positivo y/o alpha numerico',
// 				),
// 			),
// 			array(
// 					'field' => 'primerApellido',
// 					'label' => 'Primer Apellido',
// 					'rules' => 'required|alpha',
// 					'errors' => array(
// 						'required' => 'El %s es ',
// 				),
// 			),
// 			array(
// 					'field' => 'segundoApellido',
// 					'label' => 'Segundo Apellido',
// 					'rules' => 'required|alpha',
// 					'errors' => array(
// 						'required' => 'El %s es invalido',
// 				),
// 			),
// 			array(
// 					'field' => 'nombre',
// 					'label' => 'Nombre',
// 					'rules' => 'required|alpha',
// 					'errors' => array(
// 						'required' => 'El %s es invalido',
// 				),
// 			),
// 			array(
// 				'field' => 'telefono',
// 				'label' => 'Telefono',
// 				'rules' => 'required|is_natural',
// 				'errors' => array(
// 					'required' => 'El %s es invalido',
// 					'is_natural' => 'El %s es entero y positivo',
// 			),
// 		),
// 		);



// 		$this->form_validation->set_rules($config);

// 		if($this->form_validation->run()==FALSE)
// 		{
// 			//$data['nombre']=$nombre;
// 			$this->modificarr();
// 		}
// 		else
// 		{
// 			$this->usuario_model->modificarUsuario($idUsuario,$data);
// 			redirect('Welcome/listaa','refresh');
// 		}
// 	}
}

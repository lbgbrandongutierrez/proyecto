<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('userName')){
			redirect('usuarios/index','refresh');
		}
	}

	public function listaProducto()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$data['producto']=$this->producto_model->retornarProducto();
		$this->load->view('admin/producto/lista',$data);
		$this->load->view('layouts/footer');
	}
	
	 
	public function agregar()
	{
		$data['categoria']=$this->producto_model->getCategoria();
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/producto/agregarForm',$data);
		$this->load->view('layouts/footer');
	}

	public function agregardb()
	{
		//$idProducto=$_POST['idProducto'];

		$categori=$_POST['categori'];
		$codigo=$_POST['codigo'];
		
		$nombreProducto=$_POST['nombreProducto'];
		$descripcion=$_POST['descripcion'];
		$peso=$_POST['peso']."gr";
		$precioCompra=$_POST['precioCompra'];
		$precioVenta=$_POST['precioVenta'];
		$stock=$_POST['stock'];



		$this->form_validation->set_rules("nombreProducto","Nombre", "required|is_unique[producto.nombreProducto]");

				if($this->form_validation->run())
				{
					$config['upload_path'] = './assets/ImagenesBDD/productos/picture/';
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
											$data['idCategoria']=$categori;  
											$data['codigo']=$codigo;	
											$data['imagen']=$imagen['file_name'];		
											$data['nombreProducto']=$nombreProducto;				
											$data['descripcion']=$descripcion;       
											$data['peso']=$peso;        
											$data['precioCompra']=$precioCompra;        
											$data['precioVenta']=$precioVenta;
											$data['stock']=$stock;

											$this->producto_model->agregarProducto($data);
							
								redirect("producto/listaProducto",'refresh');
							}else {
							die("error al crear el producto");
							}
						}else {
								$this->session->set_flashdata("error","Seleccione la imagen");
								redirect("producto/agregar",'refresh');
						}
						



				}
				else
				{
					$this->agregar();
				}

	}
	
	public function modificar()
	{
        $data=array(
			'categoria'=>$this->producto_model->getCategoria(),
			
		);

        $idProducto=$_POST['idProducto'];
        
        $data['idCategoria']=$this->producto_model->recuperarProducto($idProducto);
		$data['codigo']=$this->producto_model->recuperarProducto($idProducto);
		$data['imagen']=$this->producto_model->recuperarProducto($idProducto);
		$data['nombreProducto']=$this->producto_model->recuperarProducto($idProducto);
		$data['descripcion']=$this->producto_model->recuperarProducto($idProducto);
		$data['peso']=$this->producto_model->recuperarProducto($idProducto);
        $data['precioCompra']=$this->producto_model->recuperarProducto($idProducto);
        $data['precioVenta']=$this->producto_model->recuperarProducto($idProducto);
        $data['stock']=$this->producto_model->recuperarProducto($idProducto);


		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/producto/modificarForm',$data);
		$this->load->view('layouts/footer');
	}




	public function modificardb()
	{
        $idProducto=$_POST['idProducto'];
        
		$categori=$_POST['categori'];
		$codigo=$_POST['codigo'];		
		$nombreProducto=$_POST['nombreProducto'];
		$descripcion=$_POST['descripcion'];
		$peso=$_POST['peso'];
		$precioCompra=$_POST['precioCompra'];
		$precioVenta=$_POST['precioVenta'];
		$stock=$_POST['stock'];

		$path = './assets/ImagenesBDD/productos/picture/';


		// get foto
		$config['upload_path'] = './assets/ImagenesBDD/productos/picture/';
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
					$data['idCategoria']=$categori;  
							$data['codigo']=$codigo;	
							$data['imagen']=$imagen['file_name'];		
							$data['nombreProducto']=$nombreProducto;				
							$data['descripcion']=$descripcion;       
							$data['peso']=$peso;       
							$data['precioCompra']=$precioCompra;        
							$data['precioVenta']=$precioVenta;
							$data['stock']=$stock;

				// hapus foto pada direktori
				@unlink($path.$this->input->post("filelama"));
					$this->producto_model->modificarProducto($idProducto,$data);
					redirect('producto/listaProducto','refresh');
				}else {
				die("error al actualizar");
				}
			}else {
			$this->session->set_flashdata("error","Seleccione una imagen");
				redirect('producto/listaProducto','refresh');
		}

	}

	public function eliminardb()
	{
		$idProducto=$_POST['idProducto'];
      
		$codigo=$_POST['codigo'];
		$data['codigo']=$codigo;
		
		$nombreProducto=$_POST['nombreProducto'];
		$data['nombreProducto']=$nombreProducto;
		
		$peso=$_POST['peso'];
		$data['peso']=$peso;
		
		
        $precioVenta=$_POST['precioVenta'];
        $data['precioVenta']=$precioVenta;
        
        $stock=$_POST['stock'];
        $data['stock']=$stock;

        $estado=0;
        $data['estado']=$estado;
        
		$this->producto_model->eliminarProducto($idProducto,$data);
		redirect('producto/listaProducto','refresh');

	}

	public function vista($id){
		$data  = array(
			'producto' => $this->producto_model->vistaProducto($id), 
		);
		$this->load->view("admin/producto/vista",$data);
	}
	
}
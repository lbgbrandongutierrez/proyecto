<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('userName')){
			redirect('usuarios/index','refresh');
		}
	}

    public function listaCategoria()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');

		$data['categoria']=$this->categoria_model->retornarCategoria();
		$this->load->view('admin/categoria/lista',$data);
		$this->load->view('layouts/footer');
	}
	
	public function agregar()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/categoria/agregarForm');
		$this->load->view('layouts/footer');
	}
	public function agregardb()
	{
		$nombreCategoria=$_POST['nombreCategoria'];
		$data['nombreCategoria']=$nombreCategoria;
		
		$descripcion=$_POST['descripcion'];
		$data['descripcion']=$descripcion;




		$this->form_validation->set_rules("nombreCategoria","Nombre", "required|is_unique[categoria.nombreCategoria]");

				if($this->form_validation->run())
				{


					$resultado=$this->categoria_model->agregarCategoria($data);
					$data['resultado']=$resultado;
					//redirect("categoria/listaCategoria",'refresh');
						
						if($data['resultado']=$resultado){
							redirect("categoria/listaCategoria",'refresh');
						}
						else{
							$this->session->set_flashdata("error","No se pudo guardar la informacion");
							redirect("categoria/agregar",'refresh');
						}



				}
				else
				{
					$this->agregar();
				}
	}
	
	public function modificar()
	{
		$idCategoria=$_POST['idCategoria'];

		$data['nombreCategoria']=$this->categoria_model->recuperarCategoria($idCategoria);
		$data['descripcion']=$this->categoria_model->recuperarCategoria($idCategoria);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/categoria/modificarForm',$data);
		$this->load->view('layouts/footer');
    }
    
	public function modificardb()
	{
		$idCategoria=$_POST['idCategoria'];

		$nombreCategoria=$_POST['nombreCategoria'];
		$data['nombreCategoria']=$nombreCategoria;
		
		$descripcion=$_POST['descripcion'];
		$data['descripcion']=$descripcion;
		
		$this->categoria_model->modificarCategoria($idCategoria,$data);
		redirect('categoria/listaCategoria','refresh');
		
	}

	public function eliminardb()
	{
		$idCategoria=$_POST['idCategoria'];

		$nombreCategoria=$_POST['nombreCategoria'];
		$data['nombreCategoria']=$nombreCategoria;
		
		$descripcion=$_POST['descripcion'];
		$data['descripcion']=$descripcion;

		$estado=0;
		$data['estado']=$estado;

		$this->categoria_model->eliminarCategoria($idCategoria,$data);
		redirect('categoria/listaCategoria','refresh');
	}


	// es para una visualisar todo
	public function view($idCategoria)
	{
		$data['categoria']=$this->categoria_model->view($idCategoria);

		$this->load->view('admin/categoria/view',$data);
	}
}

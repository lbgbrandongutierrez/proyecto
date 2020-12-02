<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('userName')){
			redirect('usuarios/index','refresh');
		}
	}

    public function listaCliente()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');

		$data['cliente']=$this->cliente_model->retornarCliente();
		$this->load->view('admin/cliente/lista',$data);
		$this->load->view('layouts/footer');
	}
	
	public function agregar()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/cliente/agregarForm');
		$this->load->view('layouts/footer');
	}
	public function agregardb()
	{
		$razonSocial=$_POST['razonSocial'];
		$data['razonSocial']=$razonSocial;
		
		$nit=$_POST['nit'];
		$data['nit']=$nit;


		$this->form_validation->set_rules("nit","NIT/CI", "required|is_unique[cliente.nit]");



				if($this->form_validation->run())
				{


					$resultado=$this->cliente_model->agregarCliente($data);
					$data['resultado']=$resultado;
					redirect("cliente/listaCliente",'refresh');
						
						if($data['resultado']=$resultado){
							redirect("cliente/listaCliente",'refresh');
						}
						else{
							$this->session->set_flashdata("error","No se pudo guardar la informacion");
							redirect("cliente/agregar",'refresh');
						}


				}
				else
				{
					$this->agregar();
				}
	}









	//desde del modal de venta

	public function agregarClie()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/cliente/agregarFormClie');
		$this->load->view('layouts/footer');
	}
	public function agregardbClie()
	{
		$razonSocial=$_POST['razonSocial'];
		$data['razonSocial']=$razonSocial;
		
		$nit=$_POST['nit'];
		$data['nit']=$nit;


		$this->form_validation->set_rules("nit","NIT/CI", "required|is_unique[cliente.nit]");



				if($this->form_validation->run())
				{


					$resultado=$this->cliente_model->agregarCliente($data);
					$data['resultado']=$resultado;
					redirect("venta/listaDetVenta",'refresh');
						
						if($data['resultado']=$resultado){
							redirect("venta/listaDetVenta",'refresh');
						}
						else{
							$this->session->set_flashdata("error","No se pudo guardar la informacion");
							redirect("cliente/agregar",'refresh');
						}


				}
				else
				{
					$this->agregar();
				}
	}




	
	public function modificar()
	{
		$idCliente=$_POST['idCliente'];

		$data['razonSocial']=$this->cliente_model->recuperarCliente($idCliente);
		$data['nit']=$this->cliente_model->recuperarCliente($idCliente);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/cliente/modificarForm',$data);
		$this->load->view('layouts/footer');
    }
    
	public function modificardb()
	{
		$idCliente=$_POST['idCliente'];

		$razonSocial=$_POST['razonSocial'];
		$data['razonSocial']=$razonSocial;
		
		$nit=$_POST['nit'];
		$data['nit']=$nit;
		
		$this->cliente_model->modificarCliente($idCliente,$data);
		redirect('cliente/listaCliente','refresh');
		
	}

	public function eliminardb()
	{
		$idCliente=$_POST['idCliente'];

		$razonSocial=$_POST['razonSocial'];
		$data['razonSocial']=$razonSocial;
		
		$nit=$_POST['nit'];
		$data['nit']=$nit;

		$estado=0;
		$data['estado']=$estado;

		$this->cliente_model->eliminarCliente($idCliente,$data);
		redirect('cliente/listaCliente','refresh');
	}
}
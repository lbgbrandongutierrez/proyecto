<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CatalogoVenta extends CI_Controller {

	// public function listaProducto()
	// {
	// 	$this->load->view('layouts/header');
	// 	$this->load->view('layouts/aside');
	// 	$data['producto']=$this->catalogoVenta_model->retornarProducto();
	// 	$this->load->view('admin/venta/catalogoVenta',$data);
	// 	$this->load->view('layouts/footer');
	// }
	// public function agregarCatalogo()
	// {
	// 	$idProducto=$_POST['idProducto'];
	// 	$codigo=$_POST['codigo'];
	// 	$nombreProducto=$_POST['nombreProducto'];
	// 	$precioVenta=$_POST['precioVenta'];
	// 	$cantidad=$_POST['cantidad'];
		
	// 	$data['idProducto']=$idProducto; 
	// 	$data['codigo']=$codigo;  
	// 	$data['nombreProducto']=$nombreProducto;	
	// 	$data['precioVenta']=$precioVenta;		
	// 	$data['cantidad']=$cantidad;

	// 	$this->catalogoVenta_model->agregarCatalogo($data);
    //     redirect("catalogoVenta/listaProducto",'refresh');
    // }

}

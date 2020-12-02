
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('userName')){
			redirect('usuarios/index','refresh');
		}
	}


/////// datos para de la vista del listado de la venta

	public function listaVenta()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$data['venta']=$this->venta_model->retornarVenta();
        $this->load->view('admin/venta/lista',$data);
		$this->load->view('layouts/footer');
	}

	public function view(){
		$idVenta =$this->input->post("idVenta");
		$data['detalleventa']=$this->venta_model->retornarDetalleVenta($idVenta);
		$this->load->view("admin/venta/listaDetVenta",$data);
	}

	public function recibo(){
		$idVenta =$this->input->post("idVenta");
		$data['venta']=$this->venta_model->retornarRecibo($idVenta);
		$data['detalleventa']=$this->venta_model->retornarDetalleVenta($idVenta);
		$this->load->view("admin/venta/reciboVenta",$data);
	}










	///// datos para agregar el registro de venta
	public function listaDetVenta()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$data['cliente']=$this->cliente_model->retornarCliente();
		$this->load->view('admin/venta/agregarVentaa',$data);
		$this->load->view('layouts/footer');
	}

	// para buscar productos en el imput
	public function getproductos(){
		$valor = $this->input->post("valor");
		$prod = $this->venta_model->getproductos($valor);
		echo json_encode($prod);
	}

	public function getProductoBB(){
		$codigo_barra = $this->input->post("codigo_barra");
		$producto = $this->venta_model->getProductoBB($codigo_barra);

		if ($producto != false) {
			echo json_encode($producto);
		}else{
			echo "0";
		}
	}









	
  
// para agregar venta y detalle 

	public function agregardb()
	{
		
		$total=$_POST['total'];
		$idCliente=$_POST['idCliente'];

		if ($idCliente!="") {
			
			$idUsuario=$this->session->userdata('idUsuario'); 
 
				$idProducto=$_POST['idProducto'];
				//$idVenta=$_POST['idVenta'];
				$precio=$_POST['precio'];
				$cantidad=$_POST['cantidad'];
				$importe=$_POST['importe'];



				$data['total']=$total;
				$data['idCliente']=$idCliente;
				$data['idUsuario']=$idUsuario;  
			
				if($this->venta_model->agregarVenta($data))
				{		
					$idVenta = $this->venta_model->ultimoID();
					$this->guardarDetalle($idVenta,$idProducto,$precio,$cantidad,$importe);
					
					redirect('venta/listaVenta','refresh');
				}
				else{
					redirect('venta/listaDetVenta','refresh');
				}




			}else {
					$this->session->set_flashdata("error","El registro no se realizó...... Debe seleccionar al cliente");
					redirect('venta/listaDetVenta','refresh');
			}	

		
		}













		// $idUsuario=$this->session->userdata('idUsuario'); 
 
		// $idProducto=$_POST['idProducto'];
		// //$idVenta=$_POST['idVenta'];
		// $precio=$_POST['precio'];
		// $cantidad=$_POST['cantidad'];
		// $importe=$_POST['importe'];



		// $data['total']=$total;
		// $data['idCliente']=$idCliente;
		// $data['idUsuario']=$idUsuario;  
	
		// if($this->venta_model->agregarVenta($data))
		// {		
		// 	$idVenta = $this->venta_model->ultimoID();
		// 	$this->guardarDetalle($idVenta,$idProducto,$precio,$cantidad,$importe);
			 
		// 	redirect('venta/listaVenta','refresh');
		// }
		// else{
		// 	redirect('venta/listaDetVenta','refresh');
		// }}
	


	protected function guardarDetalle($idVenta,$producto,$precio,$cantidad,$importe){
		for ($i=0; $i < count($producto); $i++) { 
				$data['idVenta']=$idVenta;
				$data['idProducto']=$producto[$i];
				$data['precio']=$precio[$i];
				$data['cantidad']=$cantidad[$i];
				$data['importe']=$importe[$i];
				
				$this->venta_model->guardarDetallee($data);
				$this->modificarProducto($producto[$i],$cantidad[$i]);
		}

	}

	protected function modificarProducto($idProducto,$cantidad){
		
		$productoActual= $this->producto_model->getProducto($idProducto);
		$data['stock']=$productoActual->stock-$cantidad;
			
		$this->producto_model->modificarProducto($idProducto,$data);
				
	}

	



    
}
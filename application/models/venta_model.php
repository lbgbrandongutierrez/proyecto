<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta_model extends CI_Model {
  ////datos de la vista de la lista de ventas 

  public function retornarVenta()
  {
	  $this->db->select('V.idVenta,C.razonSocial,C.nit,V.total,DATE(V.fechaRegistro) as fechaRegistro');
	  $this->db->from('venta V ');
	  $this->db->join('cliente C','V.idCliente = C.idCliente');
	  $this->db->order_by("fechaRegistro","desc"); 
	  $this->db->where('V.estado',1);
	  return $this->db->get();
	  
  }

  public function retornarDetalleVenta($id)
  {
	  $this->db->select('DV.*,P.imagen,P.codigo,P.nombreProducto');
	  $this->db->from('detalleventa DV ');
	  $this->db->join('producto P','DV.idProducto = P.idProducto');
	  $this->db->where('DV.idVenta',$id);
	  return $this->db->get();
	 
	  //$resultados=$this->db->get();
	  //return $resultados-result();
  }
  public function retornarRecibo($id)
  {
	  $this->db->select('V.idVenta,C.razonSocial,C.nit,V.total,DATE(V.fechaRegistro) as fechaRegistro');
	  $this->db->from('venta V ');
	  $this->db->join('cliente C','V.idCliente = C.idCliente');
	  $this->db->where('V.idVenta',$id);
	  $resultados=$this->db->get();
	  return $resultados->row();
	  //return $this->db->get();
  }






  public function agregaVenta($data)
  {
	  $this->db->trans_start();
	  $this->db->insert('venta',$data);

	  $idVenta=$this->db->insert_id();

	  $idProducto=$_POST['idProducto'];
	  $precio=$_POST['precio'];
	  $cantidad=$_POST['cantidad'];
	  $importe=$_POST['importe'];


	  $data['idVenta']=$idVenta;
	  $data['idProducto']=$producto[$i];
	  $data['precio']=$precio[$i];
	  $data['cantidad']=$cantidad[$i];
	  $data['importe']=$importe[$i];


	  $this->db->where('idVenta',$idVenta);
	  $this->db->insert('detalleVenta',$data);
  
	  if ($this->db->trans_status() === FALSE)
	  {
			  $this->db->trans_rollback();
	  }
	  else
	  {
			  $this->db->trans_commit();
	  }
	  return $this->db->trans_status();
  }





  	// para buscar en el imput los productos
  	public function getProductoBB($codigoBB)
  	{
		$this->db->where("codigo", $codigoBB);
		$resultados = $this->db->get("producto");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}else{
			return false;
		}
	}

	public function getproductos($valor){
		$this->db->select("idProducto,CONCAT(codigo,' - ',nombreProducto) as label,nombreProducto,codigo,imagen,precioVenta,stock");
		$this->db->from("producto");
		$this->db->where('estado', 1);
		$this->db->like("CONCAT(codigo,' ',nombreProducto)",$valor);
		//$this->db->like("nombreProducto",$valor);
		$this->db->where("stock > ",0);
		$resultados = $this->db->get();
		return $resultados->result_array();
	}


	//agregar a la tabla  venta
    public function agregarVenta($data)
	{
		return $this->db->insert('venta',$data);
    }
     //ultimo id de la tabla ventas
    public function ultimoID()
	{
		return $this->db->insert_id();
    }

    public function guardarDetallee($data)
	{
	    $this->db->insert('detalleventa',$data);
	}





	//para reportes de ventas
	public function retornarVentaReporte($fechainicio,$fechafin)
	{
		$this->db->select('V.idVenta,C.razonSocial,C.nit,V.total,DATE(V.fechaRegistro) as fechaRegistro, U.idUsuario, U.nombre,U.primerApellido, U.segundoApellido ');
		$this->db->from('venta V ');
		$this->db->join('cliente C','V.idCliente = C.idCliente');
		$this->db->join('usuario U','V.idUsuario = U.idUsuario');
		$this->db->where('V.fechaRegistro >=',$fechainicio);
		$this->db->where('V.fechaRegistro <=',$fechafin);
		$this->db->order_by("V.fechaRegistro", "desc"); 
		//$this->db->where('V.estado',1);
		return $this->db->get();
		
	}	
	
	public function retornarVentaReportee()
	{
		$this->db->select('V.idVenta,C.razonSocial,C.nit,V.total,DATE(V.fechaRegistro) as fechaRegistro, U.idUsuario, U.nombre,U.primerApellido, U.segundoApellido');
		$this->db->from('venta V ');
		$this->db->join('cliente C','V.idCliente = C.idCliente');
		$this->db->join('usuario U','V.idUsuario = U.idUsuario');
		$this->db->order_by("fechaRegistro", "desc"); 
		//$this->db->where('V.estado',1);
		return $this->db->get();
		
	}





   //para reportes de ventas del los clientes frecuentes
	public function retornarClienteVentaReporte($fechainicio,$fechafin)
	{
		//$this->db->select('V.idVenta,C.razonSocial,C.nit,V.total');
		//$this->db->select('V.*,C.razonSocial as razonSocial ');
		$this->db->select('V.idVenta,C.razonSocial,C.nit,SUM(V.total) as total');
		$this->db->from('venta V ');
		$this->db->join('cliente C','V.idCliente = C.idCliente');
		$this->db->where('V.fechaRegistro >=',$fechainicio);
		$this->db->where('V.fechaRegistro <=',$fechafin);
		$this->db->where('V.estado',1);
		$this->db->group_by('C.idCliente');
		$this->db->order_by("total", "desc"); 
		return $this->db->get();
		
	}
	public function retornarClienteVentaReportee()
	{
		$this->db->select('V.idVenta,C.razonSocial,C.nit,SUM(V.total) as total');
		$this->db->from('venta V ');
		$this->db->join('cliente C','V.idCliente = C.idCliente');
		$this->db->group_by('C.idCliente');
		$this->db->order_by("total", "desc"); 
		$this->db->where('V.estado',1);
		return $this->db->get();
		
	}


	 //para reportes para ventas diarias
	 public function retornarReporteVentaDiaria($fechainicio,$fechafin)
	 {
		 $this->db->select('V.idVenta,DATE(V.fechaRegistro) as fechaRegistro,SUM(V.total) as total');
		 $this->db->from('venta V ');
		 $this->db->where('V.fechaRegistro >=',$fechainicio);
		 $this->db->where('V.fechaRegistro <=',$fechafin);
		 $this->db->group_by('DAY(V.fechaRegistro)');
		//$this->db->order_by("total", "desc"); 
		$this->db->where('V.estado',1);
		 return $this->db->get();
		 
	 }
	 public function retornarReporteVentaDiariaa()
	 {
		 $this->db->select('V.idVenta,DATE(V.fechaRegistro) as fechaRegistro,SUM(V.total) as total');
		 $this->db->from('venta V ');
		 $this->db->group_by('DAY(V.fechaRegistro)');
		 //$this->db->order_by("total", "desc"); 
		 $this->db->where('V.estado',1);
		 return $this->db->get();
		 
	 }
	//para reportes para ventas mensuales
	public function retornarReporteVentaMensual($fechainicio,$fechafin)
	{
	  $this->db->select('V.idVenta,DATE(V.fechaRegistro) as fechaRegistro,SUM(V.total) as total');
	  $this->db->from('venta V ');
	  $this->db->where('fechaRegistro >=',$fechainicio);
	  $this->db->where('fechaRegistro <=',$fechafin);
	  $this->db->group_by('MONTH(fechaRegistro)');
	  $this->db->order_by("fechaRegistro", "desc"); 
	 $this->db->where('V.estado',1);
	  return $this->db->get();
	  
	}
	public function retornarReporteVentaMensuall()
	{
	  $this->db->select('V.idVenta,DATE(V.fechaRegistro) as fechaRegistro,SUM(V.total) as total');
	  $this->db->from('venta V ');
	  $this->db->group_by('MONTH(fechaRegistro)');
	  $this->db->order_by("fechaRegistro", "desc"); 
	  $this->db->where('V.estado',1);
	  return $this->db->get();
	  
	}

	 //para reportes para ventas anuales
	 public function retornarReporteVentaAnual($fechainicio,$fechafin)
	 {
		 $this->db->select('V.idVenta,YEAR(V.fechaRegistro) as fechaRegistro,SUM(V.total) as total');
		 $this->db->from('venta V ');
		 $this->db->where('V.fechaRegistro >=',$fechainicio);
		 $this->db->where('V.fechaRegistro <=',$fechafin);
		 $this->db->group_by('YEAR(V.fechaRegistro)');
		 $this->db->order_by("fechaRegistro", "desc"); 
		$this->db->where('V.estado',1);
		 return $this->db->get();
		 
	 }
	 public function retornarReporteVentaAnuall()
	 {
		 $this->db->select('V.idVenta,YEAR(V.fechaRegistro) as fechaRegistro,SUM(V.total) as total');
		 $this->db->from('venta V ');
		 $this->db->group_by('YEAR(V.fechaRegistro)');
		 $this->db->order_by("fechaRegistro", "desc"); 
		 $this->db->where('V.estado',1);
		 return $this->db->get();
		 
	 }

	 public function retornarDashboardAnual()
	 {
		 $this->db->select('YEAR(fechaRegistro) as anio');
		 $this->db->from('venta');
		 $this->db->group_by('anio');
		 $this->db->order_by('anio', 'desc'); 
		 $this->db->where('estado',1);
		 $resultado=$this->db->get();
		 return $resultado->result();
		 
	 }

	//  public function retornarDashboardMensual($anio)
	  
	public function montosMeses($anio){
		$this->db->select("MONTH(fechaRegistro) as mes, SUM(total) as monto");
		$this->db->from("venta");
		$this->db->where("fechaRegistro >=",$anio."-01-01"."00:00:00");
		$this->db->where("fechaRegistro <=",$anio."-12-31"." 23:59:59");
		$this->db->group_by("mes");
		$this->db->order_by("mes", "desc");
		$this->db->where('estado',1);
		$resultados = $this->db->get();
		return $resultados->result();

	 }
	
} 

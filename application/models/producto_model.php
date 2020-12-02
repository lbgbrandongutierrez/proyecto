<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model {

	public function retornarProducto()
	{
		$this->db->select('P.idProducto,C.nombreCategoria as categori,P.codigo,P.imagen,P.nombreProducto,P.peso,P.precioVenta,P.stock');
		$this->db->from('producto P');
		$this->db->join('categoria C','P.idCategoria = C.idCategoria');
		$this->db->where('P.estado',1);
		return $this->db->get();
	}


									
	public function vistaProducto($id){
		$this->db->select('P.idProducto,C.nombreCategoria as categori,P.codigo,P.imagen,P.nombreProducto,
		P.descripcion,P.peso,P.precioVenta,P.precioCompra,P.stock');
		$this->db->from('producto P');
		$this->db->join('categoria C','P.idCategoria = C.idCategoria');
		$this->db->where("P.idProducto",$id);
		$resultado = $this->db->get();
		return $resultado->row();
	}
	public function getCategoria()//para extraeer los datos de la otra tabla join
	{
		$resultados=$this->db-> get('categoria');
		return $resultados->result();
	}

	public function agregarProducto($data)
	{
		$this->db->insert('producto',$data);

	}
	
	public function recuperarProducto($idProducto)
	{
		$this->db->select('*');
		$this->db->from('producto');
		$this->db->where('idProducto',$idProducto);
		return $this->db->get();
	}
	
	public function modificarProducto($idProducto,$data)
	{
		$this->db->where('idProducto',$idProducto);
		$this->db->update('producto',$data);
	}
	
	public function eliminarProducto($idProducto,$data)
	{
		$this->db->where('idProducto',$idProducto);
		$this->db->update('producto',$data);
	}


	/// para detalle venta solo de un producto datos 
 	
	public function getProducto($idProducto)
	{
		$this->db->where('idProducto',$idProducto);
		$resul=$this->db->get('producto');
		return $resul->row();
	}
	//para para sacar reporte de producto con stock actual y minimo
	public function reporteProductoActual()
	{
		$this->db->select('P.idProducto,C.nombreCategoria as categori,P.codigo,P.imagen,P.nombreProducto,P.descripcion,P.precioVenta,P.stock');
		$this->db->from('producto P');
		$this->db->join('categoria C','P.idCategoria = C.idCategoria');
		$this->db->where('P.estado',1);
		return $this->db->get();
	}
	public function reporteProductoMinimo($stockMin)
	{
		$this->db->select('P.idProducto,C.nombreCategoria as categori,P.codigo,P.imagen,P.nombreProducto,P.descripcion,P.precioVenta,P.stock');
		$this->db->from('producto P');
		$this->db->join('categoria C','P.idCategoria = C.idCategoria');
		$this->db->where('P.estado',1);
		// $this->db->where('P.stock <=',10);
		$this->db->where('P.stock <=',$stockMin);
		return $this->db->get();
	}

	public function reporteProductoMinimoo()
	{
		$this->db->select('P.idProducto,C.nombreCategoria as categori,P.codigo,P.imagen,P.nombreProducto,P.precioVenta,P.stock');
		$this->db->from('producto P');
		$this->db->join('categoria C','P.idCategoria = C.idCategoria');
		$this->db->where('P.estado',1);
		$this->db->where('P.stock <=',10);
		return $this->db->get();
	}


	// reporte de productos vendidos
	public function reporteProductoVendido($fechainicio, $fechafin)
	{
		$this->db->select("p.idProducto, p.nombreProducto, p.stock, p.precioVenta,SUM(dv.cantidad) as totalVendidos,v.*");
		$this->db->from("detalleventa dv");
		$this->db->join("producto p", "dv.idProducto = p.idProducto");
		$this->db->join("venta v", "dv.idVenta = v.idVenta");
		$this->db->where("v.fechaRegistro >=", $fechainicio);
		$this->db->where("v.fechaRegistro <=", $fechafin);
		$this->db->where('v.estado',1);
		$this->db->group_by("dv.idProducto");
		$this->db->order_by("totalVendidos", "desc"); 
		return $this->db->get();
	}
	public function reporteProductoVendidoo()
	{
		$this->db->select("p.idProducto, p.nombreProducto, p.stock, p.precioVenta,SUM(dv.cantidad) as totalVendidos,v.*");
		$this->db->from("detalleventa dv");
		$this->db->join("producto p", "dv.idProducto = p.idProducto");
		$this->db->join("venta v", "dv.idVenta = v.idVenta");
		$this->db->where('v.estado',1);
		$this->db->group_by("dv.idProducto");
		$this->db->order_by("totalVendidos", "desc"); 
		return $this->db->get();
	}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogo_model extends CI_Model {

	public function retornarCatalogo($categori)
	{
        $this->db->select('idProducto,imagen,nombreProducto,precioVenta,idCategoria');
		$this->db->from('producto');
		$this->db->where('idCategoria',$categori);
		$this->db->where('estado',1);
		return $this->db->get();
	}


	
	public function retornarCategoriaCatalogo($categori)
	{
		$this->db->select('nombreCategoria');
		$this->db->from('categoria');
		$this->db->where('idCategoria',$categori);
		$this->db->where('estado',1);
		return $this->db->get();
	}

	public function retornarCatalogoo()
	{
        $this->db->select('idProducto,imagen,nombreProducto,precioVenta');
		$this->db->from('producto');
		$this->db->where('estado',1);
		return $this->db->get();
	}



	public function retornarProducto()
	{
		$this->db->select('*');
		$this->db->from('producto');
		$this->db->where('estado',1);
		return $this->db->get();
	}



}
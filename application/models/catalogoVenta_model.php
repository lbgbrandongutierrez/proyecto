<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CatalogoVenta_model extends CI_Model {

    public function retornarProducto()
	{
		$this->db->select('*');
		$this->db->from('producto');
		$this->db->where('estado',1);
		return $this->db->get();
	}
	public function agregarCatalogo($data)
	{
		return $this->db->insert('carroproducto',$data);
	}
	
	public function recuperarProducto($idProducto)
	{
		$this->db->select('*');
		$this->db->from('producto');
		$this->db->where('idProducto',$idProducto);
		return $this->db->get();
	}
}
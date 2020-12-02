<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model {

	public function retornarCategoria()
	{
		$this->db->select('*');
		$this->db->from('categoria');
		$this->db->where('estado',1);
		return $this->db->get();
	}
	public function agregarCategoria($data)
	{
		$this->db->trans_start();
		$this->db->insert('categoria',$data);

		
		$idCategoria=$this->db->insert_id();

		$this->db->where('idCategoria',$idCategoria);
	
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
	
	public function recuperarCategoria($idCategoria)
	{
		$this->db->select('*');
		$this->db->from('categoria');
		$this->db->where('idCategoria',$idCategoria);
		return $this->db->get();
	}
	
	public function modificarCategoria($idCategoria,$data)
	{
		$this->db->where('idCategoria',$idCategoria);
		$this->db->update('categoria',$data);
	}
	
	public function eliminarCategoria($idCategoria,$data)
	{
		$this->db->where('idCategoria',$idCategoria);
		$this->db->update('categoria',$data);
	}


	//// es para mostrar los datos de todos 
	public function view($idCategoria)
	{
		$this->db->select('*');
		$this->db->from('categoria');
		$this->db->where('idCategoria',$idCategoria);
		$res=$this->db->get();
		return $res->row();
	}
}
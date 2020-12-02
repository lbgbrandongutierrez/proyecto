<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {

	public function retornarCliente()
	{
		$this->db->select('*');
		$this->db->from('cliente');
		$this->db->where('estado',1);
		return $this->db->get();
	}
	public function agregarCliente($data)
	{
		$this->db->trans_start();
		$this->db->insert('cliente',$data);

		
		$idCliente=$this->db->insert_id();

		$this->db->where('idCliente',$idCliente);
	
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
	
	public function recuperarCliente($idCliente)
	{
		$this->db->select('*');
		$this->db->from('cliente');
		$this->db->where('idCliente',$idCliente);
		return $this->db->get();
	}
	
	public function modificarCliente($idCliente,$data)
	{
		$this->db->where('idCliente',$idCliente);
		$this->db->update('cliente',$data);
	}
	
	public function eliminarCliente($idCliente,$data)
	{
		$this->db->where('idCliente',$idCliente);
		$this->db->update('cliente',$data);
	}








//para detalle venta
    public function getCliente($idCliente)
	{
		$this->db->where('idCliente',$idCliente);
		$resul=$this->db->get('cliente');
		return $resul->row();
    }
    
}

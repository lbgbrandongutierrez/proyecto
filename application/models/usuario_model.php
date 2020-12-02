<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function validar($userName,$password)
	{
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('userName',$userName);
		$this->db->where('password',$password);
		return $this->db->get();
	}


	public function retornarUsuario()
	{
		$this->db->select('U.*,R.* ');
		$this->db->from('usuario U');
		$this->db->join('rol R','U.idRol = R.idRol');
		$this->db->where('U.estado',1);
		return $this->db->get();
	}

	public function getRol()//para extraeer los datos de la otra tabla join
	{
		$resultados=$this->db-> get('rol');
		return $resultados->result();
	}

	public function agregarUsuario($data)
	{
		$this->db->insert('usuario',$data);
	}
	
	public function recuperarUsuario($idUsuario)
	{
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('idUsuario',$idUsuario);
		return $this->db->get();
	}
	
	public function modificarUsuario($idUsuario,$data)
	{
		$this->db->where('idUsuario',$idUsuario);
		$this->db->update('usuario',$data);
	}
	
	public function eliminarUsuario($idUsuario,$data)
	{
		$this->db->where('idUsuario',$idUsuario);
		$this->db->update('usuario',$data);
	}
// para cambiar pasword la comprovacion de la contrase;a actual

	public function comprobarPassword($password){
		$this->db->where("password", $password);
		$resultados  = $this->db->get("usuario");

		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return true;
		}
	}

}
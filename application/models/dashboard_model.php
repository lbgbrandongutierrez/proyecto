<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function rowCantidad($tabla)
	{
        if($tabla!="venta"){
            $this->db->where('estado',1);
        }
        $resultado=$this->db->get($tabla);
        return $resultado->num_rows();
	}

   
}
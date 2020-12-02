<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogo extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('userName')){
			redirect('usuarios/index','refresh');
		}
	}

    public function listaCatalogo()
	{
		$categori = $this->input->post("categori");
		//para obtener datos en un imput
		$nomCategori=$this->catalogo_model->retornarCategoriaCatalogo($categori);
		$nomCategori=$nomCategori->result();
		// foreach($nomCategori as $row)
		// {
		// 	$nombreCategori=$row->nombreCategoria;
		// }
		

        if ($this->input->post("buscar")) {
			$catalogo = $this->catalogo_model->retornarCatalogo($categori);

			foreach($nomCategori as $row)
			{
				$nombreCategori=$row->nombreCategoria;
			}
		}
		else{
			$catalogo = $this->catalogo_model->retornarCatalogoo();
			$nombreCategori='';

		}

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$data['categoria']=$this->producto_model->getCategoria();
		// $data['categoriii']=$this->catalogo_model->retornarCategoriaCatalogo($categori);
		$data['categorii']=$nombreCategori;
		$data['producto']=$catalogo;
		$this->load->view('catalogo/lista',$data);
		$this->load->view('layouts/footer');
	}
	public function listaCatalogooo()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$data['categoria']=$this->producto_model->getCategoria();
		$data['producto']=$this->catalogo_model->retornarCatalogoo();
		$this->load->view('catalogo/lista',$data);
		$this->load->view('layouts/footer');
	}


	// public function reporteProductoMinimo()
	// {
    //     $stockMin = $this->input->post("stockMin");

    //     if ($this->input->post("buscar")) {
	// 		$productoo = $this->producto_model->reporteProductoMinimo($stockMin);
	// 	}
	// 	else{
	// 		$productoo=$this->producto_model->reporteProductoMinimoo();
	// 	}

	// 	$this->load->view('layouts/header');
	// 	$this->load->view('layouts/aside');
    //     $data['producto']=$productoo;
    //     $data['stockMin']=$stockMin;
	// 	$this->load->view('admin/producto/reporteProductoMinimo',$data);
	// 	$this->load->view('layouts/footer');
    // }

	// public function index()
	// {
	// 	//$nombreProducto=$_POST['nombreProducto'];
	// 	//$precioVenta=$_POST['precioVenta'];
		
	//   $cari=$_GET['cari'];
	//   $page=$_GET['per_page'];

	//   $search['nombreProducto']=$cari;

    //   $batas =  9; // 9 data per page
    //   if(!$page):
    //       $offset = 0;
    //   else:
    //       $offset = $page;
    //   endif;

    //   $config['page_query_string'] = TRUE;
  	// 	$config['base_url'] 				 = base_url().'index.php/categoria/?cari='.$cari;
  	// 	$config['total_rows'] 			 = $this->catalogo_model->jumlah_row($search);

  	// 	$config['per_page'] 				 = $batas;
  	// 	$config['uri_segment'] 			 = $page;

  	// 	$config['full_tag_open'] 		= '<ul class="pagination">';
  	// 	$config['full_tag_close'] 	= '<ul>';

  	// 	$config['first_link'] 			= 'first';
  	// 	$config['first_tag_open'] 	= '<li><a>';
  	// 	$config['first_tag_close'] 	= '</a></li>';

  	// 	$config['last_link'] 				= 'last';
  	// 	$config['last_tag_open']	 	= '<li><a>';
  	// 	$config['last_tag_close'] 	= '</a></li>';

  	// 	$config['next_link'] 				= '&raquo;';
  	// 	$config['next_tag_open'] 		= '<li><a>';
  	// 	$config['next_tag_close'] 	= '</a></li>';

  	// 	$config['prev_link'] 				= '&laquo;';
  	// 	$config['prev_tag_open'] 		= '<li><a>';
  	// 	$config['prev_tag_close'] 	= '</a></li>';

  	// 	$config['cur_tag_open'] 		= '<li class="active"><a>';
  	// 	$config['cur_tag_close'] 		= '</a></li>';

  	// 	$config['num_tag_open'] 		= '<li><a>';
  	// 	$config['num_tag_close'] 		= '</a></li>';

    //   $this->load->library('pagination',$config);
    //   $data['pagination'] = $this->pagination->create_links();
    //   $data['jumlah_page'] = $page;


    //   $data['data'] = $this->catalogo_model->get($batas,$offset,$search);

	//   	$this->load->view('layouts/header');
	// 	$this->load->view('layouts/aside');
	// 	//$data['producto']=$this->catalogo_model->retornarProducto();
	// 	$this->load->view('catalogo/lista',$data);
	// 	$this->load->view('layouts/footer');

  	// 	//$this->load->view('catalogo/lista',$data);
	// }



}
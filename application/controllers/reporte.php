<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reporte extends CI_Controller {
    public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('userName')){
			redirect('usuarios/index','refresh');
		}
		
        
	}

    public function reporteProductoActual()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$data['producto']=$this->producto_model->reporteProductoActual();
		$this->load->view('admin/producto/reporteProducto',$data);
		$this->load->view('layouts/footer');
    }
    
    public function reporteProductoMinimo()
	{
        $stockMin = $this->input->post("stockMin");

        if ($this->input->post("buscar")) {
			$productoo = $this->producto_model->reporteProductoMinimo($stockMin);
		}
		else{
			$productoo=$this->producto_model->reporteProductoMinimoo();
		}

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
        $data['producto']=$productoo;
        $data['stockMin']=$stockMin;
		$this->load->view('admin/producto/reporteProductoMinimo',$data);
		$this->load->view('layouts/footer');
    }


    public function reporteVenta(){
        $fechainicio = $this->input->post("fechainicio");
        $ffechainicio = $this->input->post("fechainicio");
        $fechainicio=$fechainicio." 00:00:00";
        $fechainicioo=$ffechainicio;
        $fechafin = $this->input->post("fechafin");
        $ffechafin = $this->input->post("fechafin");
        $fechafin=$fechafin." 23:59:59";
        $fechafinn=$ffechafin;

		if ($this->input->post("buscar")) {
			$ventaa = $this->venta_model->retornarVentaReporte($fechainicio,$fechafin);
		}
		else{
			$ventaa=$this->venta_model->retornarVentaReportee();
		}
		
		$this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $data['venta']=$ventaa;
        $data['fechainicio']=$fechainicioo;
        $data['fechafin']=$fechafinn;
		$this->load->view('admin/venta/reporteVenta',$data);
		$this->load->view("layouts/footer");
    }


    public function reporteProductoVendido(){
        if($this->session->userdata('userName'))
		{
                $fechainicio = $this->input->post("fechainicio");
                $ffechainicio = $this->input->post("fechainicio");
                $fechainicio=$fechainicio." 00:00:00";
                $fechainicioo=$ffechainicio;
                $fechafin = $this->input->post("fechafin");
                $ffechafin = $this->input->post("fechafin");
                $fechafin=$fechafin." 23:59:59";
                $fechafinn=$ffechafin;

		        if ($this->input->post("buscar")) {
		        	$productoss = $this->producto_model->reporteProductoVendido($fechainicio,$fechafin);
		        }
		        else{
		        	$productoss =$this->producto_model->reporteProductoVendidoo();
		        }
            
		        $this->load->view("layouts/header");
                $this->load->view("layouts/aside");
                $data['producto']=$productoss;
                $data['fechainicio']=$fechainicioo;
                $data['fechafin']=$fechafinn;
		        $this->load->view('admin/producto/reporteProductoVendidos',$data);
		        $this->load->view("layouts/footer");
        }
        else
        {
            redirect('usuarios/index','refresh');
        }   
        
        }

    
    public function reporteClienteVenta()
	{
        $fechainicio = $this->input->post("fechainicio");
        $ffechainicio = $this->input->post("fechainicio");
        $fechainicio=$fechainicio." 00:00:00";
        $fechainicioo=$ffechainicio;
        $fechafin = $this->input->post("fechafin");
        $ffechafin = $this->input->post("fechafin");
        $fechafin=$fechafin." 23:59:59";
        $fechafinn=$ffechafin;

		if ($this->input->post("buscar"))
        {
            $ventaa=$this->venta_model->retornarClienteVentaReporte($fechainicio,$fechafin);
        }
        else
        {
            $ventaa=$this->venta_model->retornarClienteVentaReportee();
        }
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
        $data['venta']=$ventaa;
        $data['fechainicio']=$fechainicioo;
        $data['fechafin']=$fechafinn;
        $this->load->view('admin/venta/reporteClientesVenta',$data);
		$this->load->view('layouts/footer');
    }


    public function reporteVentaDiaria()
	{
        $fechainicio = $this->input->post("fechainicio");
        $ffechainicio = $this->input->post("fechainicio");
        $fechainicio=$fechainicio." 00:00:00";
        $fechainicioo=$ffechainicio;
        $fechafin = $this->input->post("fechafin");
        $ffechafin = $this->input->post("fechafin");
        $fechafin=$fechafin." 23:59:50";
        $fechafinn=$ffechafin;

		if ($this->input->post("buscar"))
        {
            $ventaa=$this->venta_model->retornarReporteVentaDiaria($fechainicio,$fechafin);
        }
        else
        {
            $ventaa=$this->venta_model->retornarReporteVentaDiariaa();
        }
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
        
        $data['venta']=$ventaa;
        $data['fechainicio']=$fechainicioo;
        $data['fechafin']=$fechafinn;
        $this->load->view('admin/venta/reporteVentasDiarias',$data);
		$this->load->view('layouts/footer');
    }


    
    public function reporteVentaMensual()
	{
        $fechainicio = $this->input->post("fechainicio");
        $ffechainicio = $this->input->post("fechainicio");
        $fechainicio=$fechainicio." 00:00:00";
        $fechainicioo=$ffechainicio;
        $fechafin = $this->input->post("fechafin");
        $ffechafin = $this->input->post("fechafin");
        $fechafin=$fechafin." 23:59:59";
        $fechafinn=$ffechafin;

		if ($this->input->post("buscar"))
        {
            $ventaa=$this->venta_model->retornarReporteVentaMensual($fechainicio,$fechafin);
        }
        else
        {
            $ventaa=$this->venta_model->retornarReporteVentaMensuall();
        }
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
        $data['venta']=$ventaa;
        $data['fechainicio']=$fechainicioo;
        $data['fechafin']=$fechafinn;
        $this->load->view('admin/venta/reporteVentaMensual',$data);
		$this->load->view('layouts/footer');
    }
    
    
    public function reporteVentaAnual()
	{
        $fechainicio = $this->input->post("fechainicio");
        $ffechainicio = $this->input->post("fechainicio");
        $fechainicio=$fechainicio." 00:00:00";
        $fechainicioo=$ffechainicio;
        $fechafin = $this->input->post("fechafin");
        $ffechafin = $this->input->post("fechafin");
        $fechafin=$fechafin." 23:59:59";
        $fechafinn=$ffechafin;

		if ($this->input->post("buscar"))
        {
            $ventaa=$this->venta_model->retornarReporteVentaAnual($fechainicio,$fechafin);
        }
        else
        {
            $ventaa=$this->venta_model->retornarReporteVentaAnuall();
        }
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
        $data['venta']=$ventaa;
        $data['fechainicio']=$fechainicioo;
        $data['fechafin']=$fechafinn;
        $this->load->view('admin/venta/reporteVentaAnual',$data);
		$this->load->view('layouts/footer');
    }





    // para exportar en PDF los reportes 

    public function reporteProductoStockActualPDF()
	{
		$this->load->Library('reporteProductoStockActualPDF');
		$lista=$this->producto_model->reporteProductoActual();
		$lista=$lista->result();
		$this->pdf=new reporteProductoStockActualPDF();
        $this->pdf->AddPage();
        
        

        $this->pdf->Cell(55,10,'','B');
        $this->pdf->Cell(30,10,'','B');
        $this->pdf->Cell(50,10,'','B');
        $this->pdf->Cell(30,10,'','B');
        $this->pdf->Cell(30,10,'','B');
        $this->pdf->Ln(10);

        $this->pdf->SetFont('Arial','',11);

		$this->pdf->Cell(55,15,'CATEGORIA','B');
        $this->pdf->Cell(30,15,'CODIGO','B');
        $this->pdf->Cell(50,15,'NOMBRE PRODUCTO','B');
        $this->pdf->Cell(30,15,'PRECIO','B');
        $this->pdf->Cell(30,15,'STOCK ACTUAL','B');
        $this->pdf->Ln(15);

		foreach ($lista as $row) {
            $categori=$row->categori;
            $codigo=$row->codigo;
            $nombreProducto=$row->nombreProducto;
            $precioVenta=$row->precioVenta;
            $stock=$row->stock;
            $this->pdf->Cell(55,10,$categori,'B');
            $this->pdf->Cell(30,10,$codigo,'B');
            $this->pdf->Cell(50,10,$nombreProducto,'B');
            $this->pdf->Cell(30,10,$precioVenta,'B');
            $this->pdf->Cell(30,10,$stock,'B');
			$this->pdf->Ln(10);
		}
		$this->pdf->Output('ProductoStockActual.pdf','I');

    }
    
    public function reporteProductoStockMinimoPDF()
	{
        // $stockMin = $this->input->post("stockMinn");
        $stockMin = $_POST['stockMinn'];
        $this->load->Library('reporteProductoStockMinimoPDF');

        if ($this->input->post("stockMinn")!=0) {
            
            $lista = $this->producto_model->reporteProductoMinimo($stockMin);
		    
		}
		else{
			$lista=$this->producto_model->reporteProductoMinimoo();
        }
        
        $lista=$lista->result();
        $this->pdf=new reporteProductoStockMinimoPDF();
        $this->pdf->AddPage();
        $this->pdf->SetFont('Arial','',11);

        if ($this->input->post("stockMinn")!=0) {
            $this->pdf->Cell(55,15,'Productos con stock menor e igual a '.$stockMin.'.');
        }
        else{
            $this->pdf->Cell(55,15,'Productos con stock menor e igual a 10');
        }
        $this->pdf->Ln(10);

        $this->pdf->Cell(55,10,'','B');
        $this->pdf->Cell(30,10,'','B');
        $this->pdf->Cell(50,10,'','B');
        $this->pdf->Cell(30,10,'','B');
        $this->pdf->Cell(30,10,'','B');
        $this->pdf->Ln(10);

        $this->pdf->SetFont('Arial','B',11);

		$this->pdf->Cell(54,15,'CATEGORIA','B');
        $this->pdf->Cell(30,15,'CODIGO','B');
        $this->pdf->Cell(50,15,'NOMBRE PRODUCTO','B');
        $this->pdf->Cell(30,15,'PRECIO','B');
        $this->pdf->Cell(31,15,'STOCK ACTUAL','B');
        $this->pdf->Ln(15);

        $this->pdf->SetFont('Arial','',11);
		foreach ($lista as $row) {
            $categori=$row->categori;
            $codigo=$row->codigo;
            $nombreProducto=$row->nombreProducto;
            $precioVenta=$row->precioVenta;
            $stock=$row->stock;
            $this->pdf->Cell(54,10,$categori,'B');
            $this->pdf->Cell(30,10,$codigo,'B');
            $this->pdf->Cell(50,10,$nombreProducto,'B');
            $this->pdf->Cell(30,10,$precioVenta,'B');
            $this->pdf->Cell(31,10,$stock,'B');
			$this->pdf->Ln(10);
		}
		$this->pdf->Output('ProductoStockMinimo.pdf','I');

    }
    
    public function reporteProductoVendidosPDF()
	{
        $fechainicio = $_POST['ffechainicio'];
        $fechainicioo=$fechainicio." 00:00:00";
        $fechafin = $_POST['ffechafin'];
        $fechafinn=$fechafin." 23:59:59";

        $this->load->Library('reporteProductoVendidosPDF');

        // if ($this->input->post("ffechainicio")>0) 
        if ($this->input->post("ffechainicio")!="") 
        {
            
            $lista = $this->producto_model->reporteProductoVendido($fechainicioo,$fechafinn);
            // $lista = $this->producto_model->reporteProductoVendidoo();           
        }
        else
        {
            $lista = $this->producto_model->reporteProductoVendidoo();   
            // $lista = $this->producto_model->reporteProductoVendido($fechainicio,$fechafin);
        }
        
        $lista=$lista->result();
        $this->pdf=new reporteProductoVendidosPDF();
        $this->pdf->AddPage();
        $this->pdf->SetFont('Arial','',11);

        $this->pdf->Ln(10);$this->pdf->Ln(10);

        if ($this->input->post("ffechainicio")=="") 
        {
            $this->pdf->Cell(55,15,'Todo los productos vendidos.');
        }
        else
        {
            $this->pdf->Cell(55,15,'Productos Vendidos de '.$fechainicio.' hasta '.$fechafin.'.');
        }
        $this->pdf->Ln(10);

        $this->pdf->Cell(20,10,'','B');
        $this->pdf->Cell(70,10,'','B');
        $this->pdf->Cell(30,10,'','B');
        $this->pdf->Cell(30,10,'','B');
        $this->pdf->Cell(30,10,'','B');
        $this->pdf->Ln(10);

        $this->pdf->SetFont('Arial','B',11);

        $this->pdf->Cell(20,15,'NRO','B');
		$this->pdf->Cell(70,15,'PRODUCTO','B');
        $this->pdf->Cell(30,15,'CANTIDAD','B');
        $this->pdf->Cell(30,15,'PRECIO','B');
        $this->pdf->Cell(31,15,'TOTAL','B');
        $this->pdf->Ln(15);

        $this->pdf->SetFont('Arial','',11);

        $indice=1;
        $total=0;
		foreach ($lista as $row) {            
            $this->pdf->Cell(20,10,$indice,'B');
            $this->pdf->Cell(70,10,$row->nombreProducto,'B');
            $this->pdf->Cell(30,10,$row->totalVendidos,'B');
            $this->pdf->Cell(30,10,$row->precioVenta,'B');
            $this->pdf->Cell(31,10,number_format($row->precioVenta * $row->totalVendidos, 2, '.', ''),'B');
            $this->pdf->Ln(10);

            $indice++;   
            $total= $total+($row->precioVenta * $row->totalVendidos);
        }

        $this->pdf->Cell(150,15,'Total de productos vendidos ');
        $this->pdf->Cell(50,15,' '.number_format($total,2,'.','').' BS'); 

		$this->pdf->Output('ReporteProductoVendidos.pdf','I');

	}


    public function reporteVentaPDF()
	{
        $fechainicio = $_POST['ffechainicio'];
        $fechainicioo=$fechainicio." 00:00:00";
        $fechafin = $_POST['ffechafin'];
        $fechafinn=$fechafin." 23:59:59";

        $this->load->Library('reporteVentaPDF');

        
        if ($this->input->post("ffechainicio")!="") 
        {
            $lista = $this->venta_model->retornarVentaReporte($fechainicioo,$fechafinn);          
        }
        else
        {
            $lista = $this->venta_model->retornarVentaReportee();  
        }
        
        $lista=$lista->result();
        $this->pdf=new reporteVentaPDF();
        $this->pdf->AddPage();
        $this->pdf->SetFont('Arial','',11);
        
        if ($this->input->post("ffechainicio")=="") 
        {
            $this->pdf->Cell(55,15,'Todas las vendentas Realizadas. ');
        }
        else
        {
            $this->pdf->Cell(55,15,'Productos Vendidos de '.$fechainicio.' hasta '.$fechafin.'.');
        }
        $this->pdf->Ln(10);

        $this->pdf->Cell(15,10,'','B');
        $this->pdf->Cell(55,10,'','B');
        $this->pdf->Cell(45,10,'','B');
        $this->pdf->Cell(30,10,'','B');
        $this->pdf->Cell(50,10,'','B');
        $this->pdf->Ln(10);

        $this->pdf->SetFont('Arial','B',11);

        $this->pdf->Cell(15,15,'NRO','B');
		$this->pdf->Cell(55,15,'NOMBRE DEL CLIENTE','B');
        $this->pdf->Cell(45,15,'TOTAL IMPORTE BS','B');
        $this->pdf->Cell(30,15,'FECHA','B');
        $this->pdf->Cell(50,15,'VENDEDOR','B');
        $this->pdf->Ln(15);

        $this->pdf->SetFont('Arial','',11);

        $indice=1;
        $total=0;
		foreach ($lista as $row) {            
            $this->pdf->Cell(15,10,$indice,'B');
            $this->pdf->Cell(55,10,$row->razonSocial,'B');
            $this->pdf->Cell(45,10,$row->total,'B');
            $this->pdf->Cell(30,10,$row->fechaRegistro,'B');
            $this->pdf->Cell(50,10,$row->nombre." ".$row->primerApellido." ".$row->segundoApellido,'B');
            $this->pdf->Ln(10);

            $indice++;   
            $total= $total+$row->total;
        }

        $this->pdf->Cell(150,15,'Total de ventas realizadas ');
        $this->pdf->Cell(50,15,' '.number_format($total,2,'.','').' BS'); 

		$this->pdf->Output('ReporteVentasRealizadas.pdf','I');

	}

    public function reporteClienteVentaPDF()
	{
        $fechainicio = $_POST['ffechainicio'];
        $fechainicioo=$fechainicio." 00:00:00";
        $fechafin = $_POST['ffechafin'];
        $fechafinn=$fechafin." 23:59:59";

        $this->load->Library('reporteClienteVentaPDF');

        
        if ($this->input->post("ffechainicio")!="") 
        {
            $lista = $this->venta_model->retornarClienteVentaReporte($fechainicioo,$fechafinn);         
        }
        else
        {
            $lista = $this->venta_model->retornarClienteVentaReportee();  
        }
        
        $lista=$lista->result();
        $this->pdf=new reporteClienteVentaPDF();
        $this->pdf->AddPage();
        $this->pdf->SetFont('Arial','',11);
        
        if ($this->input->post("ffechainicio")=="") 
        {
            $this->pdf->Cell(55,15,'Todo los clientes.');
        }
        else
        {
            $this->pdf->Cell(55,15,'Productos Vendidos de '.$fechainicio.' hasta '.$fechafin.'.');
        }
        $this->pdf->Ln(10);

        $this->pdf->Cell(20,10,'','B');
        $this->pdf->Cell(110,10,'','B');
        $this->pdf->Cell(50,10,'','B');
        $this->pdf->Ln(10);

        $this->pdf->SetFont('Arial','B',11);

        $this->pdf->Cell(20,15,'NRO','B');
		$this->pdf->Cell(110,15,'NOMBRE DEL CLIENTE','B');
        $this->pdf->Cell(50,15,'TOTAL IMPORTE BS','B');
        $this->pdf->Ln(15);

        $this->pdf->SetFont('Arial','',11);

        $indice=1;
        $total=0;
		foreach ($lista as $row) {            
            $this->pdf->Cell(20,10,$indice,'B');
            $this->pdf->Cell(110,10,$row->razonSocial,'B');
            $this->pdf->Cell(50,10,$row->total,'B');
            $this->pdf->Ln(10);

            $indice++;   
            $total= $total+$row->total;
        }

        $this->pdf->Cell(130,15,'IMPORTE TOTAL');
        $this->pdf->Cell(50,15,' '.number_format($total,2,'.','').' BS'); 

		$this->pdf->Output('reporteClienteVentaPDF.pdf','I');

	}

    
    public function reporteVentaDiariaPDF()
	{
        $fechainicio = $_POST['ffechainicio'];
        $fechainicioo=$fechainicio." 00:00:00";
        $fechafin = $_POST['ffechafin'];
        $fechafinn=$fechafin." 23:59:59";

        $this->load->Library('reporteVentaDiariaPDF');

        
        if ($this->input->post("ffechainicio")!="") 
        {
            $lista = $this->venta_model->retornarReporteVentaDiaria($fechainicioo,$fechafinn);        
        }
        else
        {
            $lista = $this->venta_model->retornarReporteVentaDiariaa(); 
        }
        
        $lista=$lista->result();
        $this->pdf=new reporteVentaDiariaPDF();
        $this->pdf->AddPage();
        $this->pdf->SetFont('Arial','',11);
        
        if ($this->input->post("ffechainicio")=="") 
        {
            $this->pdf->Cell(55,15,'Todas las ventas diarias.');
        }
        else
        {
            $this->pdf->Cell(55,15,'Productos Vendidos de '.$fechainicio.' hasta '.$fechafin.'.');
        }
        $this->pdf->Ln(10);

        $this->pdf->Cell(20,10,'','B');
        $this->pdf->Cell(110,10,'','B');
        $this->pdf->Cell(50,10,'','B');
        $this->pdf->Ln(10);

        $this->pdf->SetFont('Arial','B',11);

        $this->pdf->Cell(20,15,'NRO','B');
		$this->pdf->Cell(110,15,'FECHA - DIA','B');
        $this->pdf->Cell(50,15,'TOTAL IMPORTE BS','B');
        $this->pdf->Ln(15);

        $this->pdf->SetFont('Arial','',11);

        $indice=1;
        $total=0;
		foreach ($lista as $row) {            
            $this->pdf->Cell(20,10,$indice,'B');
            $this->pdf->Cell(110,10,$row->fechaRegistro,'B');
            $this->pdf->Cell(50,10,$row->total,'B');
            $this->pdf->Ln(10);

            $indice++;   
            $total= $total+$row->total;
        }

        $this->pdf->Cell(130,15,'IMPORTE TOTAL');
        $this->pdf->Cell(50,15,' '.number_format($total,2,'.','').' BS'); 

		$this->pdf->Output('ReporteVentaDiariaPDF.pdf','I');

    }
    
    public function reporteVentaMensualPDF()
	{
        $fechainicio = $_POST['ffechainicio'];
        $fechainicioo=$fechainicio." 00:00:00";
        $fechafin = $_POST['ffechafin'];
        $fechafinn=$fechafin." 23:59:59";

        $this->load->Library('reporteVentaMensualPDF');

        
        if ($this->input->post("ffechainicio")!="") 
        {
            $lista = $this->venta_model->retornarReporteVentaMensual($fechainicioo,$fechafinn);        
        }
        else
        {
            $lista = $this->venta_model->retornarReporteVentaMensuall();
        }
        
        $lista=$lista->result();
        $this->pdf=new reporteVentaMensualPDF();
        $this->pdf->AddPage();
        $this->pdf->SetFont('Arial','',11);
        
        if ($this->input->post("ffechainicio")=="") 
        {
            $this->pdf->Cell(55,15,'Todos las ventas mensuales.');
        }
        else
        {
            $this->pdf->Cell(55,15,'Productos Vendidos de '.$fechainicio.' hasta '.$fechafin.'.');
        }
        $this->pdf->Ln(10);

        $this->pdf->Cell(20,10,'','B');
        $this->pdf->Cell(110,10,'','B');
        $this->pdf->Cell(50,10,'','B');
        $this->pdf->Ln(10);

        $this->pdf->SetFont('Arial','B',11);

        $this->pdf->Cell(20,15,'NRO','B');
		$this->pdf->Cell(110,15,'FECHA - MES','B');
        $this->pdf->Cell(50,15,'TOTAL IMPORTE BS','B');
        $this->pdf->Ln(15);

        $this->pdf->SetFont('Arial','',11);

        $indice=1;
        $total=0;
		foreach ($lista as $row) {            
            $this->pdf->Cell(20,10,$indice,'B');
            $this->pdf->Cell(110,10,$row->fechaRegistro,'B');
            $this->pdf->Cell(50,10,$row->total,'B');
            $this->pdf->Ln(10);

            $indice++;   
            $total= $total+$row->total;
        }

        $this->pdf->Cell(130,15,'IMPORTE TOTAL');
        $this->pdf->Cell(50,15,' '.number_format($total,2,'.','').' BS'); 

		$this->pdf->Output('reporteVentaMensualPDF.pdf','I');

    }


    public function reporteVentaAnualPDF()
	{
        $fechainicio = $_POST['ffechainicio'];
        $fechainicioo=$fechainicio." 00:00:00";
        $fechafin = $_POST['ffechafin'];
        $fechafinn=$fechafin." 23:59:59";

        $this->load->Library('reporteVentaAnualPDF');

        
        if ($this->input->post("ffechainicio")!="") 
        {
            $lista = $this->venta_model->retornarReporteVentaAnual($fechainicioo,$fechafinn);        
        }
        else
        {
            $lista = $this->venta_model->retornarReporteVentaAnuall();
        }
        
        $lista=$lista->result();
        $this->pdf=new reporteVentaAnualPDF();
        $this->pdf->AddPage();
        $this->pdf->SetFont('Arial','',11);
        
        if ($this->input->post("ffechainicio")=="") 
        {
            $this->pdf->Cell(55,15,'Todas las Ventas Anuales.');
        }
        else
        {
            $this->pdf->Cell(55,15,'Productos Vendidos de '.$fechainicio.' hasta '.$fechafin.'.');
        }
        $this->pdf->Ln(10);

        $this->pdf->Cell(20,10,'','B');
        $this->pdf->Cell(110,10,'','B');
        $this->pdf->Cell(50,10,'','B');
        $this->pdf->Ln(10);

        $this->pdf->SetFont('Arial','B',11);

        $this->pdf->Cell(20,15,'NRO','B');
		$this->pdf->Cell(110,15,'AÑO','B');
        $this->pdf->Cell(50,15,'TOTAL IMPORTE BS','B');
        $this->pdf->Ln(15);

        $this->pdf->SetFont('Arial','',11);

        $indice=1;
        $total=0;
		foreach ($lista as $row) {            
            $this->pdf->Cell(20,10,$indice,'B');
            $this->pdf->Cell(110,10,$row->fechaRegistro,'B');
            $this->pdf->Cell(50,10,$row->total,'B');
            $this->pdf->Ln(10);

            $indice++;   
            $total= $total+$row->total;
        }

        $this->pdf->Cell(130,15,'IMPORTE TOTAL');
        $this->pdf->Cell(50,15,' '.number_format($total,2,'.','').' BS'); 

		$this->pdf->Output('ReporteVentaAnualPDF.pdf','I');

    }
    





// exportar a PDF las listas

    public function listaCategoriaPDF()
	{
		$this->load->Library('listaCategoriaPDF');
		$lista=$this->categoria_model->retornarCategoria();
		$lista=$lista->result();
		$this->pdf=new listaCategoriaPDF();
        $this->pdf->AddPage();
        
        

        $this->pdf->Cell(20,10,'','B');
        $this->pdf->Cell(60,10,'','B');
        $this->pdf->Cell(110,10,'','B');
        $this->pdf->Ln(10);

        $this->pdf->SetFont('Arial','B',11);

		$this->pdf->Cell(20,15,'NRO','B');
        $this->pdf->Cell(60,15,'CATEGORIA','B');
        $this->pdf->Cell(110,15,'DESCRIPCION','B');
        $this->pdf->Ln(15);

        $this->pdf->SetFont('Arial','',11);

        $indice=1;
		foreach ($lista as $row) {            
            $this->pdf->Cell(20,10,$indice,'B');
            $this->pdf->Cell(60,10,$row->nombreCategoria,'B');
            $this->pdf->Cell(110,10,$row->descripcion,'B');
            $this->pdf->Ln(10);

            $indice++;   
        }
		$this->pdf->Output('ListaCategoriaPDF.pdf','I');

    }
    

    public function listaClientePDF()
	{
		$this->load->Library('listaClientePDF');
		$lista=$this->cliente_model->retornarCliente();
		$lista=$lista->result();
		$this->pdf=new listaClientePDF();
        $this->pdf->AddPage();
        
        

        $this->pdf->Cell(30,10,'','B');
        $this->pdf->Cell(100,10,'','B');
        $this->pdf->Cell(65,10,'','B');
        $this->pdf->Ln(10);

        $this->pdf->SetFont('Arial','B',11);

		$this->pdf->Cell(30,15,'NRO','B');
        $this->pdf->Cell(100,15,'CATEGORIA','B');
        $this->pdf->Cell(65,15,'DESCRIPCION','B');
        $this->pdf->Ln(15);

        $this->pdf->SetFont('Arial','',11);

        $indice=1;
		foreach ($lista as $row) {            
            $this->pdf->Cell(30,10,$indice,'B');
            $this->pdf->Cell(100,10,$row->razonSocial,'B');
            $this->pdf->Cell(65,10,$row->nit,'B');
            $this->pdf->Ln(10);

            $indice++;   
        }
		$this->pdf->Output('ListaClientePDF.pdf','I');

    }


    public function listaUsuarioPDF()
	{
		$this->load->Library('listaUsuarioPDF');
		$lista=$this->usuario_model->retornarUsuario();
		$lista=$lista->result();
		$this->pdf=new listaUsuarioPDF();
        $this->pdf->AddPage();
        
        

        $this->pdf->Cell(20,10,'','B');
        $this->pdf->Cell(70,10,'','B');
        $this->pdf->Cell(35,10,'','B');
        $this->pdf->Cell(35,10,'','B');
        $this->pdf->Cell(35,10,'','B');
        $this->pdf->Ln(10);

        $this->pdf->SetFont('Arial','B',11);

		$this->pdf->Cell(20,15,'NRO','B');
        $this->pdf->Cell(70,15,'NOMBRE COMPLETO','B');
        $this->pdf->Cell(35,15,'C.I.','B');
        $this->pdf->Cell(35,15,'TELEFONO','B');
        $this->pdf->Cell(35,15,'ROL','B');
        $this->pdf->Ln(15);

        $this->pdf->SetFont('Arial','',11);

        $indice=1;
		foreach ($lista as $row) {            
            $this->pdf->Cell(20,10,$indice,'B');
            $this->pdf->Cell(70,10,$row->nombre." ".$row->primerApellido." ".$row->segundoApellido,'B');
            $this->pdf->Cell(35,10,$row->ci,'B');
            $this->pdf->Cell(35,10,$row->telefono,'B');
            $this->pdf->Cell(35,10,$row->nombreRol,'B');
            $this->pdf->Ln(10);

            $indice++;   
        }
		$this->pdf->Output('listaUsuarioPDF.pdf','I');

    }


    public function listaProductoPDF()
	{
		$this->load->Library('listaProductoPDF');
		$lista=$this->producto_model->retornarProducto();
		$lista=$lista->result();
		$this->pdf=new listaProductoPDF();
        $this->pdf->AddPage();
        
        

        $this->pdf->Cell(20,10,'','B');
        $this->pdf->Cell(30,10,'','B');
        $this->pdf->Cell(50,10,'','B');
        $this->pdf->Cell(45,10,'','B');
        $this->pdf->Cell(25,10,'','B');
        $this->pdf->Cell(25,10,'','B');
        $this->pdf->Ln(10);

        $this->pdf->SetFont('Arial','B',11);

		$this->pdf->Cell(20,15,'NRO','B');
        $this->pdf->Cell(30,15,'CODIGO','B');
        $this->pdf->Cell(50,15,'NOMBRE','B');
        $this->pdf->Cell(45,15,'CATEGORIA','B');
        $this->pdf->Cell(25,15,'STOCK','B');
        $this->pdf->Cell(25,15,'PRECIO','B');
        $this->pdf->Ln(15);

        $this->pdf->SetFont('Arial','',11);

        $indice=1;
		foreach ($lista as $row) {            
            $this->pdf->Cell(20,10,$indice,'B');
            $this->pdf->Cell(30,10,$row->codigo,'B');
            $this->pdf->Cell(50,10,$row->nombreProducto,'B');
            $this->pdf->Cell(45,10,$row->categori,'B');
            $this->pdf->Cell(25,10,$row->stock,'B');
            $this->pdf->Cell(25,10,$row->precioVenta,'B');
            $this->pdf->Ln(10);

            $indice++;   
        }
		$this->pdf->Output('listaProductoPDF.pdf','I');

    }



}
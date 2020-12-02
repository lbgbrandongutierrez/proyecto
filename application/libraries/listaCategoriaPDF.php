<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    // Incluimos el archivo fpdf
    require_once APPPATH."/third_party/fpdf/fpdf.php";
 
    //Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
    class ListaCategoriaPDF extends FPDF {		
		

        // El encabezado del PDF
        public function Header(){
            //$this->Image('imagenes/logo.png',10,8,22);
            $this->SetFont('Arial','B',13);
            $this->Cell(30);
            $this->Cell(140,15,'LISTA DE CATEGORIA',0,0,'C');
            $this->Ln('10');
          
       }

	   
	   public function Footer(){
            $this->SetFont('Arial','B',13);
            $this->Cell(30);
            // $this->Cell(120,10,'PIE DE PAGINA',0,0,'C');
            $this->Ln('5');
      }
}
?>
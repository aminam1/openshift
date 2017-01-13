<?php
require('fpdf.php');


class PDF extends FPDF
{
  function Header()
    {
   
      $this->SetFont('Helvetica','B',15);
      $this->SetXY(50, 10);
	  $this->Ln(20);
      $this->Cell(0,10,'Poruke',1,0,'C');  
	   $this->Ln(35);
     }

  function Footer()
    {
      $this->SetXY(100,-15);
      $this->SetFont('Helvetica','I',10);
    
    }
}



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$kontakti=simplexml_load_file('kontakti.xml');
$i=1;

	 foreach ($kontakti->kontakt as $kontakt){ 
		   
		       
			   $pdf->Cell(0,10,'Ime:'.$kontakt['ime'],0,1);
			   $pdf->Cell(0,10,'Email:'.$kontakt->email,0,1);
			   $pdf->Cell(0,10,'Poruka:'.$kontakt->poruka,0,1);
			   
			   
			   $i=$i+1;
	 }
	
$pdf->Output();
?>
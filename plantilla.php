<?php
	require("conexion.php");
    $fecha1 = $_POST['fecha1'];
    $fecha2 = $_POST['fecha2'];
	$query = "SELECT * FROM transaccion WHERE fecha BETWEEN '$fecha1' and '$fecha2'" ;
	$resultado = mysqli_query($conecion,$query);
	
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('images.jpge', 5, 5, 30 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Reporte De ventas',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Reporte '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,6,'PLACA',1,0,'C',1);
	$pdf->Cell(20,6,'TIPO DE CARRO',1,0,'C',1);
	$pdf->Cell(70,6,'SERVICIOS',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = mysqli_fetch_assoc($resultado))
	{
		$pdf->Cell(70,6,utf8_decode($row['placa']),1,0,'C');
		$pdf->Cell(20,6,$row['tipo_carro'],1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['servicios']),1,1,'C');
	}
	$pdf->Output();
?>  

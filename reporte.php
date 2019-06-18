<?php	

require("conexion.php");
$fecha1 = $_GET['fecha1'];
$fecha2 = $_GET['fecha2'];
	$mihtml = '<table border=1';	
	$mihtml .= '<thead>';
	$mihtml .= '<tr>';
	$mihtml .= '<th>PLACA</th>';
	$mihtml .= '<th>TIPO DE CARRO</th>';
	$mihtml .= '<th>SERVICIOS</th>';
	$mihtml .= '<th>TOTAL</th>';
	$mihtml .= '<th>FECHA</th>';
	
	$mihtml .= '</tr>';
	$mihtml .= '</thead>';
	$mihtml .= '<tbody>';
	
	$resultado = "SELECT * FROM transaccion where fecha between '$fecha1' and '$fecha2'";
	$resultado_transacciones = mysqli_query($conexion, $resultado);
	while($transacciones = mysqli_fetch_assoc($resultado_transacciones)){
		$mihtml .= '<tr><td>'.$transacciones['placa'] . "</td>";
		$mihtml .= '<td>'.$transacciones['tipo_carro'] . "</td>";
		$mihtml .= '<td>'.$transacciones['servicios'] . "</td>";
		$mihtml .= '<td>'.$transacciones['total'] . "</td>";
		$mihtml .= '<td>'.$transacciones['fecha'] . "</td>";
				
	}
	
	$mihtml .= '</tbody>';
	$mihtml .= '</table';

	
	//referencia
	use Dompdf\Dompdf;

	// incluye autoloader
	require_once("dompdf/autoload.inc.php");

	//Creando instancia para generar PDF
	$dompdf = new DOMPDF();
	
	// Cargar el HTML
	$dompdf->load_html('<h1 style="text-align: center;">REPORTE DE SERVICIOS REALIZADOS</h1>'. $mihtml .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir nombre de archivo
	$dompdf->stream(
		"Lista_Transacciones", 
		array(
			"Attachment" => false //Para realizar la descarga
		)
	);
?>
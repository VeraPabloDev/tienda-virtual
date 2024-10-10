<?php

	# Incluyendo librerias necesarias #
	require "./code128.php";
	require '../../Config/Config.php';

// Inicia la sesión
session_start();

// Obtén los datos de la transacción de la sesión
$datos_transaccion = isset($_SESSION['datos_transaccion']) ? $_SESSION['datos_transaccion'] : array();



// Verifica que la clave exista en la sesión antes de acceder a ella
if (!empty($datos_transaccion)) {
	// Tu código para generar el PDF con los datos de la transacción
} else {
	echo 'Error: No se encontraron datos de transacción en la sesión.';
}


	$pdf = new PDF_Code128('P','mm','Letter');
	$pdf->SetMargins(17,17,17);
	$pdf->AddPage();

	# Logo de la empresa formato png #
	$pdf->Image('./img/logopdf.png',165,12,35,35,'PNG');

	# Encabezado y datos de la empresa #
	$pdf->SetFont('Arial','B',16);
	$pdf->SetTextColor(32,100,210);
	$pdf->Cell(150,10,iconv("UTF-8", "ISO-8859-1",strtoupper(TITLE)),0,0,'L');

	$pdf->Ln(9);

	$pdf->SetFont('Arial','',10);
	$pdf->SetTextColor(39,39,51);
	$pdf->Cell(150,9,iconv("UTF-8", "ISO-8859-1","Clave de la transacción: " . $datos_transaccion['id_transaccion']),0,0,'L');

	$pdf->Ln(5);

	$pdf->Cell(150,9,iconv("UTF-8", "ISO-8859-1","Direccion: " . $datos_transaccion['direccion']),0,0,'L');

	$pdf->Ln(5);

	$pdf->Cell(150,9,iconv("UTF-8", "ISO-8859-1","Teléfono: 00000000"),0,0,'L');

	$pdf->Ln(5);

	$pdf->Cell(150,9,iconv("UTF-8", "ISO-8859-1","Email :" . $datos_transaccion['email']),0,0,'L');

	$pdf->Ln(10);

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(30,7,iconv("UTF-8", "ISO-8859-1","Fecha de emisión:"),0,0);
	$pdf->SetTextColor(97,97,97);
	$pdf->Cell(116,7,iconv("UTF-8", "ISO-8859-1",$datos_transaccion['fecha']),0,0,'L');
	$pdf->SetFont('Arial','B',10);
	$pdf->SetTextColor(39,39,51);
	$pdf->Cell(35,7,iconv("UTF-8", "ISO-8859-1",strtoupper("Factura Nro.")),0,0,'C');

	$pdf->Ln(7);

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(12,7,iconv("UTF-8", "ISO-8859-1","Cajero:"),0,0,'L');
	$pdf->SetTextColor(97,97,97);
	$pdf->Cell(134,7,iconv("UTF-8", "ISO-8859-1","Pablo Vera"),0,0,'L');
	$pdf->SetFont('Arial','B',10);
	$pdf->SetTextColor(97,97,97);
	$pdf->Cell(35,7,iconv("UTF-8", "ISO-8859-1",strtoupper("1")),0,0,'C');

	$pdf->Ln(10);

	$pdf->SetFont('Arial','',10);
	$pdf->SetTextColor(39,39,51);
	$pdf->Cell(13,7,iconv("UTF-8", "ISO-8859-1","Cliente:"),0,0);
	$pdf->SetTextColor(97,97,97);
	$pdf->Cell(60,7,iconv("UTF-8", "ISO-8859-1", $datos_transaccion['nombre']),0,0,'L');
	// Apellido
	$pdf->SetTextColor(39, 39, 51);
	$pdf->Cell(8); // Espacio adicional para centrar
	$pdf->Cell(14, 7, iconv("UTF-8", "ISO-8859-1", "Apellido:"), 0, 0);
	$pdf->SetTextColor(97, 97, 97);
	$pdf->Cell(60, 7, iconv("UTF-8", "ISO-8859-1", $datos_transaccion['apellido']), 0, 0, 'L');
	$pdf->SetTextColor(39,39,51);
	$pdf->Cell(7,7,iconv("UTF-8", "ISO-8859-1","ID:"),0,0,'L');
	$pdf->SetTextColor(97,97,97);
	$pdf->Cell(35,7,iconv("UTF-8", "ISO-8859-1",$datos_transaccion['id_cliente']),0,0);
	$pdf->SetTextColor(39,39,51);

	$pdf->Ln(7);

	$pdf->SetTextColor(39,39,51);
	$pdf->Cell(13,7,iconv("UTF-8", "ISO-8859-1","Ciudad: "),0,0);
	$pdf->SetTextColor(97,97,97);
	$pdf->Cell(109,7,iconv("UTF-8", "ISO-8859-1",$datos_transaccion['ciudad']),0,0);

	$pdf->Ln(9);

	# Tabla de productos #
	$pdf->SetFont('Arial','',8);
	$pdf->SetFillColor(23,83,201);
	$pdf->SetDrawColor(23,83,201);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(90,8,iconv("UTF-8", "ISO-8859-1","Descripción"),1,0,'C',true);
	$pdf->Cell(15,8,iconv("UTF-8", "ISO-8859-1","Cant."),1,0,'C',true);
	$pdf->Cell(25,8,iconv("UTF-8", "ISO-8859-1","Precio"),1,0,'C',true);
	$pdf->Cell(32,8,iconv("UTF-8", "ISO-8859-1","Subtotal"),1,0,'C',true);

	$pdf->Ln(8);

	
	// Iterar sobre los productos y mostrarlos en la factura
	foreach ($datos_transaccion['productos'] as $producto) {
    $pdf->SetTextColor(39,39,51);

    // Detalles del producto
    $pdf->Cell(90,7,iconv("UTF-8", "ISO-8859-1",$temp['nombre']),'L',0,'C');
    $pdf->Cell(15,7,iconv("UTF-8", "ISO-8859-1",$producto['cantidad']),'L',0,'C');
    $pdf->Cell(25,7,iconv("UTF-8", "ISO-8859-1","$".$temp['precio']." USD"),'L',0,'C');
	}


	/*----------  Detalles de la tabla  ----------*/
	$pdf->Cell(90,7,iconv("UTF-8", "ISO-8859-1","Nombre de producto a vender"),'L',0,'C');
	$pdf->Cell(15,7,iconv("UTF-8", "ISO-8859-1","7"),'L',0,'C');
	$pdf->Cell(25,7,iconv("UTF-8", "ISO-8859-1","$10 USD"),'L',0,'C');
	$pdf->Cell(32,7,iconv("UTF-8", "ISO-8859-1","$70.00 USD"),'LR',0,'C');
	$pdf->Ln(7);
	/*----------  Fin Detalles de la tabla  ----------*/


	
	$pdf->SetFont('Arial','B',9);
	
	# Impuestos & totales #
	$pdf->Cell(100,7,iconv("UTF-8", "ISO-8859-1",''),'T',0,'C');
	$pdf->Cell(15,7,iconv("UTF-8", "ISO-8859-1",''),'T',0,'C');
	$pdf->Cell(32,7,iconv("UTF-8", "ISO-8859-1","SUBTOTAL"),'T',0,'C');
	$pdf->Cell(34,7,iconv("UTF-8", "ISO-8859-1", $datos_transaccion['monto'] . " USD"),'T',0,'C');

	$pdf->Ln(7);

	$pdf->Cell(100,7,iconv("UTF-8", "ISO-8859-1",''),'',0,'C');
	$pdf->Cell(15,7,iconv("UTF-8", "ISO-8859-1",''),'',0,'C');
	$iva = $datos_transaccion['monto'] * 0.21;
	$pdf->Cell(32,7,iconv("UTF-8", "ISO-8859-1","IVA (21%)"),'',0,'C');
	$pdf->Cell(34,7,iconv("UTF-8", "ISO-8859-1","+ " . $iva),'',0,'C');

	$pdf->Ln(7);

	$pdf->Cell(100,7,iconv("UTF-8", "ISO-8859-1",''),'',0,'C');
	$pdf->Cell(15,7,iconv("UTF-8", "ISO-8859-1",''),'',0,'C');


	$pdf->Cell(32,7,iconv("UTF-8", "ISO-8859-1","TOTAL A PAGAR"),'T',0,'C');
	$total = $datos_transaccion['monto'] + $iva;
	$pdf->Cell(34,7,iconv("UTF-8", "ISO-8859-1", $total),'T',0,'C');

	$pdf->Ln(7);

	$pdf->Cell(100,7,iconv("UTF-8", "ISO-8859-1",''),'',0,'C');
	$pdf->Cell(15,7,iconv("UTF-8", "ISO-8859-1",''),'',0,'C');

	$pdf->Ln(7);

	$pdf->Cell(100,7,iconv("UTF-8", "ISO-8859-1",''),'',0,'C');
	$pdf->Cell(15,7,iconv("UTF-8", "ISO-8859-1",''),'',0,'C');

	$pdf->Ln(7);

	$pdf->Cell(100,7,iconv("UTF-8", "ISO-8859-1",''),'',0,'C');
	$pdf->Cell(15,7,iconv("UTF-8", "ISO-8859-1",''),'',0,'C');

	$pdf->Ln(12);

	$pdf->SetFont('Arial','',9);

	$pdf->SetTextColor(39,39,51);
	$pdf->MultiCell(0,9,iconv("UTF-8", "ISO-8859-1","*** Precios de productos incluyen impuestos. Para poder realizar un reclamo o devolución debe de presentar esta factura ***"),0,'C',false);

	$pdf->Ln(9);

	# Codigo de barras #
	$pdf->SetFillColor(39,39,51);
	$pdf->SetDrawColor(23,83,201);
	$pdf->Code128(72,$pdf->GetY(),"COD000001V0001",70,20);
	$pdf->SetXY(12,$pdf->GetY()+21);
	$pdf->SetFont('Arial','',12);
	$pdf->MultiCell(0,5,iconv("UTF-8", "ISO-8859-1","COD000001V0001"),0,'C',false);

	# Nombre del archivo PDF #
	$pdf->Output("I","Factura_Nro_1.pdf",true);

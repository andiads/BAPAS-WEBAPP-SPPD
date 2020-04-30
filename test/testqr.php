<?php
require_once("../plugin/fpdf/fpdf.php");
require_once("../plugin/phpqrcode/qrlib.php");

QRcode::png("coded num","testQR.png");
$pdf =  new FPDF('p','mm','A4');

$pdf->AddPage();

$pdf->Image("http://localhost/faroeeproject/BAPAS_WEB/test/qr_generator.php?code=content here", 10, 10, 20, 20, "png");

$pdf->Image("testQR.png",40,10,20,20,"png");

$pdf->Image("testQR.png",70,10,20,20,"png");

$pdf->Output();
?>
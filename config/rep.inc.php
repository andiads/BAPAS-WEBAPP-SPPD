<?php
require_once("../plugin/fpdf/fpdf.php");
require_once("../plugin/phpqrcode/qrlib.php");

class PDF extends FPDF {
	function Header() {
		global $t_kemenkumham;

		this->SetFont('Imprint MT Shadow', 19);
		
	}

	function Footer() {}

}

$t_kemenkumham = "KEMENTRIAN HUKUM DAN HAM RI";
$t_kanwil = "KANTOR WILAYAH DKI JAKARTA";
$t_bapas = "BALAI PEMASYARAKATAN (BAPAS) KELAS I JAKARTA SELATAN";

?>
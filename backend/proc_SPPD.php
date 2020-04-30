<?php
// Proses data2 tb_sppd 
 include '../config/func.php';

 	global $bapasDB;

 	$nip_sess 		= $_SESSION['nip'];

 	$id 			= "";
 	$letter_code	= "";
 	$nip 			= "";
 	$username 		= "";
	$nama 			= "";
	$golongan 		= "";
	$jabatan 		= "";
	$maksud 		= "";
	$tujuan 		= "";
	$nama_klien 	= "";
	$letter_date 	= "";
	$date_ins		= "";
	$qr_key			= "";
	$qr_gen 		= "";
	$qr_img			= "";
	$pdf_file_name 	= "";

 	$sppdData = $bapasDB->GetData('tb_sppd','*',"nip = $nip_sess","","","id DESC", "1");
 	$pegawaiData = $bapasDB->GetData('tb_pegawai',"*");

 	while ($d = $bapasDB->GetRow($sppdData)) {
 		$id 			= $d['id'];
 		$letter_code 	= $d['code'];
 		$nip 			= $d['nip'];
 		$username 		= $d['username'];
 		$nama 			= $d['fullname'];
 		$golongan 		= $d['golongan'];
 		$jabatan 		= $d['jabatan'];
 		$maksud			= $d['purpose'];
 		$tujuan 		= $d['place_to'];
 		$nama_klien 	= $d['nama_klien'];
 		$letter_date 	= $d['letter_date'];
 		$qr_key			= $d['qr_key'];
 		$date_ins 		= $d['date'];
 	}

 		$qr_img = "../".QR_IMG_Generate($qr_key, $letter_code, $nip, $date_ins);
 		$pdf_file_name = $letter_code."-".$nip."-".$date_ins."-SuprinPDF_BAPAS_JAKSEL_".$username.".pdf";
 		
?>
<?php
//(ANDI DWI SAPUTRO) - IG: @afaroee TW: @faroee  
	include '../config/func.php';

	header("Content-type:application/json");

	$username 		= $_SESSION['username'];

	$nama 			= filtering($_POST['fullname']);
	$nip 			= filtering($_POST['nip']);
	$golongan 		= filtering($_POST['golongan']);
	$jabatan 		= filtering($_POST['jabatan']);
	$maksud 		= filtering($_POST['maksud']);
	$tujuan 		= filtering($_POST['tujuan']);
	$nama_klien 	= filtering($_POST['nama-klien']);
	$letter_date 	= strval(getCurrentDate());
	

	$nKodeDef = 0000;
	$nKode = "";

	//ambil no terakhir sp
	$tbSppd 		= $bapasDB->GetData('tb_sppd','*', "","","","id DESC","1");
	$sppd 			= $bapasDB->GetRow($tbSppd);
	$date_ins  		= $sppd['date'];
	$nKodeDb 		= (int)$sppd['code'];
	$nKode 			= str_pad($nKodeDb+1, 4, 0, STR_PAD_LEFT);

	$qr_gen 		= qrKeyGenerate($nKode, $nip, $date_ins);

	// array data yg mau di input
	$vaData = array(
					"letter_date"=>$letter_date,
					"code"=>$nKode, 
					"qr_key"=>$qr_gen,
					"fullname"=>$nama,
					"golongan"=>$golongan,
					"jabatan"=>$jabatan,
					"nama_klien"=>$nama_klien,
					"nip"=>$nip, 
					"purpose"=>$maksud,
					"place_to"=>$tujuan,
					"username"=>$_SESSION['username'],
					"datetime_insert"=>date("Y-m-d h:i:sa"),
					"username"=>$username,
					"date"=>date("Y-m-d"),	
				);

	//exec query 
	$bapasDB->Insert("tb_sppd",$vaData,true);
	//$vaInsert = array("username"=>$username, "date"=>date("Y-m-d")); --> sementara gak kepake kayaknya 

	//$vaUpdate = array("username_update"=>$username);

	//$bapasDB->Update("tb_sppd",$vaData,"code = '$nKode'",false,$vaInsert) ; 

	// return data
	$data = $bapasDB->GetRow($tbSppd);

	//responses
	echo json_encode($data, JSON_PRETTY_PRINT);


?>
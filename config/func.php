<?php
//(ANDI DWI SAPUTRO) - IG: @afaroee TW: @faroee 

include_once 'conf.inc.php';
include_once 'data.inc.php';
include_once 'sys.inc.php';
include_once 'userData.php';

//plugins
include_once '../plugin/phpqrcode/qrlib.php';
require_once '../plugin/dompdf/autoload.inc.php';



session_start();
EzConnect();

// start koneksi DB
function EzConnect(){
	global $bapasDB;

	$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
	$server = $url["host"];
	$username = $url["user"];
	$password = $uerl["pass"];
	$db_name = substr($url["path"], 1);
	$bapasDB->ConnectDB($server, $username, $password, $db_name);
}

function faroeeCrypt($str) {
    $hashed = "";
    
    $hashed = password_hash($str, PASSWORD_BCRYPT);
    return $hashed;
}

// ambil tgl sekarang untuk keperluan pada template surat
function getCurrentDate() {
	$dmy = "";
	$d = date('d');
	$m = namaBulan();
	$y = date('Y');

	$dmy = $d." ".$m." ".$y;

	return $dmy;
}

// konversi digit bulan ke b.indo
function namaBulan() {
	$mz = date('m');
	$bulan = "";

 	switch ($mz) {
 		case '01':
 			$bulan = "Januari";
 			return $bulan;
 			break;
		case '02':
 			$bulan = "Februari";
 			return $bulan;
 			break;
 		case '03':
 			$bulan = "Maret";
 			return $bulan;
 			break;
 		case '04':
 			$bulan = "April";
 			return $bulan;
 			break;
 		case '05':
 			$bulan = "Mei";
 			return $bulan;
 			break;
 		case '06':
 			$bulan = "Juni";
 			return $bulan;
 			break;
 		case '07':
 			$bulan = "Juli";
 			return $bulan;
 			break;
 		case '08':
 			$bulan = "Agustus";
 			return $bulan;
 			break;
 		case '09':
 			$bulan = "September";
 			return $bulan;
 			break;
 		case '10':
 			$bulan = "Oktober";
 			return $bulan;
 			break;
 		case '11':
 			$bulan = "November";
 			return $bulan;
 			break;
 		case '12':
 			$bulan = "Desember";
 			return $bulan;
 			break;										 		
 		default:
 			$bulan = "Not Found";
 			return $bulan;
 			break;

 		
 	}
}

// untuk set output enumerasi status pada table tb_sppd
function setStatusSppd($curStatus) {
	$setStatus = "";

	if ($curStatus == 0) {
		$setStatus = '<p class="text-primary">Di Input</p>';
	} else if ($curStatus == 1) {
		$setStatus = '<p class="text-success">Di Konfirmasi</p>';
	} else if ($curStatus == 2) {
		$setStatus = '<p class="text-secondary">Selesai</p>';
	} else {
		$setStatus = '<p class="text-danger">Undefined Enum</p>';
	}

	return $setStatus;
}

// filter html
function filtering($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// membuat png QR
function QR_IMG_Generate($qkey, $code, $nip, $date) {
	global $APP_PATH_DOC;
	global $QR_IMG_PATH;

	$fileName = $code."-".$nip."-".$date."-QRImgSPPDBapas.png";

	$ABSOLUTE_IMG_PATH = $_SERVER['DOCUMENT_ROOT'].$APP_PATH_DOC.$QR_IMG_PATH.$fileName;

	$URL_QR_IMG = $QR_IMG_PATH.$fileName;

	if (!file_exists($ABSOLUTE_IMG_PATH)) {
		QRcode::png($qkey, $ABSOLUTE_IMG_PATH);
	} else {
		echo ("<script>console.log('file already generated, cached now')</script>");
	}
	
	return $URL_QR_IMG;
}
// QR Unique key generator c = code, n = nip pegawai, d = date, ka = nama kabapas
function qrKeyGenerate($c, $n, $d){
	$ka = getKaBapas();
	$qres =  $c."-".$n."/Ka.BapasJAKSEL/".$ka."/".$d;
	return $qres;
}

// QR Unique key validator
function qrKeyValidator($qKey) {
	global $bapasDB;

	$qKeyDb = "";

	$tbSppd = $bapasDB->GetData('tb_sppd','*'."qr_key = $qKey");
	while ($d = $bapasDB->GetRow($tbSppd)) {
		$qKeyDb = $d['qr_key'];
	}

	if ($qKey !== $qKeyDb) {
		echo "<script>alert('Invalid QR Key!')</script>";
	} else {
		return $qKeyDb;
	}
}

// ambil data ka. bapas
function getKaBapas() {
	global $bapasDB;

	$kaBapasName = "";

	$tbPegawai = $bapasDB->GetData('tb_pegawai','*',"jabatan = 'Ka.BAPAS'");
	while($d = $bapasDB->GetRow($tbPegawai)) {
		$kaBapasName = $d['nama'];
	}

	return $kaBapasName;

}

function setKaBapas($data=array()) {
	global $bapasDB;

	$bapasDB->Edit();
}
?>
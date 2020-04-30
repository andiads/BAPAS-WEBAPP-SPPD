<?php
include("../config/func.php");

$vaReturn = array();



function showTableHistory() {
	global $bapasDB;
	$nip = "";
	$dbData = "";
	if(isset($_SESSION['nip']) && $_SESSION['username'] !== "admin") {
		$nip = $_SESSION['nip'];	
		$dbData = $bapasDB->GetData('tb_sppd','*',"nip = '".$nip."'");
	} else {
		$dbData = $bapasDB->GetData('tb_sppd','*');
	}
	

	//$dbData = $bapasDB->GetData('tb_sppd','*',"nip = '".$nip."'");
	while($dbRow = $bapasDB->GetRow($dbData)) {
	//$vaReturn[] = $dbRow;
	//echo json_encode($vaReturn);
	$curStatus = $dbRow['status'];
	$setStatus = setStatusSppd($curStatus);
	echo ("
			<tr>
				<td>".$dbRow['id']."</td>
			    <td>".$dbRow['code']."</td>
			    <td>".$dbRow['letter_date']."</td>
				<td>".$dbRow['nip']."</td>
				<td>".$dbRow['fullname']."</td>
				<td>".$dbRow['place_to']."</td>
				<td>".$dbRow['purpose']."</td>
				<td>".$dbRow['nama_klien']."</td>
				<td>".$setStatus."</td>
			</tr>

		");
	}
}

?>
<?php
include("../config/func.php");
$vaReturn = array();
$dbData = $bapasDB->GetData("tb_pegawai");
while($dbRow = $bapasDB->GetRow($dbData)) {
	$vaReturn[] = $dbRow;
	echo json_encode($vaReturn);
}

?>
<?php
include("../config/func.php");

$vaReturn = array();


// nampilin data inbox
function showTableInbox($status) {
	global $bapasDB;

	$PROC_URL = "./backend/proc_inbox.php";
	$curStatus 	= "";
	$setStatus 	= "";
	$act 		= "";
	$nip 		= $_SESSION['nip'];

	$dbData = $bapasDB->GetData('tb_sppd','*',"status = '".$status."'");
	while($dbRow = $bapasDB->GetRow($dbData)) {
	//$vaReturn[] = $dbRow;
	//echo json_encode($vaReturn);
	$curStatus = $dbRow['status'];
	$setStatus = setStatusSppd($curStatus);

	if ($status == "0") {
		$act = '
		    <td><button class="btn btn-user btn-secondary" title="Konfirmasi"
		    		onClick="opSppd(
			    								&quot;'.$dbRow['id'].'&quot;,
				    						   	&quot;'.$PROC_URL.'&quot;,
				    						   	&quot;POST&quot;,
				    						   	&quot;Edit&quot;
		    							  )">
		    			<i class="fa fa-check-square"></i>Konfirmasi
		    	</button>
		    </td>
	';
	} else {
		$act = '
		    <td><button class="btn btn-user btn-success" title="Edit"
		    		onClick="opSppd(
			    							&quot;'.$dbRow['id'].'&quot;,
			    							&quot;'.$PROC_URL.'&quot;,
			    							&quot;POST&quot;,
			    							&quot;Edit&quot;
		    							)">
		    			<i class="fa fa-edit"></i>
		    	</button>
		    	<button class="btn btn-user btn-danger" title="Delete"
		    		onClick="opSppd(&quot;'.$dbRow['id'].'&quot;)">
		    			<i class="fa fa-trash-alt"></i>
		    	</button>
		    </td>
	';
	}
	
	echo ("
			<tr>
			    <td>".$dbRow['code']."</td>
			    <td>".$dbRow['letter_date']."</td>
				<td>".$dbRow['nip']."</td>
				<td>".$dbRow['fullname']."</td>
				<td>".$dbRow['place_to']."</td>
				<td>".substr($dbRow['purpose'],0,20)."...</td>
				<td>".$dbRow['nama_klien']."</td>
				<td>".$setStatus."</td>
				".$act."
			</tr>
		");
	}
}

// menampilkan jumlah data dgn status tertentu 0: di input; 1: di konfirm; 2: selesai
function getCountSPPD($status) {
	global $bapasDB;

	if ($status !== "") {
		$dbData = $bapasDB->GetData('tb_sppd','*',"status = '".$status."'");
		return $bapasDB->Rows($dbData);
	} else {
		$dbData = $bapasDB->GetData('tb_sppd','*');
		return $bapasDB->Rows($dbData);
	}
	
}

?>
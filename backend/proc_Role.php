<?php
include("../config/func.php");
$vaReturn = array();

$dbData = $bapasDB->GetData("tb_userlevel");
while($dbRow = $bapasDB->GetRow($dbData)) {
	//$vaReturn[] = $dbRow;
	//echo json_encode($vaReturn);
$res = '
		<tr>
			<td>'.$dbRow['kode'].'</td>
		    <td>'.$dbRow['keterangan'].'</td>
		    <td><button class="btn btn-success" title="Edit"
		    		onClick="opEditRole(&quot;'.$dbRow['kode'].'&quot;)">
		    			<i class="fa fa-edit"></i>
		    	</button>
		    	<button class="btn btn-danger" title="Delete"
		    		onClick="opEditRole(&quot;'.$dbRow['kode'].'&quot;)">
		    			<i class="fa fa-trash-alt"></i>
		    	</button>
		    </td>
		</tr>

	';

echo $res;
}
?>
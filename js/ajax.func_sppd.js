// ajax are separated currently due the short development period, really sorry. - Andi Dwi Saputro
/*
	/?\ 	Parameters Description 		/?\
		1. IdSppd 		= selected ID from datatables
		2. actUrl		= PHP action file that execute backend processing
		3. methodType	= Form method
		4. op 			= Operation (edit, del, confirm)
			-> op param ::=> 1. "Edit", 2. "Delete", 3. "Confirm"

	/?\ 	Parameters Description 		/?\
*/

function opSppd(IdSppd, actUrl, methodType, op) {
	$.ajax({
				url			: actUrl,
				type 		: methodType,
				data 		: "spid="+IdSppd"&op="+op,
				beforeSend	: function() {
					$("#loading").addClass("spinner-border text-primary");
				},
				success 	: function(data) {
					$("#loading").removeClass("spinner-border text-primary");
					$("#result-op-modal").load("./frontend/view_ajaxLoadSPPD.php");
				}
			});		
}

function opDeleteSppd(IdSppd) {
	$.ajax({
				url			: actUrl,
				type 		: methodType,
				data 		: "spid="+IdSppd,
				beforeSend	: function() {
					$("#loading").addClass("spinner-border text-primary");
				},
				success 	: function(data) {
					$("#loading").removeClass("spinner-border text-primary");
					$("#result-sppd-input").load("./frontend/view_ajaxLoadSPPD.php");
				}
			});		
}

function opConfirmSppd(IdSppd) {
	$.ajax({
				url			: actUrl,
				type 		: methodType,
				data 		: "spid="+IdSppd,
				beforeSend	: function() {
					$("#loading").addClass("spinner-border text-primary");
				},
				success 	: function(data) {
					$("#loading").removeClass("spinner-border text-primary");
					$("#result-sppd-input").load("./frontend/view_ajaxLoadSPPD.php");
				}
			});		
}
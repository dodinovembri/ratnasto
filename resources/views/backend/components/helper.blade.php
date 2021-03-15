<?php  

	function CheckStatus($status)
	{
		if ($status == 0) {
			return "Inactive";
		}elseif ($status == 1) {
			return "Active";
		}else{
			return "Not Defined";
		}
	}

?>
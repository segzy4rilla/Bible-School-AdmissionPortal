<?php
	function AlertAndRedirect($message, $url){
		$echo =    "<script type="text/javascript">
						alert($message);
						window.location = $url;
					</script>";
		echo $echo;
	}
?>
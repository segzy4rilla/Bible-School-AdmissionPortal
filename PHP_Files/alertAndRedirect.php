<?php
	function AlertAndRedirect($message, $url){
		$message = str_replace("'", "\"", $message);
		$echo =    "<script type='text/javascript'>
						alert('$message');
						window.location = '$url';
					</script>";
		echo $echo;
	}
?>
<?php
	include_once "escapeQuotes.php";
	function AlertAndRedirect($message, $url){
		$message = EscapeQuotes($message);
		$echo =    "<script type='text/javascript'>
						alert('$message');
						window.location = '$url';
					</script>";
		echo $echo;
	}
?>
<?php
	include_once "escapeQuotes.php";
	function AlertAndRedirect($message, $url){
		$message = EscapeQuotes($message);
		$redirect = "window.location = '$url';";
		if(empty($url) || ctype_space($url) || !isset($url)){
			$redirect = "";
		}
		$echo =    "<script type='text/javascript'>
						alert('$message');
						".$redirect."
					</script>";
		echo $echo;
	}
?>
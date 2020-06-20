<?php
	function EscapeQuotes($string){
		$string = str_replace('"','\"' , $string);
		$string = str_replace("'","\'" , $string);
		return $string;
	}
?>
<?php
	function GetAdminHomeLink(){
		if($_SESSION['IsMedicalAdmin']){
			$link = 'staffdash.php';
		}
		else if($_SESSION['IsAmbassador']){
			$link = 'ambassadorDash.php';
		}
		else{
			$link = 'admindash2.php';
		}
		return $link;
	}
?>
<?php
	function GetAdminHomeLink(){
		if($_SESSION['IsMedicalAdmin']){
			$link = 'staffdash.php';
		}
		else{
			$link = 'admindash2.php';
		}
		return $link;
	}
?>
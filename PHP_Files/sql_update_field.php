<?php
	function sql_update_field($conn, $table, $field, $ID, $value){
		$alertMessage = "";
		if(isset($value) && $value != ""){
			$alertMessage = "";

			$updateField = $conn->prepare("UPDATE ".$table." SET ".$field." = '".$value."' WHERE User_ID = '".$ID."'");
			$fieldUpdated = $updateField->execute();
			
			if(!$fieldUpdated){
				$alertMessage = $alertMessage. "Sorry, there was an error updating ".($field);
			}
		}
		return $alertMessage;
	}
?>
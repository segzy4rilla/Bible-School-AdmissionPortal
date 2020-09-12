<?php
	include_once "escapeQuotes.php";
	
	function sql_update_field_II($conn, $table, $field, $ID, $value, $IDField)
	{
		$alertMessage = "";
		if (isset($value) && $value != "") {
			$value = EscapeQuotes($value);
			$alertMessage = "";

			$updateField = $conn->prepare("UPDATE " . $table . " SET " . $field . " = '" . $value . "' WHERE ".$IDField." = '" . $ID . "'");
			$fieldUpdated = $updateField->execute();

			if (!$fieldUpdated) {
				$alertMessage = $alertMessage . "Sorry, there was an error updating " . ($field);
			}
		}
		return $alertMessage;
	}

?>
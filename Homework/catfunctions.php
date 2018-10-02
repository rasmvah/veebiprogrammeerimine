<?php
	//Laen andmebaasi info
	require("../../../config.php");
	//echo $GLOBALS["serverUsername"];
	$database = "if18_Rasmus_Va_1";
	
	//anonüümse sõnumi salvestamine
	function savecat($cat){
		$notice = "";
		//serveri ühendus (server, kasutaja, parool, andmebaas)
		$mysqli = new mysqli($GLOBALS["serverHost"],$GLOBALS["serverUsername"],$GLOBALS["serverPassword"],$GLOBALS["database"]);
		//valmistan ette sql käsu
		$stmt = $mysqli->prepare("INSERT INTO kiisu (message) VALUES(?)");
		echo $mysqli->error;
		//asendame sql käsus küsimärgi päris infoga (andmetüüp, andmed ise)
		//s - string; i - integer; d - decimal
		$stmt->bind_param("s", "s", "i", $cat);
		if ($stmt->execute()){
			$notice = 'Andmed "' .$cat .'"on saadetud.';
		}	else {
			$notice = "Andmete saatmisel tekkis viga: " .$stmt->error;
		}
		$stmt->close();
		$mysqli->close();
		return $notice;
	}

	function listallmessages(){
		$msgHTML = "";
		$mysqli = new mysqli($GLOBALS["serverHost"],$GLOBALS["serverUsername"],$GLOBALS["serverPassword"],$GLOBALS["database"]);
		$stmt = $mysqli->prepare("SELECT message FROM kiisu");
		echo $mysqli->error;
		$stmt->bind_result($msg);
		$stmt->execute();
		while($stmt->fetch()){
			$msgHTML .= "<p>" .$msg ."</p> \n";
		$stmt->close();
		$mysqli->close();
		
		}
		//teksti sisestuse kontroll
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	}	
?>
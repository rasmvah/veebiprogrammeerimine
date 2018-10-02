<?php
	//Laen andmebaasi info
	require("../../../config.php");
	//echo $GLOBALS["serverUsername"];
	$database = "if18_Rasmus_Va_1";
	
	function signup($firstName, $lastName, $birthDate, $gender, $email, $password){
		$notice = "";
		$mysqli = new mysqli($GLOBALS["serverHost"],$GLOBALS["serverUsername"],$GLOBALS["serverPassword"],$GLOBALS["database"]);
		$stmt = $mysqli->prepare("INSERT INTO VPusers (firstname, lastname, birthdate, gender, email, password) VALUES (?,?,?,?,?,?)");
		echo $mysqli->error;
		//valmistame parooli ette salvestamiseks, krüpteerime, teeme räsi (hash).
		$options = [
			"cost" => 12,
			"salt" => substr(sha1(rand()), 0, 22),];
		$pwdhash = password_hash($password, PASSWORD_BCRYPT, $options);
		$stmt->bind_param("sssiss", $firstName, $lastName, $birthDate, $gender, $email, $pwdhash);
		if($stmt->execute()){
			$notice = "Uue kasutaja lisamine õnnestus";
		} else {
			$notice = " kasutaja lisamisel tekkis viga" .$stmt->error;
		}
		
		$stmt->close();
		$mysqli->close();
		return $notice;
	}
	
	//anonüümse sõnumi salvestamine
	function saveAMsg($msg){
		$notice = "";
		//serveri ühendus (server, kasutaja, parool, andmebaas)
		$mysqli = new mysqli($GLOBALS["serverHost"],$GLOBALS["serverUsername"],$GLOBALS["serverPassword"],$GLOBALS["database"]);
		//valmistan ette sql käsu
		$stmt = $mysqli->prepare("INSERT INTO VPamsg1 (message) VALUES(?)");
		echo $mysqli->error;
		//asendame sql käsus küsimärgi päris infoga (andmetüüp, andmed ise)
		//s - string; i - integer; d - decimal
		$stmt->bind_param("s", $msg);
		if ($stmt->execute()){
			$notice = 'Sõnum: "' .$msg .'"on salvestatud.';
		}	else {
			$notice = "Sõnumi salvestamisel tekkis tõrge: " .$stmt->error;
		}
		$stmt->close();
		$mysqli->close();
		return $notice;
	}
	
	function listallmessages(){
		$msgHTML = "";
		$mysqli = new mysqli($GLOBALS["serverHost"],$GLOBALS["serverUsername"],$GLOBALS["serverPassword"],$GLOBALS["database"]);
		$stmt = $mysqli->prepare("SELECT message FROM VPamsg1");
		echo $mysqli->error;
		$stmt->bind_result($msg);
		$stmt->execute();
		while($stmt->fetch()){
			$msgHTML .= "<p>" .$msg ."</p> \n";
		}
		$stmt->close();
		$mysqli->close();
		return $msgHTML;
		
		}
		//teksti sisestuse kontroll
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}	
?>
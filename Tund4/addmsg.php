<?php
    //kutsume välja funktsioonide faili
	require("functions.php");
	
	$notice = null;
	
	if (isset($_POST["submitMessage"])){
		if ($_POST["message"] != "Siia sisesta oma sõnum ..." and !empty($_POST["message"])){
			$message = test_input($_POST["message"]);
			$notice = "Sõnum olemas";
				else {
				$notice = "Palun kirjuta sõnum";
				}
		}	
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Anonüümse sõnumi lisamine</title>
	</head>
<body>
	<h1>Sõnumi lisamine</h1>
	
	<p>	See leht on loodud õppetöö raames, ei pruugi parim välja näha
		ning ei sisalda tõsiselt võetavat sisu.
	</p>
	<hr> 
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label>Sõnum (max 256 märki):</label>
		<br>
		<textarea rows="4" cols="64" name="message">Siia sisesta oma sõnum ...</textarea>
		<br>
		<input type="submit" name="SubmitMessage" value="Salvesta sõnum">
	</form>
	<hr>
	<p><?php echo $notice ?></p>
	<?php
	if (isset($_POST["firstName"])) {
	echo "<p>" .$fullname ." " .$lastName."olete elanud järgnevatel aastatel</p>\n";
	echo "<ol> \n";
		for ($i = $_POST["birthYear"]; $i <= date("Y"); $i ++){
			echo "<li>" .$i ."</li> \n";
		}
	echo "</ol> \n";
	}
	?>
</body>
</html>
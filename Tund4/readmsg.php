<?php
    //kutsume välja funktsioonide faili
	require("functions.php");
	
	$notice = listallmessages();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Anonüümsete sõnumite lugemine</title>
	</head>
<body>
	<h1>Sõnumid</h1>
	
	<p>	See leht on loodud õppetöö raames, ei pruugi parim välja näha
		ning ei sisalda tõsiselt võetavat sisu.
	</p>
	<hr> 
	<?php
		echo $notice;
	?>
</body>
</html>
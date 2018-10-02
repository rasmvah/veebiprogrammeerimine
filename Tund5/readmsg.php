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
	
	<p>Siin on kirjas teie kirjutatud sõnumid.</p>
	<hr> 
	<?php
		echo $notice;
	?>
</body>
</html>
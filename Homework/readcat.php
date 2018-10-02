<?php
    //kutsume välja funktsioonide faili
	require("catfunctions.php");
	
	$notice = listallmessages();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Kasside andmete lugemine</title>
	</head>
<body>
	<h1>Kasside andmed</h1>
	
	<p>Siin on kirjas kasside andmed.</p>
	<hr> 
	<?php
		echo $notice;
	?>
</body>
</html>
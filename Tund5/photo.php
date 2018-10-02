<?php
    $firstName = "Rasmus";
	$lastName = "Vahtra";
	//loeme piltide kataloogi sisu
	$dirToRead = "../../pics/";
	$allFiles = scandir ($dirToRead);
	$picFiles = array_slice ($allFiles, 1);
	var_dump($picFiles);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>
				<?php
					echo $firstName;
					echo " ";
					echo $lastName;
				?>
			, õppetöö</title>
	</head>
<body>
	<h1>

		<?php
			echo $firstName ." " .$lastName;
		?>

		IF18
	</h1>
	<p>	See leht on loodud õppetöö raames, ei pruugi parim välja näha
		ning ei sisalda tõsiselt võetavat sisu või äkki ikkagi sisaldab? Never know...
	</p>
	<?php
	//<img src="" alt="pilt">
	for ($i = 1; $i < count ($picFiles); $i ++) {
	echo '<img src="' .$dirToRead .$picFiles[$i] .'" alt="pilt"><br>';
	}
	?>
</body>
</html>
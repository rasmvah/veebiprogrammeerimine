<?php
    //echo "See on minu esimene PHP";
    $firstName = "Rasmus";
	$lastName = "Vahtra";
	$dateToday = date("d.m.Y");
	$hourNow = date("G");
	$partOfDay = "";
	if ($hourNow < 8) {
		$partOfDay = "varajane hommik";
	}
	if ($hourNow >= 8 and $hourNow < 16) {
		$partOfDay = "kooli päev";
	}
if ($hourNow >= 16 and $hourNow < 23) {
		$partOfDay = "vaba aeg võibolla";
	}
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
    õppetöö</title>
	</head>
	<body>
	<h1>

	<?php
		echo $firstName ." " .$lastName;
	?>

	IF18</h1>
	<p>See leht on loodud õppetöö raames, ei pruugi parim välja näha
	ning ei sisalda tõsiselt võetavat sisu või äkki ikkagi sisaldab? Never know...</p>

	<?php
	echo "<p>Tänane kuupäev on:" .$dateToday .".<p>\n";
	echo "<p>Lehe avamise hetkel oli kell:" .date("H.i.s") .". Käes oli " .$partOfDay .".</p> \n";
	?>

	<p>See lause on lisatud kodus.</p>
	<p>See on lisatud peale kodutööd koolis.</p>
	<img src="http://greeny.cs.tlu.ee/~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_3.jpg" alt="Tallinna ülikooli Terra õppehoone sissepääs">
	<p>Mul on ka sõber, kes teeb ka <a href="../~mariaru/">veebi</p>
<!--	<img src="https://www.google.ee/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwimgOCuo7LdAhXEKlAKHf3OCOcQjRx6BAgBEAU&url=http%3A%2F%2Fwww.animalplanet.com%2Fpets%2Fcats%2F&psig=AOvVaw31a45SlegePj7VUJg0UqBm&ust=1536732109938614" alt="kui TLÜ terra sissepääsu pilt on katki, siis pilt kassidest."-->
<!--Absoluutne aadress ehk url. 
relatiivne aadress ehk viide põhimõtteliselt.-->
	<nav id="top-menu">
		<ul class="menu">
			<li> <a href="http://greeny.cs.tlu.ee/~rinde/veebiprogrammeerimine2018s" target="_blank">Rinde Greeny</a></li>
			<li> <a href="https://www.google.com/">Google</a></li>
			<li> <a href="https://www.tlu.ee/">Tallinna Ülikool</a></li>
			<li> <a href="https://www.facebook.com/">Facebook</a></li>
		</ul>
	</nav>
	</body>
</html>
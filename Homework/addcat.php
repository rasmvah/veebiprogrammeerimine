<?php
  //kutsume välja funktsioonide faili
  require("catfunctions.php");
  
  $notice = null;
  
  if (isset($_POST["SubmitCat"])){
	if ($_POST["message"] != "Sisestage kassi andmed!" and !empty($_POST["message"])){
	  $cat = test_input($_POST["message"]);
	  $notice = savecat($cat);	
	} else {
	  $notice = "Palun kirjuta andmed!";	
	}
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Kassi andmete lisamine</title>
	</head>
<body>
	<h1>Kassi andmete lisamine</h1>
	
	<p>	See leht on loodud õppetöö raames, ei pruugi parim välja näha
		ning ei pruugi sisaldada teie lisatud kasside nimesid.
	</p>
	<hr> 
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label>Kassi nimi:</label>
		<br>
		<textarea rows="2" cols="64" name="name">Siia sisesta kassi nimi.</textarea>
		<br>
        <textarea rows="2" cols="64" name="color">Siia sisesta kassi värv.</textarea>
        <br>
        <textarea rows="2" cols="64" name="tail lenght">Siia sisesta kassi saba pikkus.</textarea>
        <br>
		<input type="submit" name="sendData" value="Saada andmed">
	</form>
	<hr>
	<p><?php echo $notice; ?></p>
	
</body>
</html>
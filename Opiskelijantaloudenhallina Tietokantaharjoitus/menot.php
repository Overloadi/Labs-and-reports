<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="tyyli.css">
<meta charset="UTF-8">
<h1>Menot</h1>
</head>
<body>
<div id="keski">
	<form action="processmenot.php" method="post">
	Kohde:<br>
	<select name ="kohde">
		<option value="kouluruoka">Kouluruoka</option>
		<option value="paivittaistavarat">Päivittäistavarat</option>
		<option value="koulutarvikkeet">Koulutarvikkeet</option>
		<option value="vaatteet">Vaatteet</option>
		<option value="ajoneuvo">Ajoneuvon kustannukset</option>
		<option value="asumiskustannukset">Asumiskustannukset ja Laskut</option>
		<option value="viihde">Viihde</option>
		<option value="muut">Muut</option>
	</select></br>

	Tarkempi tieto:<br>
	<input type="text" name="lisatieto"> </br> 

	Summa:<br>
	<input type="text" name="summa"> €</br>


	<label for="paivamaara">Päivämäärä</label></br><input name="paivamaara" type="date" value='<?php echo date('Y-m-d');?>' /></br>

	<input type="submit" name="submit" value="Submit">
	</form>

	<a href="valikko.php">
	<button>Päävalikko</button>
	</a>



</div>

</body>
</html>
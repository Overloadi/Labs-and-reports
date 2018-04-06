<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="tyyli.css" type="text/css">

<style type="text/css">
   .hidden {
        display: none;
   {
   .visible {
        display: block;
   }
</style>

 
<title>Opiskelijantulojenhallintatietokantajarjestelma</title>
</head>
<body>

<div id="keski">
	<h1>OPISKELIJANTALOUDENHALLINTATIETOKANTAJÄRJESTELMÄ</h1>
	<h2>Joni Korpihalkola, Joonas Mankinen, Niko Poutanen</h2>
	<h2>Versio 1.01 </h2> <br>
<form action="login.php" method="post">
		<h2>Käyttäjätunnus:</h2>
		<input id="moro" type="text" name="kayttaja"></br>

		<h2>Salasana:</h2>
		<input id="moro" type="password" name="salasana"> </br> 


		<input type="submit" name="login" value="Login">
</form>

<!-- <a href="valikko.php">
	<button id="paavalikko">Päävalikko</button>
	</a>
-->


<button id="buttonUusiKayttaja">Uusi käyttäjä</button>



<div class="hidden" id="uusikayttaja">
<form action="register.php" method="post">
	Etunimi:<br>
	<input type="text" name="enimi"></br>

	Sukunimi:<br>
	<input type="text" name="snimi"></br>

	Käyttäjätunnus:<br>
	<input type="text" name="kayttaja"></br>

	Salasana:<br>
	<input type="password" name="salasana"> </br> 
	<input id="moro" type="submit" name="register" value="Rekisteröi uusi käyttäjä">
</form>
</div>

<script type="text/javascript">

    var uusikayttajaDiv = document.getElementById('uusikayttaja');

    var uusikayttajaBtn = document.getElementById('buttonUusiKayttaja');

    uusikayttajaBtn.onclick = function() {
        uusikayttajaDiv.setAttribute('class', 'visible');
    };

</script>
</div>

</body>
</html>
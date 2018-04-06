<!DOCTYPE html>
<?php
session_save_path('/../php_session');
session_start(); 
?>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="tyyli.css" type="text/css"> 
<title>Opiskelijantulojenhallintatietokantajarjestelma</title>
</head>
<body>
<div id="keski">
 <h1>Lisää tulo</h1>
<a href="tulot.php">
	<button>Tulot</button>
</a>

<h1>Lisää meno</h1>
 <a href="menot.php">
	<button>Menot</button>
</a>

<h1>Yhteenveto</h1>
 <a href="http://student.labranet.jamk.fi/~K2438/chartjs1/bargraph.html">
	<button>Yhteenveto</button>
<a/>
<h1>Kirjaudu Ulos</h1>
 <a href="logout.php">
	<button>Kirjaudu Ulos</button>
</a>
</div>
</body>
</html>
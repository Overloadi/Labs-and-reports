<?php
session_save_path('php_sessions');
// ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../php_session'));
session_start();
// create a variable
$kayttajatunnus=$_POST["kayttaja"];
$salasana=$_POST["salasana"];

$servername = "mysql.labranet.jamk.fi";
$username = "K1625";
$password = "os4a8Z38E7pvLlXASmKJ7CuWhHHRIwET";

// Create connection
$conn=mysqli_connect($servername,$username,$password,"K1625_2");

 
if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
}

echo "Yhdistetty onnistuneesti tietokantaan." . PHP_EOL;

//Execute the query
$tiedot = "SELECT Salasana FROM Henkilo WHERE Kayttajatunnus = '$kayttajatunnus' and Salasana = '$salasana'";
// $henkiloidhaku = "SELECT idHenkilo FROM Henkilo WHERE Kayttajatunnus = '$kayttajatunnus' AND Salasana = '$salasana'";
if ($henkiloidtemp = mysqli_query($conn, "SELECT idHenkilo FROM Henkilo WHERE Kayttajatunnus = '$kayttajatunnus' AND Salasana = '$salasana'")) {
    printf("Select returned %d rows.\n", mysqli_num_rows($henkiloidtemp));
}
$henkiloidarray = mysqli_fetch_array($henkiloidtemp,MYSQLI_ASSOC);
$henkiloid = $henkiloidarray["idHenkilo"];
mysqli_close($conn);
$conni=mysqli_connect($servername,$username,$password,"K1625_2");
// $henkiloid = mysqli_query($conn,$henkiloidhaku);
$result = mysqli_query($conni,$tiedot);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];
$count = mysqli_num_rows($result);
// if result matched username and password, table row must be 1 row

if($count == 1) {
	  // echo "HenkiloID on $henkiloid";
      $_SESSION['henkiloid'] = $henkiloid;
	  echo("{$_SESSION['henkiloid']}"."<br />");
      echo "<a href='valikko.php'>Mene päävalikkoon</a>";
      }
	  else {
		 echo "<br>Kirjaituminen epäonnistui<br>";
		 echo "<a href='index.php'>Takaisin kirjautumiseen</a>";
      }
?>

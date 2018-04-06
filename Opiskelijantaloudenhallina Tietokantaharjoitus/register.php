<?php
// create a variable
$etunimi=$_POST["enimi"];
$sukunimi=$_POST["snimi"];
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

echo "Yhdistetty onnistuneesti." . PHP_EOL;

//Execute the query
mysqli_query($conn,"INSERT INTO Henkilo (Etunimi,Sukunimi,Salasana,Kayttajatunnus)
		        VALUES ('".$etunimi."','".$sukunimi."','".$salasana."','".$kayttajatunnus."')");
if (mysqli_affected_rows($conn) > 0){
	echo "<p>Käyttäjä rekisteröity</p>";
	echo "<a href='index.php'>OK</a>";
} 
else {
	echo "Meno EI tallennettu<br />";
	echo mysqli_error ($conn);
}
?>
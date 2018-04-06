<?php
session_save_path('php_sessions');
session_start(); 
echo("{$_SESSION['henkiloid']}"."<br />");
// create a variable
$kohde=$_POST["kohde"];
$lisatieto=$_POST["lisatieto"];
$summa=$_POST["summa"];
$paivamaara=$_POST["paivamaara"];
$henkiloid = $_SESSION['henkiloid'];

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
echo "HenkiloID on $henkiloid";

//Execute the query
mysqli_query($conn,"INSERT INTO Tulot (Lahde,Lisatieto,Summa,Paivamaara,idHenkilo)
		        VALUES ('".$kohde."','".$lisatieto."','".$summa."','".$paivamaara."','".$henkiloid."')");
if (mysqli_affected_rows($conn) > 0){
	echo "<p>Tulo tallennettu</p>";
	echo "<a href='valikko.php'>Go Back</a>";
} 
else {
	echo "Tulo EI tallennettu<br />";
	echo mysqli_error ($conn);
}

?>

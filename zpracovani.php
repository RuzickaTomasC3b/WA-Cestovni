<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "WAZajezdy";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Spojení s databází selhalo: " . $conn->connect_error);
}

$jmeno = $_POST['jmeno'];
$prijmeni = $_POST['prijmeni'];
$telefon = $_POST['telefon'];
$datum = $_POST['datum'];
$destinace = $_POST['destinace'];
$hotel = $_POST['hotel'];
$cena = $_POST['cena'];

$sql = "INSERT INTO zablokovane_zajezdy (jmeno, prijmeni, telefon, datum, destinace, hotel, cena) VALUES ('$jmeno', '$prijmeni', '$telefon', '$datum', '$destinace', '$hotel', '$cena')";

if ($conn->query($sql) === TRUE) {
    echo "Zajezd byl uspesne zarezervovan.";
} else {
    echo "Chyba pri zpracovani dotazu: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php

$serverName = "localhost";
$userName = "jakub.czura";
$password = "jakubczura123";
$dbName = "phpczura";

#połączenie z bazą danych
if(empty($userName))
{
    echo "Proszę uzupełnić dane w pliku database.php";
}
else
{
    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    if(!$conn)
    {
        die("błąd logowania ". mysqli_connect_error());
    }
}

?>
<?php

include("connection.php");
$con = connection();

$ID_f = null;
$Cuenta_DC = $_POST["Cuenta_DC"];			
$Nick_SX = $_POST["Nick_SX"];
$Horas = $_POST["Horas"];
$Squad_Gang_Clan = $_POST["Squad_Gang_Clan"];
$CoinDeseado = $_POST["CoinDeseado"];
$Email = $_POST["Email"];

$sql = "INSERT INTO Formulario VALUES('$ID_f', '$Cuenta_DC', '$Nick_SX', '$Horas', '$Squad_Gang_Clan', '$CoinDeseado', '$Email')";
$query = mysqli_query($con, $sql);

if($query) {
    Header("Location: index.php");
};

?>
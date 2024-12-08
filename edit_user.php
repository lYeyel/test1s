<?php
    include('connection.php');
    $con = connection();

$ID = $_POST['ID_f'];
$Cuenta_DC = $_POST["CuentaDC"];			
$Nick_SX = $_POST["Nick"];
$Horas = $_POST["Horas"];
$Squad_Gang_Clan = $_POST["Squad_Gang_Clan"];
$CoinDeseado = $_POST["CoinDeseado"];
$Email = $_POST["Email"];

$sql = "UPDATE Formulario SET Cuenta_DC='$Cuenta_DC', Nick_SX='$Nick_SX', Horas='$Horas', Squad_Gang_Clan='$Squad_Gang_Clan', CoinDeseado='$CoinDeseado', Email='$Email' WHERE ID_f='$ID' ";
$query = mysqli_query($con, $sql);

if($query) {
    Header("Location: index.php"); //Redirecciona a la locacion cuando se termine la función 
    
};


?>
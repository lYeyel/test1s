<?php
    include('connection.php');
    $con = connection();

    $ID_f=$_GET['ID_f'];

    $sql = "DELETE FROM Formulario WHERE ID_f='$ID_f'";

    $query = mysqli_query($con, $sql);

if($query) {
    Header("Location: index.php"); //Redirecciona a la locacion cuando se termine la función 
};
?>


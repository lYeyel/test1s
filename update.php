<?php 
    include('connection.php');
    $con = connection();

    $ID_f=$_GET['ID_f'];

    $sql = "SELECT * FROM Formulario WHERE ID_f='$ID_f'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Editar</title>
</head>
<body>

    <div class="users-form">

    <form action="edit_user.php" method="POST">

    <h1>Editar Información</h1>
    <input type="hidden" name="ID_f" value="<?= $row['ID_f'] ?>">
    <input type="text" name="CuentaDC" value="<?= $row['Cuenta_DC'] ?>">
    <input type="text" name="Nick" value="<?= $row['Nick_SX'] ?>">
    <input type="text" name="Horas" value="<?= $row['Horas'] ?>">
    <input type="text" name="Squad_Gang_Clan" value="<?= $row['Squad_Gang_Clan'] ?>">
    <input type="text" name="CoinDeseado" value="<?= $row['CoinDeseado'] ?>">
    <input type="text" name="Email" value="<?= $row['Email'] ?>">

    <input type="submit" value="Actualizar información">



    </form>
    </div>
</body>
</html>
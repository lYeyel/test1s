<?php
include("connection.php");

$con = connection();

$sql = "SELECT * FROM Formulario";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Formulario</title>
</head>
<body>
    <div class="users-form">
        <form action="insert_user.php" method="POST">
            <p>Ingresa tu  cuenta de Discord</p>
            <input type="text" name="Cuenta_DC" placeholder="Cuenta de Discord" required>

            <p>Ingresa el Nick actual del Servidor SX</p>
            <input type="text" name="Nick_SX" placeholder="Nick actual en SX" required>

            <p>Ingresa la cantidad de horas en el servidor</p>
            <input type="text" name="Horas" placeholder="Ejemplo:2542" required>

            <p>Especifique a que Grupo pertenece y el nombre del mismo</p>
            <input type="text" name="Squad_Gang_Clan" placeholder="Nombre del grupo">

            <p>Tipo de Coin que desea adquirir</p>
            <input type="text" name="CoinDeseado" placeholder="Desbloqueado/Bloquado" required>

            <p>Correo electronico</p>
            <input type="text" name="Email" placeholder="pepitoperez@hotmail">

            <input type="submit" value="Enviar Formulario">
        </form>
    </div>

    <div class="users-table">
        <h2>Formularios</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cuenta_DC</th>
                    <th>Nick_SX</th>
                    <th>Horas</th>
                    <th>Squad_Gang_Clan</th>
                    <th>Coin Deseado</th>
                    <th>Email</th>

                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)) : ?>
                <tr>

                <th> <?= $row["ID_f"] ?> </th>
                <th>  <?= $row["Cuenta_DC"] ?> </th>
                <th>  <?= $row["Nick_SX"] ?> </th>
                <th>  <?= $row["Horas"] ?> </th>
                <th>  <?= $row["Squad_Gang_Clan"] ?> </th>
                <th>  <?= $row["CoinDeseado"]?> </th>
                <th>  <?= $row["Email"] ?> </th>

                <th><a href="update.php?ID_f=<?= $row["ID_f"] ?>" class="users-table--edit">Editar</a></th>
                <th><a href="delete_user.php?ID_f=<?= $row["ID_f"] ?>" class="users-table--delete">Eliminar</a></th>
                </tr>

                <?php endwhile; ?>

            </tbody>
        </table>
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            // me conecto a la BD
            include ('conexion.php');

           
            $idprop=$_REQUEST["id"];

            // Creo y construyo la consulta
            $consulta="DELETE FROM propietarios WHERE IdPropietario='".$idprop."';";
            $res=mysqli_query($conexion,$consulta) or die("consulta incorrecta");

            header("Location:main.php");
        ?>
    </body>
</html>
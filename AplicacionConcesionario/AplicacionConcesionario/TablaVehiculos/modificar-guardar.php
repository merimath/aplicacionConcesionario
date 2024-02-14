<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('conexion.php');

        $modelo=$_REQUEST["Modelo"];
        $motor=$_REQUEST["Motor"];
        $color=$_REQUEST["Color"];
        $combustible=$_REQUEST["Combustible"];
        $precio=$_REQUEST["Precio"];
        $marca=$_REQUEST["Marca"];
        $idprop=$_REQUEST["IdPropietario"];

        $consulta="UPDATE vehiculos SET 
                    Modelo='$modelo' WHERE(IdPropietario='$idprop')";
        $res=mysqli_query($conexion,$consulta) or die("consulta incorrecta");

        header("Location:main.php");
    ?>
</body>
</html>
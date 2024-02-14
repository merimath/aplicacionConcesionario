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

        $idprop=$_REQUEST["IdPropietario"];
        $nombre=$_REQUEST["Nombre"];
        $edad=$_REQUEST["Edad"];
        $direcc=$_REQUEST["Direccion"];

        $consulta="UPDATE propietarios SET 
                    Nombre='$nombre',Edad='$edad',Direccion='$direcc' WHERE(IdPropietario='$idprop')";
        $res=mysqli_query($conexion,$consulta) or die("consulta incorrecta");

        header("Location:main.php");
    ?>
</body>
</html>
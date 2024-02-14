<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: linear-gradient(to right, #5fa0eb, #cd78e9);
            font-size: 30px;
        }
        body a{
            text-decoration: none;
        }
        body a:hover{
            color:orange;
        }
    </style>
</head>
<body>
    <?php
        include('conexion.php');
        $idprop=$_REQUEST["id"];

        $consulta="SELECT * from vehiculos WHERE IdPropietario='".$idprop."';";
        $res=mysqli_query($conexion,$consulta) or die("Consulta incorrecta");
        $fila=mysqli_fetch_array($res);
    ?>

    <form method="get" action="modificar-guardar.php">
        <table border="1" align="center" cellpadding="3" cellspacing="0">
        <tr>
                <td><div align="right">Modelo</div></td>
                <td><input name="Modelo" type="text"></td>
            </tr>
            <tr>
                <td><div align="right">Motor</div></td>
                <td><input name="Motor" type="text"></td>
            </tr>
            <tr>
                <td><div align="right">Color</div></td>
                <td><input name="Color" type="text"></td>
            </tr>
            <tr>
                <td><div align="right">Combustible</div></td>
                <td><input name="Combustible" type="text"></td>
            </tr>
            <tr>
                <td><div align="right">Precio</div></td>
                <td><input name="Precio" type="text"></td>
            </tr>
            <tr>
                <td><div align="right">Marca</div></td>
                <td><input name="Marca" type="text"></td>
            </tr>
            <tr>
                <td><div align="right">IdPropietario</div></td>
                <td><input name="IdPropietario" type="text"></td>
            </tr>
            <tr>
                <td colspan=2>
                <div align="center">
                    <input type="submit" name="enviar" value="Enviar">
                </div>
                </td>
            </tr>
            <tr>
                <td colspan=2><a href="main.php"><center>Volver</center></a></td>
            </tr>
        </table>
    </form>
</body>
</html>
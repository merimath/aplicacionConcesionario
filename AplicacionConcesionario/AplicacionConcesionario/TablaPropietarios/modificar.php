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

        $consulta="SELECT * from propietarios WHERE IdPropietario='".$idprop."';";
        $res=mysqli_query($conexion,$consulta) or die("Consulta incorrecta");
        $fila=mysqli_fetch_array($res);
    ?>

    <form method="get" action="modificar-guardar.php">
        <table border="1" align="center" cellpadding="3" cellspacing="0">
            <tr>
                <td><div align="right">IdPropietario</div></td>
                <td><input name="IdPropietario" type="text" readonly value="<?php echo $fila['IdPropietario'];?>"></td>
            </tr>
            <tr>
                <td><div align="right">Nombre</div></td>
                <td><input name="Nombre" type="text"  value="<?php echo $fila['Nombre'];?>"></td>
            </tr>
            <tr>
                <td><div align="right">Edad</div></td>
                <td><input name="Edad" type="text" value="<?php echo $fila['Edad'];?>"></td>
            </tr>
            <tr>
                <td><div align="right">Dirección</div></td>
                <td><input name="Direccion" type="text" value="<?php echo $fila['Direccion'];?>"></td>
            </tr>
            <tr>
                <td colspan=2>
                    <div align="center">
                        <input type="submit" name="enviar" value="Enviar"/>
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
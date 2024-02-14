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
    <center><h1>Añadir propietario</h1></center>
    <form method="get" action="añadir-guardar.php">
        <table border="2" align="center" cellpadding="3" cellspacing="0">

            <tr>
                <td><div align="right">IDPropietario</div></td>
                <td><input name="idprop" type="text"></td>
            </tr>
            <tr>
                <td><div align="right">Nombre</div></td>
                <td><input name="nombre" type="text"></td>
            </tr>
            <tr>
                <td><div align="right">Edad</div></td>
                <td><input name="edad" type="text"></td>
            </tr>
            <tr>
                <td><div align="right">Dirección</div></td>
                <td><input name="direcc" type="text"></td>
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
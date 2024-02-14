<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: linear-gradient(to left, #cc2b5e, #753a88);
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

<center><h1>Consultas</h1></center>
    <form method="get" action="resul.php">
        <table border="2" align="center" cellpadding="3" cellspacing="0">
            <tr>
                <th colspan=2>Puedes acceder a las siguientes consultas de la base de datos:
                    <div align="left">
                    <ol>
                        <li>Propietarios mayores de 22 años</li>
                        <li>Mostrar los propietarios ordenados alfabéticamente</li>
                        <li>Código de los propietarios que tienen un coche de marca Mercedes</li>
                    </ol>
                    </div>
                </th>
            </tr>
            <tr>
                <td>
                    <h2>Selecciona la consulta que quieres mostrar:</h2>
                </td>
                <td>
                    <select name="consulta">
                            <option name="consulta" value=1>Consulta 1</option>
                            <option name="consulta" value=2>Consulta 2</option>
                            <option name="consulta" value=3>Consulta 3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan=2>
                <div align="center">
                    <input type="submit" name="enviar" value="Consultar">
                </div>
                </td>
            </tr>
            <tr>
                <td colspan=2><a href="../principal.html"><center>Volver a la página principal</center></a></td>
            </tr>
        </table>
    </form>
</body>
</html>
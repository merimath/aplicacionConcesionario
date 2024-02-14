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
        //Preparación de la consulta
        $consulta = "SELECT * FROM propietarios;";

        //Envío de la consulta
        $res = mysqli_query($conexion,$consulta) or die("Consulta incorrecta");

        //Procesamiento de los datos
        $n_filas = mysqli_num_rows ($res);

        //Generación de código HTML
        echo "<center><h1> Listado de propietarios</h1></center>";
        echo "<table align=center>\n";
        echo "<tr bgcolor=#ffffaa>
            <th>IdPropietario</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Dirección</th>
            </tr>\n";

        for($i=1;$i<=$n_filas; $i++)
        {
            $fila = mysqli_fetch_array($res);
            echo "<tr>\n";
            echo "<td>".$fila['IdPropietario']."</td>\n";
            echo "<td>".$fila['Nombre']."</td>\n";
            echo "<td>".$fila['Edad']."</td>\n";
            echo "<td>".$fila['Direccion']."</td>\n";
            //Aquí añadir y elminiar
            echo "<td><a href=modificar.php?id=".$fila['IdPropietario'].">Modificar</a>";
            echo "<td><a href=eliminar.php?id=".$fila['IdPropietario'].">Eliminar</a>";

        }

        echo "<tr><td colspan=7> <hr>";
        echo "<a href='añadir.php'>Añadir propietario</a>";
        echo "</td></tr></table>";
        mysqli_free_result($res);

        //Se cierra la conexión
        mysqli_close($conexion);
    ?>
    <a href="../principal.html"><center>Volver a la página principal</center></a>
</body>
</html>